<?php

declare(strict_types=1);

namespace Modules\Tag\Models;

/**
 * Modules\Tag\Models\TagCat.
 *
 * @property int                                                                  $id
 * @property string                                                               $tag_cat_type
 * @property int                                                                  $type_input
 * @property \Illuminate\Support\Carbon|null                                      $created_at
 * @property \Illuminate\Support\Carbon|null                                      $updated_at
 * @property string|null                                                          $created_by
 * @property string|null                                                          $updated_by
 * @property int                                                                  $old_id
 * @property int                                                                  $pos
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
 * @method static \Illuminate\Database\Eloquent\Builder|TagCat        newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TagCat        newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModelLang ofItem(string $guid)
 * @method static \Illuminate\Database\Eloquent\Builder|TagCat        query()
 * @method static \Illuminate\Database\Eloquent\Builder|TagCat        whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TagCat        whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TagCat        whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TagCat        whereOldId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TagCat        wherePos($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TagCat        whereTagCatType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TagCat        whereTypeInput($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TagCat        whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TagCat        whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModelLang withPost(string $guid)
 *
 * @mixin \Eloquent
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
