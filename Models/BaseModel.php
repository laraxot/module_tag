<?php

declare(strict_types=1);

namespace Modules\Tag\Models;

use GeneaLabs\LaravelModelCaching\Traits\Cachable;
<<<<<<< HEAD
<<<<<<< HEAD
// ---------- traits
use Illuminate\Database\Eloquent\Model;
// use Laravel\Scout\Searchable;
=======
//---------- traits
use Illuminate\Database\Eloquent\Model;
//use Laravel\Scout\Searchable;
>>>>>>> 160a6ab (first)
=======
//---------- traits
use Illuminate\Database\Eloquent\Model;
//use Laravel\Scout\Searchable;
>>>>>>> fc24fbf (first)
use Modules\Xot\Traits\Updater;

/**
 * Class BaseModel.
 */
abstract class BaseModel extends Model {
    use Updater;
<<<<<<< HEAD
<<<<<<< HEAD
    // use Searchable;
    // use Cachable;
=======
    //use Searchable;
    //use Cachable;
>>>>>>> 160a6ab (first)
=======
    //use Searchable;
    //use Cachable;
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
}
=======
}
>>>>>>> 160a6ab (first)
=======
}
>>>>>>> fc24fbf (first)
