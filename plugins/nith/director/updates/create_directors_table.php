<?php namespace NITH\Director\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateDirectorsTable extends Migration
{

    public function up()
    {
        Schema::create('nith_director_directors', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('message');

            /**
             * Profile
             */
            $table->integer('profile_id')->unsigned();
            $table->foreign('profile_id')->references('id')->on('nith_profiles_profiles');


            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('nith_director_directors');
    }

}
