<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHrisNewFileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hris_new_file', function (Blueprint $table) {
            $table->increments('id');
            $table->text('username');
            $table->text('email');
            $table->text('firstname');
            $table->text('lastname');
            $table->text('jobtitle');
            $table->text('city');
            $table->text('state');
            $table->text('country');
            $table->text('customfield1');
            $table->text('customfield2');
            $table->text('customfield3');
            $table->text('customfield4');
            $table->text('customfield5');
            $table->text('customfield6');
            $table->text('customfield7');
            $table->text('customfield8');
            $table->text('customfield9');
            $table->text('customfield10');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hris_new_file');
    }
}
