<?php namespace Slivaev\Books\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSlivaevBooksAuthors extends Migration
{
    public function up()
    {
        Schema::create('slivaev_books_authors', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('title');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('slivaev_books_authors');
    }
}
