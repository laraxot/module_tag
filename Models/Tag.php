<?php

declare(strict_types=1);

namespace Modules\Tag\Models;

use Illuminate\Database\Eloquent\Relations\hasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Modules\Blog\Models\Post;
use Modules\Shop\Models\Product;

class Tag extends BaseModelLang
{
    protected $fillable = ['id', 'parent_id', 'tag_type', 'tag_cat_id', 'old_id', 'pos'];
    //il campo old_id l'abbiamo usato per la conversione dal vecchio db di base_ew

    //protected $guard = ['id'];

    public function treeLabel(): string
    {
        return (string) optional($this->post)->title;
    }

    public function tagCat(): BelongsTo
    {
        return $this->belongsTo(TagCat::class);
    }

    public function parent()
    {
        return $this->hasOne(Tag::class, 'parent_id', 'id');
    }

    public function productsInverse()
    {

        dddx($this->belongsToMany(Product::class, 'tag_morph', 'post_id', 'id')->with('post')->get());

        return $this->belongsToMany(Product::class, 'tag_morph', 'post_id', 'id');
    }

    public function products() {
        $pivot = app(TagMorph::class);
        $pivot_fields = $pivot->getFillable();
        $pivot_table = $pivot->getTable();

        dddx($this->morphToMany(Product::class, 'post', 'tag_morph','post_id','id')
        ->using($pivot)
        ->withPivot($pivot_fields)
        ->withTimestamps()
        ->with(['post'])->get());

        return $this->morphToMany(Product::class, 'post', 'tag_morph','post_id','id')
            ->using($pivot)
            ->withPivot($pivot_fields)
            ->withTimestamps()
            ->with(['post']) //Eager;
            ;
    }
}
