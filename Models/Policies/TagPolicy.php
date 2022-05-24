<?php
namespace Modules\Tag\Models\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use Modules\LU\Models\User as User;
use Modules\Tag\Models\Tag as Post; 

use Modules\Xot\Models\Policies\XotBasePolicy;

class TagPolicy extends XotBasePolicy {
}
