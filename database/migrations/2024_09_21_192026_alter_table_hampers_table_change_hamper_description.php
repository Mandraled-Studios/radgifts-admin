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
        Schema::table('hampers', function (Blueprint $table) {
            $table->string('hamper_description')->nullable()->change();
            $table->string('slug')->nullable()->change();
            $table->string('thumbnail')->nullable()->change();
            $table->string('excerpt')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('hampers', function (Blueprint $table) {
            $table->string('hamper_description')->nullable(false)->change();
            $table->string('slug')->nullable(false)->change();
            $table->string('thumbnail')->nullable(false)->change();
            $table->string('excerpt')->nullable(false)->change();
        });
    }
};
