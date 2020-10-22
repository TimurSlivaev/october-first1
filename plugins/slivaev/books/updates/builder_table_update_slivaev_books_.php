<?php namespace Slivaev\Books\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSlivaevBooks extends Migration
{
    public function up()
    {
        Schema::table('slivaev_books_', function($table)
        {
            $table->string('slug', 255);
        });
    }
    
    public function down()
    {
        Schema::table('slivaev_books_', function($table)
        {
            $table->dropColumn('slug');
        });
    }
}
