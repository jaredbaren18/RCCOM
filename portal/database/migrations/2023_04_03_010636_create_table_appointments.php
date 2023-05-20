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
        Schema::create('table_appointments', function (Blueprint $table) {
            $table->id('app_id');
            $table->integer('user_id')->nullable();
            $table->string('app_fname');
            $table->string('app_mname');
            $table->string('app_lname');
            $table->string('app_age');
            $table->string('app_gender');
            $table->string('app_municipal');
            $table->string('app_barangay');
            $table->string('app_purpose')->nullable();
            $table->string('app_other_reason')->nullable();
            $table->date('app_date');
            $table->string('app_time');
            $table->string('app_status');
            $table->string('app_reason_decline')->nullable();
            $table->string('app_assisted_by')->nullable();
            $table->string('emp_id_no')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_appointments');
    }
};
