<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientprofilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patientprofiles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ref_no')->nullable();
            $table->string('acc_no')->nullable();
            $table->string('name');
            $table->string('nric');
            $table->string('contact');
            $table->string('alt_contact')->nullable();
            $table->text('address')->nullable();
            $table->boolean('is_active')->default(1);
            $table->text('remarks')->nullable();
            $table->string('email')->unique()->nullable();
            $table->timestamps();

            // foreign keys
            $table->integer('profile_id')->nullable();
            $table->integer('company_id')->nullable();
            $table->integer('occupation_id')->nullable();
            $table->integer('gender_id')->nullable();
            $table->integer('race_id')->nullable();
            $table->integer('language_id')->nullable();
            $table->integer('marital_id')->nullable();
            $table->integer('religion_id')->nullable();
            $table->integer('resident_id')->nullable();
            $table->integer('nationality_id')->nullable();
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patientprofiles');
    }
}
