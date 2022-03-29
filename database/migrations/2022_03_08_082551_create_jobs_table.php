<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('working_position');
            $table->string('company_name');
            $table->integer('male_demand');
            $table->integer('female_demand');
            $table->string('salary_rs');
            $table->string('salary_abroad_currency');
            $table->date('expire_date');
            $table->boolean('status')->default('0');
            $table->string('additional_information','5000');
            $table->string('document')->nullable();
            $table->unsignedBigInteger('country_id');
            $table->foreign('country_id')->references('id')->on('country');
            $table->unsignedBigInteger('qualification_id');
            $table->foreign('qualification_id')->references('id')->on('qualification');
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->on('jobcategory')->references('id');
            $table->unsignedBigInteger('created_by');
            $table->foreign('created_by')->on('users')->references('id');
            $table->unsignedBigInteger('jtype_id');
            $table->foreign('jtype_id')->references('id')->on('job_type');
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
        Schema::dropIfExists('jobs');
    }
};
