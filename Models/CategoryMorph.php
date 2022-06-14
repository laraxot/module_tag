<?php

declare(strict_types=1);

namespace Modules\Tag\Models;

/**
 * Modules\Tag\Models\CategoryMorph
 *
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryMorph newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryMorph newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryMorph query()
 * @mixin \Eloquent
 */
class CategoryMorph extends BaseMorphPivot {
    /**
     * Attributes that should be mass-assignable.
     *
     * @var array<string>
     */
    protected $fillable = ['id', 'category_id', 'post_type', 'post_id', 'created_by', 'updated_by', 'user_id', 'note'];
}
