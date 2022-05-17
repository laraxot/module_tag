<?php

declare(strict_types=1);

namespace Modules\Tag\Models;

/**
 * @mixin IdeHelperTaggable
 */
class Taggable extends BaseMorphPivot {
    /**
     * Undocumented variable.
     *
     * @var array
     */
    protected $fillable = ['tag_id', 'taggable_id', 'taggable_type'];

    /**
     * Undocumented variable.
     *
     * @var string
     */
    protected $table = 'taggables';  // spatie vuol cosi'
}
