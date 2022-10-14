<<<<<<< HEAD
<?php
<<<<<<< HEAD

declare(strict_types=1);

namespace Modules\Tag\Models\Panels\Policies;

=======
namespace Modules\Tag\Models\Panels\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use Modules\LU\Models\User as User;
use Modules\Tag\Models\Panels\Policies\CategoryPanelPolicy as Panel;

>>>>>>> 4fabb56 (first)
use Modules\Xot\Models\Panels\Policies\XotBasePanelPolicy;

class CategoryPanelPolicy extends XotBasePanelPolicy {
}
=======
<?php

declare(strict_types=1);

namespace Modules\Tag\Models\Panels\Policies;

use Modules\Xot\Models\Panels\Policies\XotBasePanelPolicy;

class CategoryPanelPolicy extends XotBasePanelPolicy {
}
>>>>>>> 9bd68a9 (.)
