<?php

declare(strict_types=1);

namespace Modules\Tag\Models;

/**
 * Modules\Tag\Models\Category.
 *
 * @property string|null                                                          $guid
 * @property string|null                                                          $image_src
 * @property string|null                                                          $lang
 * @property string|null                                                          $post_type
 * @property string|null                                                          $subtitle
 * @property string|null                                                          $title
 * @property string|null                                                          $txt
 * @property string|null                                                          $user_handle
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Xot\Models\Image[] $images
 * @property int|null                                                             $images_count
 * @property \Modules\Lang\Models\Post|null                                       $post
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Lang\Models\Post[] $posts
 * @property int|null                                                             $posts_count
 * @property mixed                                                                $url
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Category newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModelLang ofItem(string $guid)
 * @method static \Illuminate\Database\Eloquent\Builder|Category query()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModelLang withPost(string $guid)
 * @mixin \Eloquent
 * @mixin IdeHelperCategory
 */
class Category extends BaseModelLang {
    protected $fillable = ['id', 'parent_id', 'created_by', 'updated_by'];

    /*
     * relazione da rendere generica...
     * @return \Illuminate\Database\Eloquent\Relations\MorphToMany
     *
     */
    // public function shops() {
        // Class Modules\Tag\Models\Shop not found.
    //    return $this->morphRelated(Shop::class, true);
    // }
}
