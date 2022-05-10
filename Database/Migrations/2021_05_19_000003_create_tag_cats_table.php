<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
use Modules\Xot\Database\Migrations\XotBaseMigration;

class CreateTagCatsTable extends XotBaseMigration {
    /**
     * Run the migrations.
     */
    public function up(): void {
<<<<<<< HEAD
<<<<<<< HEAD
        // -- CREATE --
        $this->tableCreate(
            function (Blueprint $table) {
                $table->increments('id');
                $table->text('tag_cat_type');
                $table->integer('type_input');
                $table->timestamps();
            }
            );

        // -- UPDATE --
=======
=======
>>>>>>> fc24fbf (first)
        //-- CREATE --
        $this->tableCreate(
            function (Blueprint $table) {
                    $table->increments('id');
                    $table->text('tag_cat_type');
                    $table->integer('type_input');
                    $table->timestamps();
                }
            );


        //-- UPDATE --
<<<<<<< HEAD
>>>>>>> 160a6ab (first)
=======
>>>>>>> fc24fbf (first)
        $this->tableUpdate(
            function (Blueprint $table) {
                if (! $this->hasColumn('created_by')) {
                    $table->string('created_by')->nullable();
                    $table->string('updated_by')->nullable();
                }

                if (! $this->hasColumn('old_id')) {
                    $table->integer('old_id');
                }

                if (! $this->hasColumn('pos')) {
                    $table->integer('pos');
                }
            }
        );
    }
<<<<<<< HEAD
<<<<<<< HEAD
}
=======
}
>>>>>>> 160a6ab (first)
=======
}
>>>>>>> fc24fbf (first)
