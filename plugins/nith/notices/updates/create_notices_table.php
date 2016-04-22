<?php namespace NITH\Notices\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateNoticesTable extends Migration
{

    public function up()
    {
        Schema::create('nith_notices_notices', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title', 255);
            $table->text('content')->nullable();
            $table->text('link')->nullable();
            $table->boolean('archive')->default(false);
            $table->boolean('isnew')->default(true);
            $table->tinyInteger('type')->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('nith_notices_notices');
    }

}
