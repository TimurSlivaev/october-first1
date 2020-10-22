<?php namespace Slivaev\Books\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSlivaevBooks extends Migration
{
    public function up()
    {
        Schema::create('slivaev_books_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('title');
            $table->integer('author_id');
            $table->integer('genre_id');
            $table->integer('year');
            $table->text('description');
            $table->integer('age_rating');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('slivaev_books_');
    }
}
