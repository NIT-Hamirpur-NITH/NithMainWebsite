<?php namespace NITH\Links\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateLinksTable extends Migration
{

    public function up()
    {
        Schema::create('nith_links_links', function($table)
        {
            $table->engine = 'InnoDB';
            $table->string('title', 255);
            $table->text('link');
            $table->boolean('isnew')->default(false);
            $table->increments('id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('nith_links_links');
    }

}
