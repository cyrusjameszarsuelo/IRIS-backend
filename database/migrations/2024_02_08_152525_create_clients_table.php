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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->foreignId('source_id')->constrained();
            $table->string('company_name')->nullable();
            $table->string('ta')->nullable();
            $table->string('nature_of_business')->nullable();
            $table->string('specialist_area')->nullable();
            $table->foreignId('industry_id')->constrained();
            $table->string('country')->nullable();
            $table->string('address')->nullable();
            $table->string('region')->nullable();
            $table->string('province')->nullable();
            $table->string('city')->nullable();
            $table->string('barangay')->nullable();
            $table->string('zipcode')->nullable();
            $table->string('tel_no')->nullable();
            $table->string('alternate_tel_no')->nullable();
            $table->string('email')->unique();
            $table->string('website')->nullable();
            $table->string('terms_sent')->nullable();
            $table->dateTime('terms_sent_date');
            $table->foreignId('term_receive_id')->constrained();
            $table->dateTime('terms_receive_date');
            $table->text('notes')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
