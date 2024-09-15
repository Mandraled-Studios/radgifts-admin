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
            Schema::dropIfExists('corporate_hamper_flag');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('hampers', function (Blueprint $table) {
            $table->boolean('corporate_hamper_flag')->default(true);
        });
    }
};