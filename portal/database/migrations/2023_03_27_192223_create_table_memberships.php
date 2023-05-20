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
        Schema::create('table_memberships', function (Blueprint $table) {
            $table->id('mem_id');
            $table->string('mem_id_no')->nullable();
            $table->string('mem_fname');
            $table->string('mem_mname');
            $table->string('mem_lname');
            $table->integer('mem_age');
            $table->string('mem_gender');
            $table->date('mem_birthday');
            $table->string('mem_barangay');
            $table->string('mem_municipal');
            $table->string('mem_zipcode');
            $table->string('mem_blood_type');
            $table->string('mem_contact_no');
            $table->string('mem_email');
            $table->string('mem_payment_method'); 
            $table->string('mem_proof_payment')->nullable(); 
            $table->string('mem_status');
            $table->string('mem_category');
            $table->double('mem_price');
            $table->binary('mem_reason_decline')->nullable();
            $table->string('mem_assisted_by');
            $table->dateTime('mem_start_at');
            $table->dateTime('mem_end_at');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_memberships');
    }
};
