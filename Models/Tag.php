<?php

declare(strict_types=1);

namespace Modules\Tag\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Tag extends BaseModelLang {
    protected $fillable = ['id', 'parent_id', 'tag_type', 'tag_cat_id', 'old_id', 'pos'];

    //protected $guard = ['id'];

    public function treeLabel(): string {
        return (string) optional($this->post)->title;
    }

    public function tagCat(): BelongsTo {
        return $this->belongsTo(TagCat::class);
    }

    public function parent(): HasOne {
        return $this->hasOne(Tag::class, 'parent_id', 'id');
    }

    //questa funzione non dovrebbe essere qui
    public function products() {
        $pivot = app(TagMorph::class);
        $pivot_fields = $pivot->getFillable();
        $pivot_table = $pivot->getTable();

        return $this->morphedByMany(\Modules\Shop\Models\Product::class, 'post', $pivot_table)
            ->using(get_class($pivot))
            ->withPivot($pivot_fields)
            ->withTimestamps()
            ->with(['post']) //Eager;
            ;
    }
}
