<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tenant_id')->unsigned();
            $table->string('course_id', 50);
            $table->string('code', 20);
            $table->string('name', 255);
            $table->boolean('active');
            $table->boolean('for_sale');
            $table->integer('original_id');
            $table->string('description');
            $table->string('short_description');
            $table->string('long_description');
            $table->string('course_code_for_bulk_import', 20);
            $table->float('price', 8, 2);
            $table->dateTime('access_till_date');
            $table->boolean('course_team_library');
            $table->timestamps();

            $table->foreign('tenant_id')
                ->references('id')->on('tenants');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
