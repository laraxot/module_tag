<<<<<<< HEAD
<?php

declare(strict_types=1);

namespace Modules\Tag\Models\Panels;

<<<<<<< HEAD
use Modules\Tag\Models\Tag;
use Illuminate\Http\Request;
// --- Services --

use Modules\Xot\Contracts\RowsContract;
use Modules\Xot\Models\Panels\XotBasePanel;

class TagPanel extends XotBasePanel
{
    /**
     * The model the resource corresponds to.
     */
    public static string $model = Tag::class;
    public Tag $row;
=======
use Illuminate\Http\Request;
//--- Services --

use Modules\Xot\Models\Panels\XotBasePanel;

class TagPanel extends XotBasePanel {
    /**
     * The model the resource corresponds to.
     */
    public static string $model = 'Modules\Tag\Models\Tag';
>>>>>>> 4fabb56 (first)

    /**
     * The single value that should be used to represent the resource when being displayed.
     */
    public static string $title = 'title';

<<<<<<< HEAD

    /**
     * on select the option label.
     * @param Tag $row
     */
    public function optionLabel($row): string
    {
        //return (string) implode('-', $row->name); //spatie
        return (string) $row->name;
=======
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
        return ['post.title'];
    }

    public function options($data = []) {
        if (null === $data) {
            $data = request()->all();
        }

        return $this->rows($data)->where('tag_type', optional($this->getParent())->postType())->get();
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
        return (string) $row->title;
>>>>>>> 4fabb56 (first)
    }

    /**
     * index navigation.
     */
<<<<<<< HEAD
    public function indexNav(): ?\Illuminate\Contracts\Support\Renderable
    {
=======
    public function indexNav(): ?\Illuminate\Contracts\Support\Renderable {
>>>>>>> 4fabb56 (first)
        return null;
    }

    /**
<<<<<<< HEAD
     * Build an "index" query for the given resource.
     *
     * @param RowsContract $query
     *
     * @return RowsContract
     */
    public static function indexQuery(array $data, $query)
    {
        // return $query->where('user_id', $request->user()->id);
        return $query;
    }

    /**
     * Get the fields displayed by the resource.
        'value'=>'..',
     */
    public function fields(): array
    {
=======
     * Get the fields displayed by the resource.
        'value'=>'..',
     */
    public function fields(): array {
>>>>>>> 4fabb56 (first)
        return [
            (object) [
                'type' => 'Id',
                'name' => 'id',
                'comment' => null,
<<<<<<< HEAD
            ],

            (object) [
                'type' => 'Json',
                'name' => 'name',
                'rules' => 'required',
                'comment' => null,
            ],
            /*
            (object) [
                'type' => 'Json',
                'name' => 'slug',
                'rules' => 'required',
                'comment' => null,
            ],
            //*/
            (object) [
                'type' => 'String',
                'name' => 'type',
                'comment' => null,
            ],
            /*
            (object) [
                'type' => 'Integer',
                'name' => 'order_column',
                'comment' => null,
            ],
            //*/
=======
                'col_size' => 2,
            ],
            (object) [
                'type' => 'Text',
                'name' => 'tag_type',
                //'rules' => 'required',
                'comment' => null,
                'col_size' => 5,
            ],

            (object) [
                'type' => 'SelectRelationshipOne',
                'name' => 'tagCat',
                //'rules' => 'required',
                'comment' => null,
                'col_size' => 5,
            ],

            (object) [
                'type' => 'String',
                'name' => 'post.title',
                'rules' => 'required',
                'comment' => null,
                'col_size' => 12,
            ],

            (object) [
                'type' => 'SelectParent',
                'name' => 'parent_id',
                'comment' => null,
                'col_size' => 2,
            ],

            (object) [
                'type' => 'Image',
                'name' => 'post.image_src',
                'comment' => null,
                'col_size' => 2,
            ],
>>>>>>> 4fabb56 (first)
        ];
    }

    /**
     * Get the tabs available.
     */
<<<<<<< HEAD
    public function tabs(): array
    {
=======
    public function tabs(): array {
>>>>>>> 4fabb56 (first)
        $tabs_name = [];

        return $tabs_name;
    }

    /**
     * Get the cards available for the request.
     */
<<<<<<< HEAD
    public function cards(Request $request): array
    {
=======
    public function cards(Request $request): array {
>>>>>>> 4fabb56 (first)
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param \Illuminate\Http\Request $request
     */
<<<<<<< HEAD
    public function filters(Request $request = null): array
    {
=======
    public function filters(Request $request = null): array {
>>>>>>> 4fabb56 (first)
        return [];
    }

    /**
     * Get the lenses available for the resource.
     */
<<<<<<< HEAD
    public function lenses(Request $request): array
    {
=======
    public function lenses(Request $request): array {
>>>>>>> 4fabb56 (first)
        return [];
    }

    /**
     * Get the actions available for the resource.
     */
<<<<<<< HEAD
    public function actions(): array
    {
        return [];
    }
}
=======
    public function actions(): array {
        return [];
    }
}
>>>>>>> 4fabb56 (first)
=======
<?php

declare(strict_types=1);

namespace Modules\Tag\Models\Panels;

use Modules\Tag\Models\Tag;
use Illuminate\Http\Request;
// --- Services --

use Modules\Xot\Contracts\RowsContract;
use Modules\Xot\Models\Panels\XotBasePanel;

class TagPanel extends XotBasePanel
{
    /**
     * The model the resource corresponds to.
     */
    public static string $model = Tag::class;
    public Tag $row;

    /**
     * The single value that should be used to represent the resource when being displayed.
     */
    public static string $title = 'title';


    /**
     * on select the option label.
     * @param Tag $row
     */
    public function optionLabel($row): string
    {
        //return (string) implode('-', $row->name); //spatie
        return (string) $row->name;
    }

    /**
     * index navigation.
     */
    public function indexNav(): ?\Illuminate\Contracts\Support\Renderable
    {
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
        // return $query->where('user_id', $request->user()->id);
        return $query;
    }

    /**
     * Get the fields displayed by the resource.
        'value'=>'..',
     */
    public function fields(): array
    {
        return [
            (object) [
                'type' => 'Id',
                'name' => 'id',
                'comment' => null,
            ],

            (object) [
                'type' => 'Json',
                'name' => 'name',
                'rules' => 'required',
                'comment' => null,
            ],
            /*
            (object) [
                'type' => 'Json',
                'name' => 'slug',
                'rules' => 'required',
                'comment' => null,
            ],
            //*/
            (object) [
                'type' => 'String',
                'name' => 'type',
                'comment' => null,
            ],
            /*
            (object) [
                'type' => 'Integer',
                'name' => 'order_column',
                'comment' => null,
            ],
            //*/
        ];
    }

    /**
     * Get the tabs available.
     */
    public function tabs(): array
    {
        $tabs_name = [];

        return $tabs_name;
    }

    /**
     * Get the cards available for the request.
     */
    public function cards(Request $request): array
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param \Illuminate\Http\Request $request
     */
    public function filters(Request $request = null): array
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     */
    public function lenses(Request $request): array
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     */
    public function actions(): array
    {
        return [];
    }
}
>>>>>>> 9bd68a9 (.)
