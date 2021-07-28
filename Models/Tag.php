<?php

declare(strict_types=1);

namespace Modules\Tag\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Undocumented class.
 */
class Tag extends BaseModelLang {
    protected $fillable = ['id', 'tag_type', 'tag_cat_id', 'old_id', 'pos'];

    //il campo old_id l'abbiamo usato per la conversione dal vecchio db di base_ew
    //protected $guard = ['id'];

    public function tagCat(): BelongsTo {
        return $this->belongsTo(TagCat::class);
    }
}
