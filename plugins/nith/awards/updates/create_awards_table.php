<?php namespace NITH\Awards\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateAwardsTable extends Migration
{

    public function up()
    {
        Schema::create('nith_awards_awards', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('title');
            
            $table->integer('faculty_id')->unsigned();
            $table->foreign('faculty_id')->references('id')->on('nith_faculties_faculties');


            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('nith_awards_awards');
    }

}
