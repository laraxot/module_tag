<?php

declare(strict_types=1);

namespace Modules\Tag\Models\Panels;

use Illuminate\Http\Request;
<<<<<<< HEAD
// --- Services --

use Modules\Tag\Models\Category;
=======
//--- Services --

>>>>>>> 4fabb56 (first)
use Modules\Xot\Models\Panels\XotBasePanel;

class CategoryPanel extends XotBasePanel {
    /**
     * The model the resource corresponds to.
<<<<<<< HEAD
=======
     *
     * @var string
>>>>>>> 4fabb56 (first)
     */
    public static string $model = 'Modules\Tag\Models\Category';

    /**
     * The single value that should be used to represent the resource when being displayed.
<<<<<<< HEAD
=======
     *
     * @var string
>>>>>>> 4fabb56 (first)
     */
    public static string $title = 'title';

    /**
<<<<<<< HEAD
=======
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
    ];

    /**
>>>>>>> 4fabb56 (first)
     * The relationships that should be eager loaded on index queries.
     */
    public function with(): array {
        return ['post'];
    }

<<<<<<< HEAD
    /**
     * Get the fields displayed by the resource.
=======
    public function search(): array {
        return [];
    }

    /**
     * on select the option id.
     *
     * quando aggiungi un campo select, è il numero della chiave
     * che viene messo come valore su value="id"
     */
    public function optionId(object $row) {
        return $row->getKey();
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
     * Build an "index" query for the given resource.
     *
     * @param RowsContract $query
     *
     * @return RowsContract
     */
    public static function indexQuery(array $data, $query) {
        //return $query->where('user_id', $request->user()->id);
        return $query;
    }

    /**
     * Get the fields displayed by the resource.
     *
     * @return array
        'col_size' => 6,
        'sortable' => 1,
        'rules' => 'required',
        'rules_messages' => ['it'=>['required'=>'Nome Obbligatorio']],
>>>>>>> 4fabb56 (first)
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
<<<<<<< HEAD
                // 'rules' => 'required',
=======
                //'rules' => 'required',
>>>>>>> 4fabb56 (first)
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
<<<<<<< HEAD
=======
     *
     * @return array
>>>>>>> 4fabb56 (first)
     */
    public function tabs(): array {
        $tabs_name = [];

        return $tabs_name;
    }

    /**
     * Get the cards available for the request.
<<<<<<< HEAD
=======
     *
     * @return array
>>>>>>> 4fabb56 (first)
     */
    public function cards(Request $request): array {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param \Illuminate\Http\Request $request
<<<<<<< HEAD
=======
     *
     * @return array
>>>>>>> 4fabb56 (first)
     */
    public function filters(Request $request = null): array {
        return [];
    }

    /**
     * Get the lenses available for the resource.
<<<<<<< HEAD
=======
     *
     * @return array
>>>>>>> 4fabb56 (first)
     */
    public function lenses(Request $request): array {
        return [];
    }

    /**
     * Get the actions available for the resource.
<<<<<<< HEAD
=======
     *
     * @return array
>>>>>>> 4fabb56 (first)
     */
    public function actions(): array {
        return [];
    }
<<<<<<< HEAD
}
=======
}
>>>>>>> 4fabb56 (first)
