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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->text('reference')->nullable();
            $table->foreignId('client_id')->constrained();
            $table->foreignId('contact_details_id')->contrained();
            $table->foreignId('position_id')->contstrained();
            $table->text('job_description')->nullable();
            $table->text('keywords')->nullable();
            $table->text('experience')->nullable();
            $table->text('qualification')->nullable();
            $table->string('salary')->nullable();
            $table->text('benefits')->nullable();
            $table->string('fee')->nullable();
            $table->string('country')->nullable();
            $table->string('address')->nullable();
            $table->string('region')->nullable();
            $table->string('province')->nullable();
            $table->string('city')->nullable();
            $table->string('barangay')->nullable();
            $table->string('zipcode')->nullable();
            $table->foreignId('vacancy_type_id')->constrained();
            $table->foreignId('job_status_id')->constrained();
            $table->integer('positions_available');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};
