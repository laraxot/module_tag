<?php

declare(strict_types=1);

namespace Modules\Tag\Models\Panels;

use Illuminate\Http\Request;
// --- Services --

use Modules\Cms\Models\Panels\XotBasePanel;

class CategoryPanel extends XotBasePanel {
    /**
     * The model the resource corresponds to.
     */
    public static string $model = 'Modules\Tag\Models\Category';

    /**
     * The single value that should be used to represent the resource when being displayed.
     */
    public static string $title = 'title';

    /**
     * The relationships that should be eager loaded on index queries.
     */
    public function with(): array {
        return ['post'];
    }

    /**
     * Get the fields displayed by the resource.
        'value'=>'..',
     */
    public function fields(): array {
        return [
            (object) [
                'type' => 'Id',
                'name' => 'id',
                'comment' => null,
            ],

            (object) [
                'type' => 'String',
                'name' => 'post.title',
                'rules' => 'required',
            ],

            (object) [
                'type' => 'String',
                'name' => 'post.subtitle',
                // 'rules' => 'required',
            ],
            (object) [
                'type' => 'SelectParent',
                'name' => 'parent_id',
                'rules' => 'required',
                'comment' => null,
            ],
            /*
            (object) [
                'type' => 'Select',
                'name' => 'parent_id',
                'rules' => 'required',
                'comment' => null,
                'options' => $this->setBuilder($this->row->with(['post']))->optionsTree(),
            ],
            */

            (object) [
                'type' => 'String',
                'name' => 'created_by',
                'comment' => null,
                'except' => ['store', 'edit'],
            ],

            (object) [
                'type' => 'String',
                'name' => 'updated_by',
                'comment' => null,
                'except' => ['store', 'edit'],
            ],
        ];
    }

    /**
     * Get the tabs available.
     */
    public function tabs(): array {
        $tabs_name = [];

        return $tabs_name;
    }

    /**
     * Get the cards available for the request.
     */
    public function cards(Request $request): array {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param \Illuminate\Http\Request $request
     */
    public function filters(Request $request = null): array {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     */
    public function lenses(Request $request): array {
        return [];
    }

    /**
     * Get the actions available for the resource.
     */
    public function actions(): array {
        return [];
    }
}
