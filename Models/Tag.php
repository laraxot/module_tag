<?php

declare(strict_types=1);

namespace Modules\Tag\Models;

class Tag extends BaseModelLang {
    protected $fillable = ['id', 'parent_id','tag_type', 'tag_cat_id', 'old_id', 'pos'];
    //protected $guard = ['id'];

    public function treeLabel(): string {
        return (string) optional($this->post)->title;
    }

    public function tagCat() {
        return $this->belongsTo(TagCat::class);
    }

    public function parent(){
        return $this->hasOne(Tag::class, 'parent_id','id');
    }

}