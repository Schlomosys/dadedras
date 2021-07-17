<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocdadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('docdads', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('auteur');
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('seo_title')->nullable();
            $table->string('references')->nullable();
            $table->string('type')->nullable();
            $table->string('langues')->nullable();
            $table->string('collection')->nullable();
            $table->string('lientelechargement')->nullable();

            $table->boolean('validity')->default(false);
            $table->text('introduction')->nullable();
            $table->longText('description')->nullable();
            $table->text('meta_description')->nullable();
            $table->text('meta_keywords')->nullable();

            //on pourrait agir après dessus
            $table->boolean('active')->default(false);

            $table->string('photocouv')->nullable();
            $table->string('video')->nullable();
            $table->string('fichier')->nullable();

            $table->integer('nombpages')->nullable();
            $table->integer('nombdevus')->nullable();
            $table->integer('nombtelech')->nullable();
            $table->integer('nombpartage')->nullable();
            $table->text('tags')->nullable();


            $table->timestamp('creation_date')->nullable();
            $table->timestamps();


            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')
               ->references('id')
               ->on('categories')
               ->onDelete('restrict')
               ->onUpdate('restrict');

            $table->unsignedBigInteger('visibility_id');
            $table->foreign('visibility_id')
               ->references('id')
               ->on('visibilities')
               ->onDelete('restrict')
               ->onUpdate('restrict');   
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('docdads');
    }
}
