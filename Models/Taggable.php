<?php

declare(strict_types=1);

namespace Modules\Tag\Models;

/**
 * Modules\Tag\Models\Taggable
 *
 * @mixin IdeHelperTaggable
 * @property int $tag_id
 * @property string $taggable_type
 * @property int $taggable_id
 * @method static \Illuminate\Database\Eloquent\Builder|Taggable newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Taggable newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Taggable query()
 * @method static \Illuminate\Database\Eloquent\Builder|Taggable whereTagId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Taggable whereTaggableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Taggable whereTaggableType($value)
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
