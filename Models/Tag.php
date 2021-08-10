<?php

declare(strict_types=1);

namespace Modules\Tag\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Modules\Shop\Models\Product;

class Tag extends BaseModelLang {
    protected $fillable = ['id', 'parent_id', 'tag_type', 'tag_cat_id', 'old_id', 'pos'];
    //il campo old_id l'abbiamo usato per la conversione dal vecchio db di base_ew

    //protected $guard = ['id'];

    public function treeLabel(): string {
        return (string) optional($this->post)->title;
    }

    public function tagCat(): BelongsTo {
        return $this->belongsTo(TagCat::class);
    }

    public function parent() {
        return $this->hasOne(Tag::class, 'parent_id', 'id');
    }

    //perchè chiamarla linkable???
    public function products() {
        return $this->morphedByMany(Product::class, 'post', 'tag_morph');
    }
}
