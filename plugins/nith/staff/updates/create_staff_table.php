<?php namespace NITH\Staff\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateStaffTable extends Migration
{

    public function up()
    {
        Schema::create('nith_staff_staff', function($table)
        {
            $table->engine = 'InnoDB';
            $table->text('designation');

            $table->integer('department_id')->unsigned();
            $table->foreign('department_id')->references('id')->on('nith_departments_departments');

            $table->integer('profile_id')->unsigned();
            $table->foreign('profile_id')->references('id')->on('nith_profiles_profiles');

            $table->increments('id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('nith_staff_staff');
    }

}
