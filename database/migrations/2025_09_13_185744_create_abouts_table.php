<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('headline')->nullable(); // Ex: "Full Stack Dev | Laravel + Vue"
            $table->longText('bio')->nullable();
            $table->string('profile_picture')->nullable();
            $table->json('social_links')->nullable(); // ex: {"github":"url", "linkedin":"url"}
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};
