<?php

declare(strict_types=1);

namespace Modules\Tag\Models;

/**
 * Modules\Tag\Models\CategoryMorph.
 */
class CategoryMorph extends BaseMorphPivot {
    /*
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id', 'category_id', 'post_type', 'post_id', 'created_by', 'updated_by', 'auth_user_id', 'note'];
}
