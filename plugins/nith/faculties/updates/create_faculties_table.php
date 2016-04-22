<?php namespace NITH\Faculties\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateFacultiesTable extends Migration
{

    public function up()
    {
        Schema::create('nith_faculties_faculties', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
          
            $table->text('designation');
            $table->text('specialization');

            $table->text('about');

            $table->integer('department_id')->unsigned();
            $table->foreign('department_id')->references('id')->on('nith_departments_departments');

            $table->integer('profile_id')->unsigned();
            $table->foreign('profile_id')->references('id')->on('nith_profiles_profiles');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('nith_faculties_faculties');
    }

}
