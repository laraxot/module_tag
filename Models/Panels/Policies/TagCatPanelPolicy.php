<?php
namespace Modules\Tag\Models\Panels\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use Modules\LU\Models\User as User;
use Modules\Tag\Models\Panels\Policies\TagCatPanelPolicy as Panel;

use Modules\Xot\Models\Panels\Policies\XotBasePanelPolicy;

class TagCatPanelPolicy extends XotBasePanelPolicy {
}
