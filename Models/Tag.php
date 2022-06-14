<?php
/**
 * -- spatie.
 */

declare(strict_types=1);

namespace Modules\Tag\Models;

use Spatie\Tags\Tag as BaseTag;

/**
 * Modules\Tag\Models\Tag
 *
 * @method static Builder|Tag containing(string $name, $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tag newQuery()
 * @method static Builder|Tag ordered(string $direction = 'asc')
 * @method static \Illuminate\Database\Eloquent\Builder|Tag query()
 * @method static Builder|Tag withType(?string $type = null)
 * @mixin \Eloquent
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
