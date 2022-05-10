<?php

declare(strict_types=1);

namespace Modules\Tag\Models;


/**
 * @mixin IdeHelperTaggable
 */
class Taggable extends BaseMorphPivot {

    protected $table='taggables';  //spatie vuol cosi'
}
