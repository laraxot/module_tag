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

            (object) [
                'type' => 'Json',
                'name' => 'slug',
                'rules' => 'required',
                'comment' => null,
            ],

            (object) [
                'type' => 'String',
                'name' => 'type',
                'comment' => null,
            ],

            (object) [
                'type' => 'Integer',
                'name' => 'order_column',
                'comment' => null,
            ],
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
