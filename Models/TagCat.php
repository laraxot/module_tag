<?php

declare(strict_types=1);

namespace Modules\Tag\Models;

/**
 * Undocumented class.
 */
class TagCat extends BaseModelLang {
    protected $fillable = ['id', 'tag_cat_type', 'type_input', 'pos', 'old_id'];

    public function treeLabel(): string {
        return (string) optional($this->post)->title;
    }
}