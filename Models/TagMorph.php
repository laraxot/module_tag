<?php

declare(strict_types=1);

namespace Modules\Tag\Models;

/**
 * Modules\Tag\Models\TagMorph
 *
 * @property int $id
 * @property int $tag_id
 * @property string|null $post_type
 * @property int|null $post_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property string|null $note
 * @property int|null $user_id
 * @method static \Illuminate\Database\Eloquent\Builder|TagMorph newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TagMorph newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TagMorph query()
 * @method static \Illuminate\Database\Eloquent\Builder|TagMorph whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TagMorph whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TagMorph whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TagMorph whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TagMorph wherePostId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TagMorph wherePostType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TagMorph whereTagId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TagMorph whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TagMorph whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TagMorph whereUserId($value)
 * @mixin \Eloquent
 */
class TagMorph extends BaseMorphPivot {
    /**
     * Attributes that should be mass-assignable.
     *
     * @var array<string>
     */
    protected $fillable = ['id', 'tag_id', 'post_type', 'post_id', 'created_at', 'updated_at', 'created_by', 'updated_by', 'user_id', 'note'];
}
