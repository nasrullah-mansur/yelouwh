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
        Schema::create('homepage_galleries', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->string('icon')->default('fas fa-folder');
            $table->string('image')->nullable();
            $table->string('url')->nullable();
            $table->string('badge_text')->nullable();
            $table->enum('badge_type', ['default', 'new', 'free', 'premium', 'hot'])->default('default');
            $table->enum('category_type', ['regular', 'featured'])->default('regular');
            $table->enum('color_scheme', ['popular', 'featured', 'active', 'new', 'free', 'others', 'default'])->default('default');
            $table->integer('sort_order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->json('stats')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('homepage_galleries');
    }
};
