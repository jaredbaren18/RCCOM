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
        Schema::create('table_donations', function (Blueprint $table) {
            $table->id('don_id');
            $table->string('don_fname');
            $table->string('don_mname');
            $table->string('don_lname');
            $table->integer('don_age');
            $table->string('don_gender');
            $table->string('don_municipal');
            $table->string('don_barangay');
            $table->string('don_method');
            $table->double('don_amount');
            $table->string('don_proof');
            $table->string('don_status');
            $table->string('don_email');
            $table->string('don_notes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_donations');
    }
};
