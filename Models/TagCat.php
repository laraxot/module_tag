<?php

declare(strict_types=1);

namespace Modules\Tag\Models;

/**
 * Modules\Tag\Models\TagCat
 *
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
 * @property-read \Modules\Blog\Models\Post|null $post
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Blog\Models\Post[] $posts
 * @property-read int|null $posts_count
 * @property-write mixed $url
 * @method static \Illuminate\Database\Eloquent\Builder|TagCat newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TagCat newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModelLang ofItem(string $guid)
 * @method static \Illuminate\Database\Eloquent\Builder|TagCat query()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModelLang withPost(string $guid)
 * @mixin \Eloquent
 * @mixin IdeHelperTagCat
 */
class TagCat extends BaseModelLang {
    protected $fillable = ['id', 'tag_cat_type', 'type_input', 'pos', 'old_id'];

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    public function treeLabel(): string {
        return (string) optional($this->post)->title;
    }
}
