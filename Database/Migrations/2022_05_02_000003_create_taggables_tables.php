<<<<<<< HEAD
<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
use Modules\Xot\Database\Migrations\XotBaseMigration;

class CreateTaggablesTables extends XotBaseMigration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        // -- CREATE --
        $this->tableCreate(
            function (Blueprint $table) {
                // SQLSTATE[HY000]: General error: 1215 Cannot add foreign key constraint (SQL: alter table `taggable` add constraint `taggable_tag_id_foreign` foreign key (`tag_id`) references `tags` (`id`) on delete cascade)
                $table->foreignId('tag_id'); // ->constrained()->cascadeOnDelete();
                $table->morphs('taggable');
                $table->unique(['tag_id', 'taggable_id', 'taggable_type']);
            }
        );
        // -- UPDATE --
        $this->tableUpdate(
            function (Blueprint $table) {

                if (! $this->hasColumn('updated_by')) {
                    $table->timestamps();
                    $table->string('created_by')->nullable();
                    $table->string('updated_by')->nullable();
                }

                if (! $this->hasColumn('taggable_type')) {
                    $table->string('taggable_type');
                }
                if (! $this->hasColumn('custom_properties')) {
                    $table->json('custom_properties');
                }
            }
        );
    }
=======
<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
use Modules\Xot\Database\Migrations\XotBaseMigration;

class CreateTaggablesTables extends XotBaseMigration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        // -- CREATE --
        $this->tableCreate(
            function (Blueprint $table) {
                // SQLSTATE[HY000]: General error: 1215 Cannot add foreign key constraint (SQL: alter table `taggable` add constraint `taggable_tag_id_foreign` foreign key (`tag_id`) references `tags` (`id`) on delete cascade)
                $table->foreignId('tag_id'); // ->constrained()->cascadeOnDelete();
                $table->morphs('taggable');
                $table->unique(['tag_id', 'taggable_id', 'taggable_type']);
            }
        );
        // -- UPDATE --
        $this->tableUpdate(
            function (Blueprint $table) {

                if (! $this->hasColumn('updated_by')) {
                    $table->timestamps();
                    $table->string('created_by')->nullable();
                    $table->string('updated_by')->nullable();
                }

                if (! $this->hasColumn('taggable_type')) {
                    $table->string('taggable_type');
                }
                if (! $this->hasColumn('custom_properties')) {
                    $table->json('custom_properties');
                }
            }
        );
    }
>>>>>>> 9bd68a9 (.)
}