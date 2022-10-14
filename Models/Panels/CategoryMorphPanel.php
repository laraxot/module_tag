<?php

<<<<<<< HEAD
declare(strict_types=1);

namespace Modules\Tag\Models\Panels;

use Illuminate\Http\Request;
// --- Services --
=======
namespace Modules\Tag\Models\Panels;

use Illuminate\Http\Request;
//--- Services --
>>>>>>> 4fabb56 (first)

use Modules\Xot\Models\Panels\XotBasePanel;

class CategoryMorphPanel extends XotBasePanel {
    /**
     * The model the resource corresponds to.
<<<<<<< HEAD
=======
     *
     * @var string
>>>>>>> 4fabb56 (first)
     */
    public static string $model = 'Modules\Tag\Models\Panels\CategoryMorphPanel';

    /**
     * The single value that should be used to represent the resource when being displayed.
<<<<<<< HEAD
     */
    public static string $title = 'title';


    /**
     * Get the fields displayed by the resource.
        'value'=>'..',
     */
    public function fields(): array {
        return [
            0 => (object) [
                'type' => 'Id',
                'name' => 'id',
                'comment' => null,
            ],
            1 => (object) [
                'type' => 'Integer',
                'name' => 'category_id',
                'rules' => 'required',
                'comment' => null,
            ],
            2 => (object) [
                'type' => 'String',
                'name' => 'post_type',
                'comment' => null,
            ],
            3 => (object) [
                'type' => 'Bigint',
                'name' => 'post_id',
                'comment' => null,
            ],
            4 => (object) [
                'type' => 'String',
                'name' => 'created_by',
                'comment' => null,
            ],
            5 => (object) [
                'type' => 'String',
                'name' => 'updated_by',
                'comment' => null,
            ],
            6 => (object) [
                'type' => 'Integer',
                'name' => 'user_id',
                'comment' => null,
            ],
            7 => (object) [
                'type' => 'Text',
                'name' => 'note',
                'comment' => null,
            ],
        ];
=======
     *
     * @var string
     */
    public static string $title = 'title';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = array (
);

    /**
     * The relationships that should be eager loaded on index queries.
     *
     * @var array
     */
    public function with():array {
        return [];
    }

    public function search() :array {

        return [];
    }

    /**
     * on select the option id
     *
     * quando aggiungi un campo select, è il numero della chiave 
     * che viene messo come valore su value="id"
     *
     */
    public function optionId(object $row) {
        return $row->getKey();
    }

    /**
     * on select the option label.
     */
    public function optionLabel(object $row):string {
        return $row->area_define_name;
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
    public static function indexQuery(array $data, $query)
    {
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
        'value'=>'..',
     */
    public function fields(): array {
        return array (
  0 => 
  (object) array(
     'type' => 'Id',
     'name' => 'id',
     'comment' => NULL,
  ),
  1 => 
  (object) array(
     'type' => 'Integer',
     'name' => 'category_id',
     'rules' => 'required',
     'comment' => NULL,
  ),
  2 => 
  (object) array(
     'type' => 'String',
     'name' => 'post_type',
     'comment' => NULL,
  ),
  3 => 
  (object) array(
     'type' => 'Bigint',
     'name' => 'post_id',
     'comment' => NULL,
  ),
  4 => 
  (object) array(
     'type' => 'String',
     'name' => 'created_by',
     'comment' => NULL,
  ),
  5 => 
  (object) array(
     'type' => 'String',
     'name' => 'updated_by',
     'comment' => NULL,
  ),
  6 => 
  (object) array(
     'type' => 'Integer',
     'name' => 'user_id',
     'comment' => NULL,
  ),
  7 => 
  (object) array(
     'type' => 'Text',
     'name' => 'note',
     'comment' => NULL,
  ),
);
>>>>>>> 4fabb56 (first)
    }

    /**
     * Get the tabs available.
<<<<<<< HEAD
     */
    public function tabs(): array {
=======
     *
     * @return array
     */
    public function tabs():array {
>>>>>>> 4fabb56 (first)
        $tabs_name = [];

        return $tabs_name;
    }

    /**
     * Get the cards available for the request.
<<<<<<< HEAD
     */
    public function cards(Request $request): array {
=======
     *
     * @return array
     */
    public function cards(Request $request):array {
>>>>>>> 4fabb56 (first)
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param \Illuminate\Http\Request $request
<<<<<<< HEAD
     */
    public function filters(Request $request = null): array {
=======
     *
     * @return array
     */
    public function filters(Request $request = null):array {
>>>>>>> 4fabb56 (first)
        return [];
    }

    /**
     * Get the lenses available for the resource.
<<<<<<< HEAD
     */
    public function lenses(Request $request): array {
=======
     *
     * @return array
     */
    public function lenses(Request $request):array {
>>>>>>> 4fabb56 (first)
        return [];
    }

    /**
     * Get the actions available for the resource.
<<<<<<< HEAD
     */
    public function actions(): array {
=======
     *
     * @return array
     */
    public function actions():array {
>>>>>>> 4fabb56 (first)
        return [];
    }
}
