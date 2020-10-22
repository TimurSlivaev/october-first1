<?php namespace Slivaev\Products\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSlivaevProductsList extends Migration
{
    public function up()
    {
        Schema::create('slivaev_products_list', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title', 255);
            $table->decimal('price', 10, 0);
            $table->text('text');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('slivaev_products_list');
    }
}
