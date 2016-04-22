<?php namespace NITH\Labs\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateLabsTable extends Migration
{

    public function up()
    {
        Schema::create('nith_labs_labs', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('name');

            /**
             * Add to a department
             */
            $table->integer('department_id')->unsigned();
            $table->foreign('department_id')->references('id')->on('nith_departments_departments');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('nith_labs_labs');
    }

}
