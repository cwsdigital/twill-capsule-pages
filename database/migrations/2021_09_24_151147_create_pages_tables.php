<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePagesTables extends Migration
{
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            // this will create an id, a "published" column, and soft delete and timestamps columns
            createDefaultTableFields($table, true, true, true);

            $table->foreignId('template_id')->nullable()->constrained()->onDelete('set null');

            $table->integer('position')->unsigned()->nullable();

            $table->nestedSet();
        });

        Schema::create('page_translations', function (Blueprint $table) {
            createDefaultTranslationsTableFields($table, 'page');

            $table->string('title', 200)->nullable();

            $table->string('heading')->nullable();
            $table->string('subheading')->nullable();

            $table->text('intro_content')->nullable();
        });

        Schema::create('page_slugs', function (Blueprint $table) {
            createDefaultSlugsTableFields($table, 'page');
        });

        Schema::create('page_revisions', function (Blueprint $table) {
            createDefaultRevisionsTableFields($table, 'page');
        });
    }

    public function down()
    {
        Schema::dropIfExists('page_revisions');
        Schema::dropIfExists('page_slugs');
        Schema::dropIfExists('pages');
    }
}
