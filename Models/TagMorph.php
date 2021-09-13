<?php

declare(strict_types=1);

namespace Modules\Tag\Models;

/**
 * Modules\Tag\Models\TagMorph
 *
 * @method static \Illuminate\Database\Eloquent\Builder|TagMorph newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TagMorph newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TagMorph query()
 * @mixin \Eloquent
 */
class TagMorph extends BaseMorphPivot {
    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id', 'tag_id', 'post_type', 'post_id', 'created_at', 'updated_at', 'created_by', 'updated_by', 'auth_user_id', 'note'];
}
