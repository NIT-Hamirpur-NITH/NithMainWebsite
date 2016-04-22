<?php namespace NITH\Conference\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateConferencesTable extends Migration
{

    public function up()
    {
        Schema::create('nith_conference_conferences', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('title');
            $table->text('by');
            $table->text('in');
            $table->integer('year');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('nith_conference_conferences');
    }

}
