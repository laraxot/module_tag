<?php
/**
 * -- spatie.
 */

declare(strict_types=1);

namespace Modules\Tag\Models;

use Exception;
use Illuminate\Support\Arr;
use Spatie\Tags\Tag as BaseTag;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

/**
 * Modules\Tag\Models\Tag
 *
 * @property int $id
 * @property string $tag_type
 * @property int $tag_cat_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $old_id
 * @property int $pos
 * @property int $tag_cat_id_up
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property int $parent_id
 * @method static Builder|Tag containing(string $name, $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tag newQuery()
 * @method static Builder|Tag ordered(string $direction = 'asc')
 * @method static \Illuminate\Database\Eloquent\Builder|Tag query()
 * @method static \Illuminate\Database\Eloquent\Builder|Tag whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag whereOldId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag wherePos($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag whereTagCatId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag whereTagCatIdUp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag whereTagType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag whereUpdatedBy($value)
 * @method static Builder|Tag withType(?string $type = null)
 * @mixin \Eloquent
 */
class Tag extends BaseTag {

    /**
     * Undocumented variable
     *
     * @var array
     */
    protected $fillable = [
        'id', 
        'tag_type', 
        'tag_cat_id', 
        'created_at', 
        'updated_at', 
        'old_id', 
        'pos', 
        'tag_cat_id_up', 
        'created_by', 
        'updated_by', 
        'parent_id', 
        'name', 
        'slug', 
        'type', 
        'order_column'
    ];

    /**
     * Undocumented variable.
     *
     * @var string
     */
    protected $connection = 'tag'; // this will use the specified database connection


    /**
     * @param mixed $value
     *
     * @return $this
     */
    public function setCustomProperty(string $name, $value): self {
        if(!isset($this->pivot)){
            throw new Exception('['.__LINE__.']['.__FILE__.']');
        }
        //dddx($this->pivot->custom_properties);
        $customProperties = $this->pivot->custom_properties;

        Arr::set($customProperties, $name, $value);

        $this->pivot->custom_properties = $customProperties;
        $this->pivot->save();

        return $this;
    }

    /**
     * Get the value of custom property with the given name.
     *
     * @param string $propertyName
     * @param mixed $default
     *
     * @return mixed
     */
    public function getCustomProperty(string $propertyName, $default = null): mixed {
        if(!isset($this->pivot)){
            throw new Exception('['.__LINE__.']['.__FILE__.']');
        }
        $customProperties = $this->pivot->custom_properties;

        return Arr::get($customProperties, $propertyName, $default);
    }
    
}