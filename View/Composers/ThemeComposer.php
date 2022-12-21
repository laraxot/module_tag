<?php

declare(strict_types=1);

namespace Modules\Tag\View\Composers;

use Illuminate\Support\Collection;
use Modules\Tag\Models\Tag;

class ThemeComposer {
    /**
     * ----.
     *  $footerTags = Tag::take(15)->get();.
     */
    public function getFooterTags(): Collection {
        // return collect([]);
        return Tag::take(15)->get();
    }

    /**
     * Undocumented function.
     */
    public function getArticleTags(): Collection {
        return Tag::take(15)->get();
    }
}
