<?php

declare(strict_types=1);

namespace Modules\Tag\Models\Panels\Actions;

// -------- services --------
use Modules\Xot\Models\Panels\Actions\XotBasePanelAction;

// -------- bases -----------

/**
 * Class SyncProfileAction.
 */
class AddTagPropertyAction extends XotBasePanelAction {
    public bool $onContainer = true;

    public string $icon = '<i class="fas fa-plus"></i>New Tag Property';

    /**
     * @return mixed
     */
    public function handle() {
        return $this->panel->view();
        // echo 'QUI';
    }
}