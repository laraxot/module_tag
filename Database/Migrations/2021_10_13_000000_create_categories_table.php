<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
use Modules\Xot\Database\Migrations\XotBaseMigration;

class CreateCategoriesTable extends XotBaseMigration {
    /**
     * Run the migrations.
     */
    public function up(): void {
        //-- CREATE --
        if (! $this->tableExists()) {
            $this->getConn()->create(
                $this->getTable(),
                function (Blueprint $table): void {
                    $table->increments('id');
                    $table->integer('parent_id');
                    $table->string('created_by')->nullable();
                    $table->string('updated_by')->nullable();
                    $table->timestamps();
                }
            );
        }
        //-- UPDATE --
        $this->getConn()->table(
            $this->getTable(),
            function (Blueprint $table): void {
                /*
                if (! $this->hasColumn('tag_type')) {
                    $table->string('tag_type');
                }
                */
            }
        );
    }
}
