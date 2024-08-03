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
        Schema::create('hampers', function (Blueprint $table) {
            $table->id();
            $table->string('title', 128);
            $table->string('excerpt', 255);
            $table->text('hamper_description');
            $table->string('thumbnail')->default('images/default-product-image.jpg');
            $table->decimal('usual_price', 8, 2)->nullable();
            $table->decimal('offer_price', 8, 2)->nullable();
            $table->boolean('corporate_hamper_flag')->default(true);
            $table->string('seo_title', 128)->nullable();
            $table->string('meta_description', 255)->nullable();
            $table->string('slug', 128);
            $table->boolean('is_active')->default(false);
            $table->boolean('has_variants')->default(false);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hampers');
    }
};
