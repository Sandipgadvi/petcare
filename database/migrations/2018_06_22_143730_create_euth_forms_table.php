<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEuthFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('euth_forms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ethu_owner');
            $table->date('ethu_date');
            $table->text('ethu_address');
            $table->string('ethu_phone');
            $table->string('ethu_alt_phone');
            $table->string('ethu_pet_name');
            $table->string('ethu_breed');
            $table->string('ethu_sex');
            $table->string('ethu_color');
            $table->string('ethu_case_no');
            $table->text('note');
            $table->string('agree');
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
        Schema::dropIfExists('euth_forms');
    }
}
