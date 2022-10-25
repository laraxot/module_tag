<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
use Modules\Xot\Database\Migrations\XotBaseMigration;

class CreateCategoryMorphTable extends XotBaseMigration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        // -- CREATE --
        $this->tableCreate(
            function (Blueprint $table) {
                $table->increments('id');
                $table->integer('category_id');
                $table->nullableMorphs('post');
                // li aggiungo, tanto male non fanno
                $table->integer('user_id')->nullable();
                $table->text('note')->nullable();

                $table->timestamps();

                $table->string('created_by')->nullable();
                $table->string('updated_by')->nullable();
            }
        );

        // -- UPDATE --
        $this->tableUpdate(
            function (Blueprint $table) {
                /*
                if (! $this->hasColumn('user_id')) {
                    $table->integer('user_id')->nullable();
                    $table->text('note')->nullable();
                }
                */
                if ($this->hasColumn('auth_user_id')) {
                    $table->renameColumn('auth_user_id', 'user_id');
                }
            }
        );
    }
}
