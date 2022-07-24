<?php

namespace Modules\Tag\Http\Livewire;

use Illuminate\Contracts\Support\Renderable;
use Livewire\Component;
use Illuminate\Database\Eloquent\Model;

class TagCrud extends Component {

    public string $model_class;

    public array $form_data=[];
    /**
     * Undocumented function
     *
     * @return void
     */
    public function mount(string $modelClass){
        $this->model_class=$modelClass;
        
    }


    /**
     * Undocumented function
     *
     * @return Renderable
     */
    public function render():Renderable {
        $group_tags=(new $this->model_class(['id'=>0]))->tags->groupBy('type');
        
        $view='tag::livewire.tag-crud';
        $view_params=[
            'view'=>$view,
            'group_tags'=>$group_tags,
        ];

        return view($view,$view_params);
    }

    public function getTagById(int $tag_id){
        $tag=(new $this->model_class(['id'=>0]))
            ->tags
            ->firstWhere('id',$tag_id);
        return $tag;
    }

    public function moveUp(int $tag_id):void {
        $tag=$this->getTagById($tag_id);
        $res=$tag->moveOrderUp();
        (new $this->model_class(['id'=>0]))->refresh();
        
    }

    public function moveDown(int $tag_id):void {
        $tag=$this->getTagById($tag_id);
        $tag->moveOrderDown();
    }

    public function addTag(string $type):void {
        $name= $this->form_data['tag'][$type] ?? null;
        (new $this->model_class(['id'=>0]))->attachTag($name,$type);
        
    }

    public function delete(int $tag_id):void {
        $this->dispatchBrowserEvent('swal:confirm', [
            'type' => 'warning',
            'message' => 'Are you sure?',
            'text' => 'If deleted, you will not be able to recover this imaginary file!'
        ]);
    }

}