<?php

declare(strict_types=1);

namespace Modules\Tag\Models\Panels;

use Illuminate\Http\Request;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
// --- Services --
=======
//--- Services --
>>>>>>> 160a6ab (first)
=======
//--- Services --
>>>>>>> fc24fbf (first)
=======
//--- Services --
>>>>>>> 4fabb56 (first)

use Modules\Xot\Models\Panels\XotBasePanel;

class CategoryPanel extends XotBasePanel {
    /**
     * The model the resource corresponds to.
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
     *
     * @var string
>>>>>>> 160a6ab (first)
=======
     *
     * @var string
>>>>>>> fc24fbf (first)
=======
     *
     * @var string
>>>>>>> 4fabb56 (first)
     */
    public static string $model = 'Modules\Tag\Models\Category';

    /**
     * The single value that should be used to represent the resource when being displayed.
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
     *
     * @var string
>>>>>>> 160a6ab (first)
=======
     *
     * @var string
>>>>>>> fc24fbf (first)
=======
     *
     * @var string
>>>>>>> 4fabb56 (first)
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
        return ['post'];
    }

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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        // return $query->where('user_id', $request->user()->id);
=======
        //return $query->where('user_id', $request->user()->id);
>>>>>>> 160a6ab (first)
=======
        //return $query->where('user_id', $request->user()->id);
>>>>>>> fc24fbf (first)
=======
        //return $query->where('user_id', $request->user()->id);
>>>>>>> 4fabb56 (first)
        return $query;
    }

    /**
     * Get the fields displayed by the resource.
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> fc24fbf (first)
=======
>>>>>>> 4fabb56 (first)
     *
     * @return array
        'col_size' => 6,
        'sortable' => 1,
        'rules' => 'required',
        'rules_messages' => ['it'=>['required'=>'Nome Obbligatorio']],
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 160a6ab (first)
=======
>>>>>>> fc24fbf (first)
=======
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
<<<<<<< HEAD
<<<<<<< HEAD
                // 'rules' => 'required',
=======
                //'rules' => 'required',
>>>>>>> 160a6ab (first)
=======
                //'rules' => 'required',
>>>>>>> fc24fbf (first)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
     *
     * @return array
>>>>>>> 160a6ab (first)
=======
     *
     * @return array
>>>>>>> fc24fbf (first)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
     *
     * @return array
>>>>>>> 160a6ab (first)
=======
     *
     * @return array
>>>>>>> fc24fbf (first)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
     *
     * @return array
>>>>>>> 160a6ab (first)
=======
     *
     * @return array
>>>>>>> fc24fbf (first)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
     *
     * @return array
>>>>>>> 160a6ab (first)
=======
     *
     * @return array
>>>>>>> fc24fbf (first)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
     *
     * @return array
>>>>>>> 160a6ab (first)
=======
     *
     * @return array
>>>>>>> fc24fbf (first)
=======
     *
     * @return array
>>>>>>> 4fabb56 (first)
     */
    public function actions(): array {
        return [];
    }
}
