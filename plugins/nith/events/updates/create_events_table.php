<?php namespace NITH\Events\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateEventsTable extends Migration
{

    public function up()
    {
        Schema::create('nith_events_events', function($table)
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
        Schema::dropIfExists('nith_events_events');
    }

}
