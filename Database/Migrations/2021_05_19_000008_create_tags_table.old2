<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
use Modules\Xot\Database\Migrations\XotBaseMigration;

class CreateTagsTable extends XotBaseMigration {
    /**
     * Run the migrations.
     */
    public function up(): void {
        //-- CREATE --
        $this->tableCreate(
            function (Blueprint $table) {
                    $table->increments('id');
                    $table->string('tag_type');
                    $table->integer('tag_cat_id');
                    $table->timestamps();
                }
            );


        //-- UPDATE --
        $this->tableUpdate(
            function (Blueprint $table) {
                if (! $this->hasColumn('tag_type')) {
                    $table->string('tag_type');
                }

                if (! $this->hasColumn('tag_cat_id')) {
                    $table->integer('tag_cat_id');
                }

                if (! $this->hasColumn('old_id')) {
                    $table->integer('old_id');
                }
                if (! $this->hasColumn('pos')) {
                    $table->integer('pos');
                }

                if (! $this->hasColumn('tag_cat_id_up')) {
                    $table->integer('tag_cat_id_up');
                }

                if (! $this->hasColumn('created_by')) {
                    $table->string('created_by')->nullable();
                    $table->string('updated_by')->nullable();
                }

                if (! $this->hasColumn('parent_id')) {
                    $table->integer('parent_id');
                }
            }
        );
    }
}
