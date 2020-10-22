<?php namespace Slivaev\Books\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSlivaevBooksAuthors extends Migration
{
    public function up()
    {
        Schema::table('slivaev_books_authors', function($table)
        {
            $table->renameColumn('title', 'name');
        });
    }
    
    public function down()
    {
        Schema::table('slivaev_books_authors', function($table)
        {
            $table->renameColumn('name', 'title');
        });
    }
}
