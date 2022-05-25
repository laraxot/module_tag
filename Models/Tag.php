<?php
/**
 * -- spatie.
 */

declare(strict_types=1);

namespace Modules\Tag\Models;

use Spatie\Tags\Tag as BaseTag;

/**
 * Undocumented class.
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
 * @property array $name
 * @property array $slug
 * @property string|null $type
 * @property int|null $order_column
 * @method static Builder|Tag containing(string $name, $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tag newQuery()
 * @method static Builder|Tag ordered(string $direction = 'asc')
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
 * @method static Builder|Tag withType(?string $type = null)
 * @mixin \Eloquent
 * @mixin IdeHelperTag
 */
class Tag extends BaseTag {
    protected $fillable = ['id', 'tag_type', 'tag_cat_id', 'created_at', 'updated_at', 'old_id', 'pos', 'tag_cat_id_up', 'created_by', 'updated_by', 'parent_id', 'name', 'slug', 'type', 'order_column'];

    /**
     * Undocumented variable.
     *
     * @var string
     */
    protected $connection = 'tag'; // this will use the specified database connection
}
