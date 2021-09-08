<?php

declare(strict_types=1);

namespace Modules\Tag\Models\Traits;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Modules\Tag\Models\Tag;
use Modules\Tag\Models\TagMorph;

trait HasTagTrait {
    /**
     * ------------ RELATIONSHIPS -----------------.
     */
    public function tags(): MorphToMany {
        $pivot_class = TagMorph::class;
        $pivot = app($pivot_class);
        $pivot_fields = $pivot->getFillable();
        $pivot_table = $pivot->getTable();

        return $this->morphToMany(Tag::class, 'post', $pivot_table)
            ->using($pivot_class)
            ->withPivot($pivot_fields)
            ->withTimestamps()
            ->with(['post']) //Eager;
            ;
    }

    //da fare
    public function linkable(): MorphTo {
        return $this->morphTo('post');
    }

    /**
     * ------------ SCOPES ------------------------.
     */

    /**
     * Undocumented function
     * $property_id = tag_cat_id
     * $property_value_id = tag_id.
     *
     * @return Builder
     */
    public function scopeOfTag(Builder $query, int $tag_cat_id, int $tag_id) {
        return $query->whereHas(
            'tags',
            function ($item) use ($tag_id): void {
                $item->where('tags.id', $tag_id);
            }
        );
    }
}
