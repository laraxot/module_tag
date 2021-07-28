<?php

declare(strict_types=1);

namespace Modules\Tag\Models\Panels;

use Illuminate\Http\Request;
//--- Services --

use Modules\Xot\Models\Panels\XotBasePanel;

class TagPanel extends XotBasePanel {
    /**
     * The model the resource corresponds to.
     */
    public static string $model = 'Modules\Tag\Models\Tag';

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
     *
     * @var array
     */
    public function with(): array {
        return [];
    }

    public function search(): array {
        return [];
    }

    /*
      * @param array|null $data
      *
      * @return mixed
      */

    public function options($data = null) {
        if (null == $data) {
            $data = request()->all();
        }

        return $this->rows($data)->where('tag_type', optional($this->getParent())->postType())->get();
    }

    /**
     * on select the option label.
     */
    public function optionLabel(object $row): string {
        return (string) $row->title;
    }

    /**
     * index navigation.
     */
    public function indexNav(): ?array {
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
        'value'=>'..',
     */
    public function fields(): array {
        return [
            (object) [
                'type' => 'Id',
                'name' => 'id',
                'comment' => null,
                'col_bs_size' => 2,
            ],
            (object) [
                'type' => 'Text',
                'name' => 'tag_type',
                'rules' => 'required',
                'comment' => null,
                'col_bs_size' => 5,
            ],
            (object) [
                'type' => 'SelectRelationshipOne',
                'name' => 'tagCat',
                //'rules' => 'required',
                'comment' => null,
                'col_bs_size' => 5,
            ],
            (object) [
                'type' => 'String',
                'name' => 'post.title',
                'rules' => 'required',
                'comment' => null,
                'col_bs_size' => 12,
            ],
        ];
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

    public function treeLabel(): string {
        return (string) optional($this->row->post)->title;
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
