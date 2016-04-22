<?php namespace NITH\News\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateNewsItemsTable extends Migration
{

    public function up()
    {
        Schema::create('nith_news_news_items', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title', 255);
            $table->text('description');
            $table->text('content')->nullable();
            $table->text('link')->nullable();
            $table->boolean('archive')->default(false);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('nith_news_news_items');
    }

}
