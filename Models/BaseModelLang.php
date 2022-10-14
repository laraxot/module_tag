<?php

declare(strict_types=1);

namespace Modules\Tag\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Lang\Models\Traits\LinkedTrait;
use Modules\Xot\Traits\Updater;

<<<<<<< HEAD
/**
 * Class BaseModelLang.
 *
 * @property string|null $post_type
 */
abstract class BaseModelLang extends Model {
    use HasFactory;
    use LinkedTrait;
    use Updater;
    /**
     * Indicates whether attributes are snake cased on arrays.
     *
     * @see  https://laravel-news.com/6-eloquent-secrets
     *
     * @var bool
     */
    public static $snakeAttributes = true;

    protected $perPage = 30;

=======
/***
 * Class BaseModelLang.
 */
abstract class BaseModelLang extends Model {
    use Updater;
    use LinkedTrait;
    use HasFactory;
>>>>>>> 4fabb56 (first)
    protected $connection = 'tag'; // this will use the specified database connection

    /**
     * @var string[]
     */
    protected $fillable = ['id'];

    /**
<<<<<<< HEAD
     * @var array<string, string>
     */
    protected $casts = [
        // 'published_at' => 'datetime:Y-m-d', // da verificare
=======
     * @var array
     */
    protected $casts = [
        //'published_at' => 'datetime:Y-m-d', // da verificare
>>>>>>> 4fabb56 (first)
    ];

    /**
     * @var string[]
     */
    protected $dates = ['published_at', 'created_at', 'updated_at'];

    /**
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * @var bool
     */
    public $incrementing = true;

    /**
<<<<<<< HEAD
     * @var array<int, string>
     */
    protected $hidden = [
        // 'password'
=======
     * @var array
     */
    protected $hidden = [
        //'password'
>>>>>>> 4fabb56 (first)
    ];

    /**
     * @var bool
     */
    public $timestamps = true;

<<<<<<< HEAD
    // -----------
=======
    //-----------
>>>>>>> 4fabb56 (first)
    /*
    protected $id;
    protected $post;
    protected $lang;
    */
}
