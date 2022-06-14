<?php

declare(strict_types=1);

namespace Modules\Tag\Models;

/**
 * Modules\Tag\Models\Taggable
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Taggable newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Taggable newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Taggable query()
 * @mixin \Eloquent
 */
class Taggable extends BaseMorphPivot {
    /**
     * Undocumented variable.
     *
     * @var array<string>
     */
    protected $fillable = ['tag_id', 'taggable_id', 'taggable_type'];

    /**
     * Undocumented variable.
     *
     * @var string
     */
    protected $table = 'taggables';  // spatie vuol cosi'
}