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
        Schema::create('company_details', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable(false);
            $table->string('tagline')->nullable(false);
            $table->string('category')->nullable(false);
            $table->string('ownername')->nullable(false);
            $table->string('location')->nullable(false);
            $table->date('established')->nullable(false);
            $table->string('mobile')->nullable(false)->unique();
            $table->string('landline')->nullable(false);
            $table->string('email')->nullable(false)->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('CompanyDetails');
    }
};
