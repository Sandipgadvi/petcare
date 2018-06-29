<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsentFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consent_forms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('consent_owner');
            $table->date('consent_date');
            $table->text('consent_address');
            $table->string('consent_phone');
            $table->string('consent_alt_phone');
            $table->string('consent_pet_name');
            $table->string('consent_breed');
            $table->string('consent_sex');
            $table->string('consent_color');
            $table->string('consent_case_no');
            $table->string('consent_primary_complaints');
            $table->text('consent_other');
            $table->text('consent_specify_complaints');
            $table->text('consent_condition');
            $table->text('consent_medication');
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
        Schema::dropIfExists('consent_forms');
    }
}
