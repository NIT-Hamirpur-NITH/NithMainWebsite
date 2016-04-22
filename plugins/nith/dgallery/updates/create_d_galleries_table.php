<?php namespace NITH\DGallery\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateDGalleriesTable extends Migration
{

    public function up()
    {
        Schema::create('nith_dgallery_d_galleries', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->boolean('ismain')->default(false);

            $table->integer('department_id')->unsigned();
            $table->foreign('department_id')->references('id')->on('nith_departments_departments');

            $table->integer('carousel_id')->unsigned();
            $table->foreign('carousel_id')->references('id')->on('mohsin_carousel_carousels');


            
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('nith_dgallery_d_galleries');
    }

}
