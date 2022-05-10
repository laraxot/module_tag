<?php

declare(strict_types=1);

namespace Modules\Tag\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Lang\Models\Traits\LinkedTrait;
use Modules\Xot\Traits\Updater;

/***
 * Class BaseModelLang.
 */
abstract class BaseModelLang extends Model {
<<<<<<< HEAD
<<<<<<< HEAD
    use HasFactory;
    use LinkedTrait;
    use Updater;
=======
    use Updater;
    use LinkedTrait;
    use HasFactory;
>>>>>>> 160a6ab (first)
=======
    use Updater;
    use LinkedTrait;
    use HasFactory;
>>>>>>> fc24fbf (first)
    protected $connection = 'tag'; // this will use the specified database connection

    /**
     * @var string[]
     */
    protected $fillable = ['id'];

    /**
     * @var array
     */
    protected $casts = [
<<<<<<< HEAD
<<<<<<< HEAD
        // 'published_at' => 'datetime:Y-m-d', // da verificare
=======
        //'published_at' => 'datetime:Y-m-d', // da verificare
>>>>>>> 160a6ab (first)
=======
        //'published_at' => 'datetime:Y-m-d', // da verificare
>>>>>>> fc24fbf (first)
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
<<<<<<< HEAD
<<<<<<< HEAD
        // 'password'
=======
        //'password'
>>>>>>> 160a6ab (first)
=======
        //'password'
>>>>>>> fc24fbf (first)
    ];

    /**
     * @var bool
     */
    public $timestamps = true;

<<<<<<< HEAD
<<<<<<< HEAD
    // -----------
=======
    //-----------
>>>>>>> 160a6ab (first)
=======
    //-----------
>>>>>>> fc24fbf (first)
    /*
    protected $id;
    protected $post;
    protected $lang;
    */
}
