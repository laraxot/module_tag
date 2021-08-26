<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
use Modules\Xot\Database\Migrations\XotBaseMigration;

class CreateTagCatsTable extends XotBaseMigration {
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
                    $table->text('tag_cat_type'); //serve per filtrare
                    $table->integer('type_input');
                    //tipo di tag, per farlo visualizzare in una certa maniera o in un altra
                    //da utilizzare in combinazione con il componente tag (forse ancora da fare)
                    $table->timestamps();
                }
            );
        }
        //-- UPDATE --
        $this->getConn()->table($this->getTable(),
            function (Blueprint $table): void {
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
}
