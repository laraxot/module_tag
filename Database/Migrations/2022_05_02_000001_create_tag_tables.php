<?php

use Illuminate\Database\Schema\Blueprint;
use Modules\Xot\Database\Migrations\XotBaseMigration;

class CreateTagTables extends XotBaseMigration{
     /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        //-- CREATE --
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
        //-- UPDATE --
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
