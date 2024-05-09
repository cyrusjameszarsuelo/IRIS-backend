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
        Schema::create('candidates', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->contrained();
            $table->foreignId('source_id')->contrained();
            $table->string('result')->default('0');
            $table->foreignId('gender')->contrained();
            $table->foreignId('education_id')->constrained();
            $table->foreignId('license_id')->constrained();
            $table->foreignId('employment_status_id')->constrained();
            $table->foreignId('current_salary_id')->constrained();
            $table->text('candidate_cv');
            $table->text('raw_cv');
            $table->text('admin_cv');
            $table->foreign('user_id', 'created_by')->references('id')->on('users');
            $table->foreign('user_id', 'updated_by')->references('id')->on('users');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('candidates');
    }
};
