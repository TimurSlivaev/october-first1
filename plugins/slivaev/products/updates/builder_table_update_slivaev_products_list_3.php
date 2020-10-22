<?php namespace Slivaev\Products\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSlivaevProductsList3 extends Migration
{
    public function up()
    {
        Schema::table('slivaev_products_list', function($table)
        {
            $table->string('slug', 255);
        });
    }
    
    public function down()
    {
        Schema::table('slivaev_products_list', function($table)
        {
            $table->dropColumn('slug');
        });
    }
}
