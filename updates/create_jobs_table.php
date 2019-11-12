<?php

namespace Fytinnovations\JobManager\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateJobsTable extends Migration
{
    public function up()
    {
        Schema::create('fytinnovations_jobmanager_jobs', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->text('job_description');
            $table->text('how_to_apply');
            $table->string('application_target');
            $table->timestamps();
        });

        Schema::table('fytinnovations_jobmanager_jobs', function ($table) {
            $table->integer('job_type_id')->unsigned();
            $table->foreign('job_type_id')->references('id')->on('fytinnovations_jobmanager_job_types');
        });
    }

    public function down()
    {
        Schema::table('fytinnovations_jobmanager_jobs', function ($table) {
            $table->dropForeign('fytinnovations_jobmanager_jobs_job_type_id_foreign');
        });
        Schema::dropIfExists('fytinnovations_jobmanager_jobs');
    }
}
