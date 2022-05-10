<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
use Modules\Xot\Database\Migrations\XotBaseMigration;

class CreateTagMorphTable extends XotBaseMigration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
<<<<<<< HEAD
<<<<<<< HEAD
        // -- CREATE --
=======
        //-- CREATE --
>>>>>>> 160a6ab (first)
=======
        //-- CREATE --
>>>>>>> fc24fbf (first)
        $this->tableCreate(
            function (Blueprint $table) {
                $table->increments('id');
                $table->integer('tag_id');
                $table->nullableMorphs('post');

                $table->timestamps();

                $table->string('created_by')->nullable();
                $table->string('updated_by')->nullable();
            }
        );

<<<<<<< HEAD
<<<<<<< HEAD
        // -- UPDATE --
=======
        //-- UPDATE --
>>>>>>> 160a6ab (first)
=======
        //-- UPDATE --
>>>>>>> fc24fbf (first)
        $this->tableUpdate(
            function (Blueprint $table) {
                if (! $this->hasColumn('note')) {
                    $table->text('note')->nullable();
                }

                if ($this->hasColumn('auth_user_id') && ! $this->hasColumn('user_id')) {
                    $table->renameColumn('auth_user_id', 'user_id');
                }

                if (! $this->hasColumn('auth_user_id') && ! $this->hasColumn('user_id')) {
                    $table->integer('user_id')->nullable();
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
