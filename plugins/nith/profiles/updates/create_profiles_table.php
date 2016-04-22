<?php namespace NITH\Profiles\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateProfilesTable extends Migration
{

    public function up()
    {
        Schema::create('nith_profiles_profiles', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
          
            $table->string('name', 255);
            $table->unique('name');

            $table->text('qualification');

            $table->string('phone_office', 20)->nullable();
            $table->string('phone_residence', 20)->nullable();
            $table->string('fax', 20)->nullable();
            $table->string('email', 200)->nullable();
            $table->string('website', 255)->nullable();

            $table->timestamps();

        });
    }

    public function down()
    {
        Schema::dropIfExists('nith_profiles_profiles');
    }

}
