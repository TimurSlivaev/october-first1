<?php namespace Slivaev\Products\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSlivaevProductsList2 extends Migration
{
    public function up()
    {
        Schema::table('slivaev_products_list', function($table)
        {
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('slivaev_products_list', function($table)
        {
            $table->dropColumn('deleted_at');
        });
    }
}
