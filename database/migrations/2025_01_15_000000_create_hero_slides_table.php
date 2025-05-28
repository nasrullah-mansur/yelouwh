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
        Schema::create('hero_slides', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('subtitle')->nullable();
            $table->text('description');
            $table->string('background_image');
            $table->string('hero_image')->nullable();
            $table->string('badge_icon')->default('fas fa-star');
            $table->string('badge_text');
            $table->string('primary_button_text');
            $table->string('primary_button_url');
            $table->string('primary_button_icon')->default('fas fa-rocket');
            $table->string('secondary_button_text');
            $table->string('secondary_button_url');
            $table->string('secondary_button_icon')->default('fas fa-play');
            $table->json('stats')->nullable(); // For stats like 50K+ creators
            $table->json('features')->nullable(); // For feature lists in slide 2
            $table->json('testimonial')->nullable(); // For testimonial in slide 3
            $table->integer('sort_order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hero_slides');
    }
}; 