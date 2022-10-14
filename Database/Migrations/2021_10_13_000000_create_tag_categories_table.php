<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
use Modules\Tag\Models\Category;
use Modules\Xot\Database\Migrations\XotBaseMigration;

class CreateTagCategoriesTable extends XotBaseMigration {
    protected ?string $model_class = Category::class;

    /**
     * Run the migrations.
     */
    public function up(): void {
        //-- CREATE --
        $this->tableCreate(
            function (Blueprint $table) {
                    $table->increments('id');
                    $table->integer('parent_id');
                    $table->string('created_by')->nullable();
                    $table->string('updated_by')->nullable();
                    $table->timestamps();
                }
            );


        //-- UPDATE --
        $this->tableUpdate(
            function (Blueprint $table) {
                /*
                if (! $this->hasColumn('tag_type')) {
                    $table->string('tag_type');
                }
                */
            }
        );
    }
}
