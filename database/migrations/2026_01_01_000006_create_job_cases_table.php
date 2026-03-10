<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('job_cases', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('title');
            $table->string('type'); // Real Estate Acquisition, Property Management, Tax Prep, etc.
            $table->text('description')->nullable();
            $table->string('status')->default('active'); // active, pending, closed
            $table->json('metadata')->nullable(); // For flexible case-specific data
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('job_cases');
    }
};
