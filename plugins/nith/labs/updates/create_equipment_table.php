<?php namespace NITH\Labs\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateEquipmentTable extends Migration
{

    public function up()
    {
        Schema::create('nith_labs_equipment', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('name');
            $table->integer('quantity');
            $table->text('grant');

            /**
             * realted to a lab
             */
            $table->integer('lab_id')->unsigned();
            $table->foreign('lab_id')->references('id')->on('nith_labs_labs');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('nith_labs_equipment');
    }

}
