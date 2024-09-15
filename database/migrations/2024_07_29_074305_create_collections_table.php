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
        Schema::disableForeignKeyConstraints();

        Schema::create('collections', function (Blueprint $table) {
            $table->id();
            $table->string('title', 128);
            $table->string('excerpt', 255);
            $table->text('collection_description');
            $table->string('thumbnail')->default('images/default-collection-image.jpg');
            $table->string('seo_title', 128)->nullable();
            $table->string('meta_description', 255)->nullable();
            $table->string('slug', 128);
            $table->boolean('is_active')->default(false);
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('collections');
    }
};
