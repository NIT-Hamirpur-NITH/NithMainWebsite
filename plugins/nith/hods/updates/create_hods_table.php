<?php namespace NITH\Hods\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateHodsTable extends Migration
{

    public function up()
    {
        Schema::create('nith_hods_hods', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('faculty_id')->unsigned();
            $table->foreign('faculty_id')->references('id')->on('nith_faculties_faculties');
            $table->integer('department_id')->unsigned();
            $table->foreign('department_id')->references('id')->on('nith_departments_departments');
            $table->text('message');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('nith_hods_hods');
    }

}
