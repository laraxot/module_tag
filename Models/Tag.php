<?php

declare(strict_types=1);

namespace Modules\Tag\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Modules\Blog\Models\Article;
use Modules\Blog\Models\Traits\HasSlug;
use Modules\Tenant\Services\TenantService;

/**
 * Undocumented class.
 */
class Tag extends BaseModelLang {
    use HasSlug;

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

    //questa funzione non dovrebbe essere qui, perchè non è generico
    public function products(): MorphToMany {
        $pivot = app(TagMorph::class);
        $pivot_fields = $pivot->getFillable();
        $pivot_table = $pivot->getTable();
        //---------------------------------------------------------------------------------------------------------------------------------------
        //Class Modules\Shop\Models\Product was not found while trying to analyse it - discovering symbols is probably not configured properly.
        // 💡 Learn more at https://phpstan.org/user-guide/discovering-symbols
        $product = TenantService::model('product');
        $product_class = get_class($product);

        return $this->morphedByMany($product_class, 'post', $pivot_table)
            ->using(get_class($pivot))
            ->withPivot($pivot_fields)
            ->withTimestamps()
            ->with(['post']) //Eager;
            ;
    }

    /**
     * Undocumented function.
     */
    public function articles(): MorphToMany {
        $pivot = app(TagMorph::class);
        $pivot_fields = $pivot->getFillable();
        $pivot_table = $pivot->getTable();

        return $this->morphedByMany(Article::class, 'post', $pivot_table)
            ->using(get_class($pivot))
            ->withPivot($pivot_fields)
            ->withTimestamps()
            ->with(['post']) //Eager;
            ;
    }
}
