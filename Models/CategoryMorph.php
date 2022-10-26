<?php

declare(strict_types=1);

namespace Modules\Tag\Models;

/**
 * Modules\Tag\Models\CategoryMorph.
 *
 * @property int                             $id
 * @property int                             $category_id
 * @property string|null                     $post_type
 * @property int|null                        $post_id
 * @property int|null                        $user_id
 * @property string|null                     $note
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null                     $created_by
 * @property string|null                     $updated_by
 *
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryMorph newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryMorph newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryMorph query()
 *
 * @mixin \Eloquent
 */
class CategoryMorph extends BaseMorphPivot {
    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id', 'category_id', 'post_type', 'post_id', 'created_by', 'updated_by', 'user_id', 'note'];
}
