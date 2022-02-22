<?php

declare(strict_types=1);

namespace Modules\Tag\Models\Panels;

use Illuminate\Http\Request;
//--- Services --

use Modules\Xot\Models\Panels\XotBasePanel;

class TagCatPanel extends XotBasePanel {
    /**
     * The model the resource corresponds to.
     */
    public static string $model = 'Modules\Tag\Models\TagCat';

    /**
     * The single value that should be used to represent the resource when being displayed.
     */
    public static string $title = 'title';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
    ];

    /**
     * The relationships that should be eager loaded on index queries.
     */
    public function with(): array {
        return [];
    }

    public function search(): array {
        return [];
    }

    /**
     * on select the option id.
     */
    public function optionId(object $row) {
        return $row->id;
    }

    /**
     * on select the option label.
     */
    public function optionLabel(object $row): string {
        return $row->title;
    }

    /**
     * index navigation.
     */
    public function indexNav(): ?\Illuminate\Contracts\Support\Renderable {
        return null;
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
                'type' => 'Text',
                'name' => 'tag_cat_type',
                'rules' => 'required',
                'comment' => null,
            ],
            (object) [
                'type' => 'Integer',
                'name' => 'type_input',
                'rules' => 'required',
                'comment' => null,
            ],
            (object) [
                'type' => 'Integer',
                'name' => 'pos',
                'rules' => 'required',
                'comment' => null,
            ],
            (object) [
                'type' => 'Integer',
                'name' => 'old_id',
                'rules' => 'required',
                'comment' => null,
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
