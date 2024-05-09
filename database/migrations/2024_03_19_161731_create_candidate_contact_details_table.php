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
        Schema::create('candidate_contact_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('candidate_id')->constrained();
            $table->foreignId('salutation_id')->constrained();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('nickname')->nullable();
            $table->date('date_of_birth');
            $table->string('nationality')->nullable();
            $table->string('country')->nullable();
            $table->string('address')->nullable();
            $table->string('region')->nullable();
            $table->string('province')->nullable();
            $table->string('city')->nullable();
            $table->string('barangay')->nullable();
            $table->string('zipcode')->nullable();
            $table->string('tel_no')->nullable();
            $table->string('alternate_mobile_no')->nullable();
            $table->string('mobile_no')->nullable();
            $table->string('email')->nullable();
            $table->string('alternate_email')->nullable();
            $table->string('preferred_position_1');
            $table->string('preferred_position_2')->nullable();
            $table->string('preferred_position_3')->nullable();
            $table->string('preferred_location_4');
            $table->string('preferred_location_5')->nullable();
            $table->string('preferred_location_6')->nullable();
            $table->string('minimun_salary_sought');
            $table->string('notice_required');
            $table->string('notes')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('candidate_contact_details');
    }
};
