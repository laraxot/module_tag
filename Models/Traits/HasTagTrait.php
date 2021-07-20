<?php

declare(strict_types=1);

namespace Modules\Tag\Models\Traits;

use Modules\Tag\Models\Tag;

trait HasTagTrait {
    /**
     * ---------- RELATIONSHIPS -----------------.
     */
    public function tags() {
        return $this->morphToMany(Tag::class, 'post', 'tag_morph');
    }

    /**
     * ---------- SCOPES ------------------------.
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