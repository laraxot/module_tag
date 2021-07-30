<?php
namespace Modules\Tag\Models\Panels\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use Modules\LU\Models\User as User;
use Modules\Tag\Models\Panels\Policies\TagMorphPanelPolicy as Panel;

use Modules\Xot\Models\Panels\Policies\XotBasePanelPolicy;

class TagMorphPanelPolicy extends XotBasePanelPolicy {
}
