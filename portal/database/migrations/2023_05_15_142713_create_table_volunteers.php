<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('table_volunteers', function (Blueprint $table) {
            $table->id('vol_id');
            $table->string('vol_id_no')->nullable();
            $table->string('vol_id_pic')->nullable();
            $table->string('vol_fname');
            $table->string('vol_mname');
            $table->string('vol_lname');
            $table->string('vol_age');
            $table->string('vol_gender');
            $table->string('vol_birthday');
            $table->string('vol_nationality');
            $table->string('vol_civil_status');
            $table->string('vol_blood_type');
            $table->string('vol_region');
            $table->string('vol_province');
            $table->string('vol_municipal');
            $table->string('vol_barangay');
            $table->string('vol_house_no')->nullable();
            $table->string('vol_postal_code');
            $table->string('vol_landline')->nullable();
            $table->string('vol_phone_no');
            $table->string('vol_email');
            $table->string('vol_guardian');
            $table->string('vol_relationship');
            $table->string('vol_guardian_phone_no');
            $table->string('vol_education_att');
            $table->string('vol_studying');
            $table->string('vol_school');
            $table->string('vol_course');
            $table->string('vol_year_level');
            $table->string('vol_been_volunteer');
            $table->string('vol_been_completed_redcross_seminar')->nullable();
            $table->string('vol_services_like_to_involve');
            $table->string('vol_willing_to_donate_blood');
            $table->string('vol_day_your_free');
            $table->string('vol_time_your_free');
            $table->string('vol_long_intend_in_prc');
            $table->string('vol_where_get_to_know_volunteering');
            $table->string('vol_reason_why_become_volunteer');
            $table->timestamps();
            $table->string('vol_status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_volunteers');
    }
};
