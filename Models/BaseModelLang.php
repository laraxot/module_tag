<?php

declare(strict_types=1);

namespace Modules\Tag\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Xot\Models\Traits\LinkedTrait;
use Modules\Xot\Traits\Updater;

/***
 * Class BaseModelLang.
 */
abstract class BaseModelLang extends Model {
    use Updater;
    use LinkedTrait;
    use HasFactory;
    protected $connection = 'tag'; // this will use the specified database connection

    /**
     * @var string[]
     */
    protected $fillable = ['id'];

    /**
     * @var array
     */
    protected $casts = [
        //'published_at' => 'datetime:Y-m-d', // da verificare
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
     * @var array
     */
    protected $hidden = [
        //'password'
    ];

    /**
     * @var bool
     */
    public $timestamps = true;

    //-----------
    /*
    protected $id;
    protected $post;
    protected $lang;
    */
}