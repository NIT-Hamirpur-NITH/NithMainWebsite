<?php namespace NITH\Departments\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateDepartmentsTable extends Migration
{

    public function up()
    {
        Schema::create('nith_departments_departments', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('name');
            $table->string('short_name', 5);
            $table->tinyInteger('type');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('nith_departments_departments');
    }

}
