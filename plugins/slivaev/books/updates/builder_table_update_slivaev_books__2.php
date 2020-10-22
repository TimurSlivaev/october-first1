<?php namespace Slivaev\Books\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSlivaevBooks2 extends Migration
{
    public function up()
    {
        Schema::table('slivaev_books_', function($table)
        {
            $table->string('cover', 255);
        });
    }
    
    public function down()
    {
        Schema::table('slivaev_books_', function($table)
        {
            $table->dropColumn('cover');
        });
    }
}
