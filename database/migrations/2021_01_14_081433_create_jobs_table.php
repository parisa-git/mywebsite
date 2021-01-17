<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
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

            $table->unsignedBigInteger('categories_id');
            $table->foreign('categories_id')->references('id')->on('job_categories');
            $table->unsignedBigInteger('state_id');
            $table->foreign('state_id')->references('id')->on('states');
            $table->string('job_name')->nullable();
            $table->string('job_money')->nullable();
            $table->string('job_time')->nullable();
            $table->string('job_img')->nullable();
            $table->string('job_email')->nullable();
            $table->string('job_skill')->nullable();
            $table->string('job_more')->nullable();
            $table->text('job_desc')->nullable();
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
}
