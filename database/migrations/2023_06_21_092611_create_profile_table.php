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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('image_path')->nullable();
            $table->string('firstname');
            $table->string('lastname');
            $table->date('date');
            $table->string('phone');
            $table->string('address');
            $table->string('designation');
            $table->integer('age');
            $table->string('gender');
            $table->text('aboutme');
            $table->string('title');
            $table->string('degree');
            $table->string('institute');
            $table->string('year');
            // Add more columns as per your requirements

            $table->timestamps();
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profile');
    }
};
