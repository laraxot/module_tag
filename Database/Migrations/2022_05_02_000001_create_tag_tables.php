<<<<<<< HEAD
<?php

<<<<<<< HEAD
declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
use Modules\Xot\Database\Migrations\XotBaseMigration;

/**
 * Undocumented class.
 */
class CreateTagTables extends XotBaseMigration {
    /**
=======
use Illuminate\Database\Schema\Blueprint;
use Modules\Xot\Database\Migrations\XotBaseMigration;

class CreateTagTables extends XotBaseMigration{
     /**
>>>>>>> 4fabb56 (first)
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
<<<<<<< HEAD
        // -- CREATE --
=======
        //-- CREATE --
>>>>>>> 4fabb56 (first)
        $this->tableCreate(
            function (Blueprint $table) {
                $table->id();
                $table->json('name');
                $table->json('slug');
                $table->string('type')->nullable();
                $table->integer('order_column')->nullable();
                $table->timestamps();
            }
        );
<<<<<<< HEAD
        // -- UPDATE --
=======
        //-- UPDATE --
>>>>>>> 4fabb56 (first)
        $this->tableUpdate(
            function (Blueprint $table) {
                if (! $this->hasColumn('name')) {
                    $table->json('name');
                }
                if (! $this->hasColumn('slug')) {
                    $table->json('slug');
                }
                if (! $this->hasColumn('type')) {
                    $table->string('type')->nullable();
                }

                if (! $this->hasColumn('order_column')) {
                    $table->integer('order_column')->nullable();
                }
            }
        );
    }
}
=======
<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
use Modules\Xot\Database\Migrations\XotBaseMigration;

/**
 * Undocumented class.
 */
class CreateTagTables extends XotBaseMigration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        // -- CREATE --
        $this->tableCreate(
            function (Blueprint $table) {
                $table->id();
                $table->json('name');
                $table->json('slug');
                $table->string('type')->nullable();
                $table->integer('order_column')->nullable();
                $table->timestamps();
            }
        );
        // -- UPDATE --
        $this->tableUpdate(
            function (Blueprint $table) {
                if (! $this->hasColumn('name')) {
                    $table->json('name');
                }
                if (! $this->hasColumn('slug')) {
                    $table->json('slug');
                }
                if (! $this->hasColumn('type')) {
                    $table->string('type')->nullable();
                }

                if (! $this->hasColumn('order_column')) {
                    $table->integer('order_column')->nullable();
                }
            }
        );
    }
}
>>>>>>> 9bd68a9 (.)
