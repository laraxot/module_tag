<?php

namespace Modules\Tag\Models;

class TagMorph extends BaseMorphPivot {
    /**
     * The database table used by the model.
     *
     * @var string
     */

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id', 'tag_id', 'post_type', 'post_id', 'created_at', 'updated_at', 'created_by', 'updated_by', 'auth_user_id', 'note'];
}
