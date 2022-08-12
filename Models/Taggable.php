<?php

declare(strict_types=1);

namespace Modules\Tag\Models;

use Illuminate\Support\Arr;

/**
 * Modules\Tag\Models\Taggable
 *
 * @property int $tag_id
 * @property string $taggable_type
 * @property int $taggable_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property array $custom_properties
 * @property array $customProperties
 * @method static \Illuminate\Database\Eloquent\Builder|Taggable newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Taggable newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Taggable query()
 * @method static \Illuminate\Database\Eloquent\Builder|Taggable whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Taggable whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Taggable whereCustomProperties($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Taggable whereTagId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Taggable whereTaggableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Taggable whereTaggableType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Taggable whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Taggable whereUpdatedBy($value)
 * @mixin \Eloquent
 */
class Taggable extends BaseMorphPivot {

    /**
     * Undocumented variable.
     *
     * @var string
     */
    protected $table = 'taggables';  // spatie vuol cosi'
    
    /**
     * Undocumented variable.
     *
     * @var array<string>
     */
    protected $fillable = [  
        'tag_id', 
        'taggable_id', 
        'taggable_type',
        'custom_properties',
    ];

    protected $attributes =[
        'custom_properties'=>[],
    ];

    /**
     * Undocumented variable.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'custom_properties' => 'array',
    ];


    
    public function withCustomProperties(array $customProperties): self {
        $this->customProperties = $customProperties;

        return $this;
    }



    public function hasCustomProperty(string $propertyName): bool {
        return Arr::has($this->custom_properties, $propertyName);
    }

    /**
     * Get the value of custom property with the given name.
     *
     * @param string $propertyName
     * @param mixed $default
     *
     * @return mixed
     */
    public function getCustomProperty(string $propertyName, $default = null): mixed  {
        return Arr::get($this->custom_properties, $propertyName, $default);
    }

    /**
     * @param mixed $value
     *
     * @return $this
     */
    public function setCustomProperty(string $name, $value): self {
        $customProperties = $this->custom_properties;

        Arr::set($customProperties, $name, $value);

        $this->custom_properties = $customProperties;

        return $this;
    }

    public function forgetCustomProperty(string $name): self {
        $customProperties = $this->custom_properties;

        Arr::forget($customProperties, $name);

        $this->custom_properties = $customProperties;

        return $this;
    }
}