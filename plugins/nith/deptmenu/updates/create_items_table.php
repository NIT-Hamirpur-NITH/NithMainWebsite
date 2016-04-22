<?php namespace NITH\DeptMenu\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateItemsTable extends Migration
{

    public function up()
    {
        Schema::create('nith_deptmenu_items', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');

            $table->string('title', 25);
            $table->text('link')->nullable();
            $table->text('content')->nullable();

            $table->integer('header_id')->unsigned();
            $table->foreign('header_id')->references('id')->on('nith_deptmenu_headers');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('nith_deptmenu_items');
    }

}
