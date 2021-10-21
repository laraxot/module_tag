<?php

declare(strict_types=1);

namespace Modules\Tag\Models;

/**
 * Modules\Tag\Models\Category.
 */
class Category extends BaseModelLang {
    protected $fillable = ['id', 'parent_id', 'created_by', 'updated_by'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphToMany
     *                                                             relazione da rendere generica...
     */
    public function shops() {
        return $this->morphRelated(Shop::class, true);
    }
}
