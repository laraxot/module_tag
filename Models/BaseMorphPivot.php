<?php

declare(strict_types=1);

namespace Modules\Tag\Models;

use Illuminate\Database\Eloquent\Relations\MorphPivot;
use Modules\Xot\Traits\Updater;

/**
 * Class BaseMorphPivot.
 */
abstract class BaseMorphPivot extends MorphPivot {
    use Updater;

    protected $connection = 'tag'; // this will use the specified database connection

    /**
     * @var array
     */
    protected $appends = [];
    /**
     * @var string
     */
    protected $primaryKey = 'id';
    /**
     * @var bool
     */
    public $incrementing = true;
    /**
     * @var bool
     */
    public $timestamps = true;
<<<<<<< HEAD
<<<<<<< HEAD
    // protected $attributes = ['related_type' => 'cuisine_cat'];
=======
    //protected $attributes = ['related_type' => 'cuisine_cat'];
>>>>>>> 160a6ab (first)
=======
    //protected $attributes = ['related_type' => 'cuisine_cat'];
>>>>>>> fc24fbf (first)
    /**
     * @var string[]
     */
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
        // 'published_at',
    ];
    /**
     * @var string[]
     */
    protected $fillable = [
        'id',
        'post_id', 'post_type',
        'related_type',
        'user_id',
        'note',
    ];
<<<<<<< HEAD
<<<<<<< HEAD
}
=======
}
>>>>>>> 160a6ab (first)
=======
}
>>>>>>> fc24fbf (first)
