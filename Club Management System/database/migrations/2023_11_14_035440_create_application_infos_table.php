<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationInfosTable extends Migration
{
    public function up()
    {
        Schema::create('application_info', function (Blueprint $table) {
            $table->id('application_id');
            $table->string('application_title');
            $table->string('application_type');
            $table->date('application_date');
            $table->text('application_description');
            $table->string('applicant_name');
            $table->string('club_name');

            // Department statuses
            $table->tinyInteger('onm_status')->default(3);
            $table->tinyInteger('cits_status')->default(3);
            $table->tinyInteger('facilities_status')->default(3);
            $table->tinyInteger('security_status')->default(3);
            $table->tinyInteger('finance_status')->default(3);
            $table->tinyInteger('administration_status')->default(3);
            $table->tinyInteger('councilaffairs_status')->default(3);
            $table->tinyInteger('mpr_status')->default(3);
            $table->tinyInteger('vc_status')->default(0);
            $table->tinyInteger('dean_status')->default(0);
            $table->tinyInteger('dosa_status')->default(0);

            // Department responses
            $table->text('onm_response')->nullable();
            $table->text('cits_response')->nullable();
            $table->text('facilities_response')->nullable();
            $table->text('security_response')->nullable();
            $table->text('finance_response')->nullable();
            $table->text('administration_response')->nullable();
            $table->text('councilaffairs_response')->nullable();
            $table->text('mpr_response')->nullable();
            $table->text('vc_response')->nullable();
            $table->text('dean_response')->nullable();
            $table->text('dosa_response')->nullable();

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('application_infos');
    }
}
