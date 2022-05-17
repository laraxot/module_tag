<?php
/**
 * -- spatie.
 */

declare(strict_types=1);

namespace Modules\Tag\Models;

use Spatie\Tags\Tag as BaseTag;

/**
 * Undocumented class.
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
