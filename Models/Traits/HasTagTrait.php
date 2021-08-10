<?php

declare(strict_types=1);

namespace Modules\Tag\Models\Traits;

use Modules\Tag\Models\Tag;
use Modules\Tag\Models\TagMorph;

trait HasTagTrait {
    /**
     * ------------ RELATIONSHIPS -----------------.
     */
    public function tags() {
        $pivot = app(TagMorph::class);
        $pivot_fields = $pivot->getFillable();
        $pivot_table = $pivot->getTable();

        /*dddx($this->morphToMany(Tag::class, 'post', 'tag_morph')
        ->using($pivot)
        ->withPivot($pivot_fields)
        ->withTimestamps()
        ->with(['post'])->get() //Eager;
    );*/

        return $this->morphToMany(Tag::class, 'post', 'tag_morph')
            ->using($pivot)
            ->withPivot($pivot_fields)
            ->withTimestamps()
            ->with(['post']) //Eager;
            ;
    }

    /**
     * ------------ SCOPES ------------------------.
     */

    /**
     * Undocumented function
     * $property_id = tag_cat_id
     * $property_value_id = tag_id.
     */
    public function scopeOfTag($query, $tag_cat_id, $tag_id) {
        return $query->whereHas(
            'tags',
            function ($item) use ($tag_id): void {
                $item->where('tags.id', $tag_id);
            }
        );
    }
}
