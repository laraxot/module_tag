<?php
/**
 * -- spatie.
 */

declare(strict_types=1);

namespace Modules\Tag\Models;

use Spatie\Tags\Tag as BaseTag;

class Tag extends BaseTag {
    protected $connection = 'tag'; // this will use the specified database connection
}
