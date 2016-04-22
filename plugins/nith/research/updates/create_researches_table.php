<?php namespace NITH\Research\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateResearchesTable extends Migration
{

    public function up()
    {
        Schema::create('nith_research_researches', function($table)
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
        Schema::dropIfExists('nith_research_researches');
    }

}
