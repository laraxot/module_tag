<?php

declare(strict_types=1);

namespace Modules\Tag\Http\Livewire;

use Livewire\Component;
use Spatie\Tags\HasTags;
use Modules\Tag\Models\Tag;
use Modules\Xot\Contracts\HasTagsContract;
use Illuminate\Contracts\Support\Renderable;
/**
 * Summary of TagCrud

 * Undocumented class
 *
 * @property HasTagsContract $model;
 */
class TagCrud extends Component {
    public string $model_class;

    public array $form_data = [];

    public int $tag_id;

    public function getModelProperty():HasTagsContract
    {
         //$model = (new $this->model_class(['id' => 0]));
         $model=app($this->model_class,['id' => 0]);
        return $model;
    }

    /**
     * Undocumented function.
     *
     * @return void
     */
    public function mount(string $modelClass) {
        $this->model_class = $modelClass;
    }

    /**
     * Undocumented function.
     */
    public function render(): Renderable {

        //$model = (new $this->model_class(['id' => 0]));
        //$model=app($this->model_class,['id' => 0]);
        $group_tags = $this->model->tags->groupBy('type');
        $view = 'tag::livewire.tag-crud';
        $view_params = [
            'view' => $view,
            'group_tags' => $group_tags,
        ];

        return view($view, $view_params);
    }

    public function getTagById(int $tag_id): ?Tag {
        //$model=(new $this->model_class(['id' => 0]));
        //$model=app($this->model_class,['id' => 0]);
        $tag = $this->model
            ->tags
            ->firstWhere('id', $tag_id);

        return $tag;
    }

    public function moveUp(int $tag_id): void {
        $tag = $this->getTagById($tag_id);
        $res = $tag->moveOrderUp();
        //(new $this->model_class(['id' => 0]))->refresh();
        $this->model->refresh();
    }

    public function moveDown(int $tag_id): void {
        $tag = $this->getTagById($tag_id);
        $tag->moveOrderDown();
    }

    public function addTag(string $type): void {
        $name = $this->form_data['tag'][$type] ?? null;
        (new $this->model_class(['id' => 0]))->attachTag($name, $type);
    }

    public function addTagType(): void {
        $name = $this->form_data['tag_name'];
        $type = $this->form_data['tag_type'];
        $this->form_data = [];
        (new $this->model_class(['id' => 0]))->attachTag($name, $type);
    }

    public function delete(int $tag_id): void {
        $this->tag_id = $tag_id;
        $this->dispatchBrowserEvent('swal:confirm', [
            'type' => 'warning',
            'message' => 'Are you sure?',
            'text' => 'If deleted, you will not be able to recover this imaginary file!',
            'callback' => 'doDelete',
        ]);
    }

    public function doDelete(): void {
        $tag = $this->getTagById($this->tag_id);
        (new $this->model_class(['id' => 0]))->detachTag($tag->name, $tag->type);
    }
}
