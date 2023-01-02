<?php

declare(strict_types=1);

namespace Modules\Xot\Contracts;

use ArrayAccess;
use Illuminate\Support\Arr;
use Modules\Tag\Models\Tag;
use Illuminate\Support\Collection;
use Modules\Mediamonitor\Models\Clip;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Collection as EloquentCollection;

/**
 * Modules\Xot\Contracts\ModelProfileContract.
 *
 * @property int                             $id
 * @property int|null                        $user_id
 * @property string|null                     $post_type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null                     $created_by
 * @property string|null                     $updated_by
 * @property string|null                     $title
 * @property string|null                     $full_name
 * @property string|null                     $org_info
 * @property array|null                      $children
 * @property string|null                     $title
 * @property PivotContract|null              $pivot
 * @property string                          $tennant_name
 * @property \Modules\LU\Models\User|null    $user
 * @property string                          $activity_report_interval
 * @property Collection<Clip>                $clips
 *
 * @method MorphToMany   notifyThemes()
 * @method mixed         getKey()
 * @method string        getRouteKey()
 * @method string        getRouteKeyName()
 * @method string        getTable()
 * @method mixed         with($array)
 * @method array         getFillable()
 * @method mixed         fill($array)
 * @method mixed         getConnection()
 * @method mixed         update($params)
 * @method mixed         delete()
 * @method mixed         detach($params)
 * @method mixed         attach($params)
 * @method mixed         save($params)
 * @method array         treeLabel()
 * @method array         treeSons()
 * @method int           treeSonsCount()
 * @method mixed         bellBoys()
 * @method array         toArray()
 * @method BelongsTo     user()
 * @method HasMany       alerts()
 * @method HasMany       presses()
 * @method BelongsToMany channels()
 * @method mixed         getAttributeValue(string $key)
  * @property \Illuminate\Database\Eloquent\Collection|\Modules\Tag\Models\Tag[]       $tags
 *
 * @mixin  \Eloquent
 */
interface HasTagsContract {

    public static function getTagClassName(): string;
    public static function bootHasTags();
    public function tags(): MorphToMany;

    public function tagsTranslated(string|null $locale = null): MorphToMany;

    public function setTagsAttribute(string | array | ArrayAccess | Tag $tags);

    public function scopeWithAllTags(
        Builder $query,
        string | array | ArrayAccess | Tag $tags,
        string $type = null,
    ): Builder;


    public function scopeWithAnyTags(
        Builder $query,
        string | array | ArrayAccess | Tag $tags,
        string $type = null,
    ): Builder ;

    public function scopeWithoutTags(
        Builder $query,
        string | array | ArrayAccess | Tag $tags,
        string $type = null
    ): Builder;


    public function scopeWithAllTagsOfAnyType(Builder $query, $tags): Builder;

    public function scopeWithAnyTagsOfAnyType(Builder $query, $tags): Builder;
}
