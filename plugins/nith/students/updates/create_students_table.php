<?php namespace NITH\Students\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateStudentsTable extends Migration
{

    public function up()
    {
        Schema::create('nith_students_students', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name', 255);

            $table->tinyInteger('program');
            $table->tinyInteger('year');
            $table->integer('roll_number');

            /**
             * Related to department
             */
            $table->integer('department_id')->unsigned();
            $table->foreign('department_id')->references('id')->on('nith_departments_departments');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('nith_students_students');
    }

}
