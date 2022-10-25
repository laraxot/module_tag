<?php
/**
 * -- spatie.
 */

declare(strict_types=1);

namespace Modules\Tag\Models;

use Exception;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Illuminate\Support\Arr;
use Spatie\Tags\Tag as BaseTag;

/**
 * Modules\Tag\Models\Tag.
 *
 * @property int                             $id
 * @property string                          $tag_type
 * @property int                             $tag_cat_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int                             $old_id
 * @property int                             $pos
 * @property int                             $tag_cat_id_up
 * @property string|null                     $created_by
 * @property string|null                     $updated_by
 * @property int                             $parent_id
 * @property array                           $name
 * @property array                           $slug
 * @property string|null                     $type
 * @property int|null                        $order_column
 * @property mixed                           $color
 *
 * @method static Builder|Tag                               containing(string $name, $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tag newQuery()
 * @method static Builder|Tag                               ordered(string $direction = 'asc')
 * @method static \Illuminate\Database\Eloquent\Builder|Tag query()
 * @method static \Illuminate\Database\Eloquent\Builder|Tag whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag whereOldId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag whereOrderColumn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag wherePos($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag whereTagCatId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag whereTagCatIdUp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag whereTagType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag whereUpdatedBy($value)
 * @method static Builder|Tag                               withType(?string $type = null)
 *
 * @mixin \Eloquent
 */
class Tag extends BaseTag {
    /**
     * Undocumented variable.
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
        'order_column',
        'color',
    ];

    public function treeLabel(): string {
        return (string) optional($this->post)->title;
    }

    public function tagCat(): BelongsTo {
        return $this->belongsTo(TagCat::class);
    }

    public function parent(): HasOne {
        return $this->hasOne(self::class, 'parent_id', 'id');
    }

    // questa funzione non dovrebbe essere qui, perchè non è generico
    public function products(): MorphToMany {
        $pivot = app(TagMorph::class);
        $pivot_fields = $pivot->getFillable();
        $pivot_table = $pivot->getTable();
        // ---------------------------------------------------------------------------------------------------------------------------------------
        // Class Modules\Shop\Models\Product was not found while trying to analyse it - discovering symbols is probably not configured properly.
        // 💡 Learn more at https://phpstan.org/user-guide/discovering-symbols
        $product = TenantService::model('product');
        $product_class = \get_class($product);

        return $this->morphedByMany($product_class, 'post', $pivot_table)
            ->using(\get_class($pivot))
            ->withPivot($pivot_fields)
            ->withTimestamps()
            ->with(['post']) // Eager;
        ;
    }

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
        if (! isset($this->pivot)) {
            throw new Exception('['.__LINE__.']['.__FILE__.']');
        }
        // dddx($this->pivot->custom_properties);
        $customProperties = $this->pivot->custom_properties;

        Arr::set($customProperties, $name, $value);

        $this->pivot->custom_properties = $customProperties;
        $this->pivot->save();

        return $this;
    }

    /**
     * Get the value of custom property with the given name.
     *
     * @param mixed $default
     */
    public function getCustomProperty(string $propertyName, $default = null): mixed {
        if (! isset($this->pivot)) {
            throw new Exception('['.__LINE__.']['.__FILE__.']');
        }
        $customProperties = $this->pivot->custom_properties;

        return Arr::get($customProperties, $propertyName, $default);
    }

    public function getColorAttribute(?string $value) {
        if (null !== $value) {
            return $value;
        }
        $value = \Faker\Factory::create()->hexColor();
        try {
            $this->update(['color' => $value]);
        } catch (Exception $e) {
            /*
            dddx([
                'message'=>'preso',
                'id'=>$this->getKey(),
                'attributes'=>$this->getAttributes(),
                'attributes1'=>$this->attributes,
            ]);
            */
        }

        return $value;
    }
}
