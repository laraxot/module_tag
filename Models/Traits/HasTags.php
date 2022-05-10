<?php

declare(strict_types=1);

namespace Modules\Tag\Models\Traits;

use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Modules\Tag\Models\Tag;
use Modules\Tag\Models\TagMorph;

trait HasTags {
    /**
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function tags() {
        return $this->tagsRelation;
    }

    /**
     * @param \Modules\Forum\Models\Tag[]|int[] $tags
     */
    public function syncTags(array $tags) {
        $this->save();
        $this->tagsRelation()->sync($tags);

        $this->unsetRelation('tagsRelation');
    }

    public function removeTags() {
        $this->tagsRelation()->detach();

        $this->unsetRelation('tagsRelation');
    }

    public function tagsRelation(): MorphToMany {
<<<<<<< HEAD
<<<<<<< HEAD
        // return $this->morphToMany(Tag::class, 'taggable')->withTimestamps();
=======
        //return $this->morphToMany(Tag::class, 'taggable')->withTimestamps();
>>>>>>> 160a6ab (first)
=======
        //return $this->morphToMany(Tag::class, 'taggable')->withTimestamps();
>>>>>>> fc24fbf (first)
        $pivot_class = TagMorph::class;
        $pivot = app($pivot_class);
        $pivot_fields = $pivot->getFillable();
        $pivot_table = $pivot->getTable();

        return $this->morphToMany(Tag::class, 'post', $pivot_table)
            ->using($pivot_class)
            ->withPivot($pivot_fields)
            ->withTimestamps()
<<<<<<< HEAD
<<<<<<< HEAD
            ->with(['post']) // Eager;
=======
            ->with(['post']) //Eager;
>>>>>>> 160a6ab (first)
=======
            ->with(['post']) //Eager;
>>>>>>> fc24fbf (first)
            ;
    }
}
