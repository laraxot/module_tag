<?php
/**
 * -- spatie
 */

declare(strict_types=1);

namespace Modules\Tag\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Modules\Blog\Models\Article;
use Modules\Tenant\Services\TenantService;
use Modules\Xot\Models\Traits\HasSlug;

/**
 * Tag class.
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|Article[] $articles
 * @property-read int|null $articles_count
 * @property string|null $guid
 * @property string|null $image_src
 * @property-read string|null $lang
 * @property-read string|null $post_type
 * @property-read string|null $subtitle
 * @property-read string|null $title
 * @property string|null $txt
 * @property-read string|null $user_handle
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Xot\Models\Image[] $images
 * @property-read int|null $images_count
 * @property-read Tag|null $parent
 * @property-read \Modules\Lang\Models\Post|null $post
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Lang\Models\Post[] $posts
 * @property-read int|null $posts_count
 * @property-write mixed $slug
 * @property-write mixed $url
 * @property-read \Modules\Tag\Models\TagCat $tagCat
 * @method static \Illuminate\Database\Eloquent\Builder|Tag newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tag newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModelLang ofItem(string $guid)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag query()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModelLang withPost(string $guid)
 * @mixin \Eloquent
 * @mixin IdeHelperTag
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
