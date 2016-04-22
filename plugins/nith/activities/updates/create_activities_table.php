<?php namespace NITH\Activities\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateActivitiesTable extends Migration
{

    public function up()
    {
        Schema::create('nith_activities_activities', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title', 255);
            $table->text('description');
            $table->text('content')->nullable();
            $table->text('link')->nullable();
            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->boolean('archive')->default(false);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('nith_activities_activities');
    }

}
