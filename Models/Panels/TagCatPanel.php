<?php

namespace Modules\Tag\Models\Panels;

use Illuminate\Http\Request;
//--- Services --

use Modules\Xot\Models\Panels\XotBasePanel;

class TagCatPanel extends XotBasePanel {
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static string $model = 'Modules\Tag\Models\TagCat';

    /**
     * The single value that should be used to represent the resource when being displayed.
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
     * on select the option id.
     */
    public function optionId(object $row) {
        return $row->area_id;
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
    public function indexNav(): \Illuminate\Contracts\Support\Renderable {
        return [];
    }

    /**
     * Build an "index" query for the given resource.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public static function indexQuery(array $data, $query) {
        //return $query->where('auth_user_id', $request->user()->auth_user_id);
        return $query;
    }



    /**
     * Get the fields displayed by the resource.
     *
     * @return array
        'col_bs_size' => 6,
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
     'type' => 'Text',
     'name' => 'tag_cat_type',
     'rules' => 'required',
     'comment' => NULL,
  ),
  2 => 
  (object) array(
     'type' => 'Integer',
     'name' => 'type_input',
     'rules' => 'required',
     'comment' => NULL,
  ),
  3 => 
  (object) array(
     'type' => 'Integer',
     'name' => 'pos',
     'rules' => 'required',
     'comment' => NULL,
  ),
  4 => 
  (object) array(
     'type' => 'Integer',
     'name' => 'old_id',
     'rules' => 'required',
     'comment' => NULL,
  ),
);
    }

    /**
     * Get the tabs available.
     *
     * @return array
     */
    public function tabs() {
        $tabs_name = [];

        return $tabs_name;
    }

    /**
     * Get the cards available for the request.
     *
     * @return array
     */
    public function cards(Request $request) {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return array
     */
    public function filters(Request $request = null) {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @return array
     */
    public function lenses(Request $request) {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @return array
     */
    public function actions() {
        return [];
    }
}
