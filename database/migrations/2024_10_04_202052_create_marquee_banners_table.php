<?php

use App\Models\MarqueeBanner;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('marquee_banners', function (Blueprint $table) {
            $table->string('key')->primary();
            $table->string('label');
            $table->text('value')->nullable();
            $table->json('attributes')->nullable();
            $table->string('type');
            $table->timestamps();
        });

        MarqueeBanner::create([
            'key' => 'banner_bg',
            'label' => 'Banner Background Color',
            'value' => null,
            'type' => 'color',
        ]);

        MarqueeBanner::create([
            'key' => 'banner_text_color',
            'label' => 'Banner Text Color',
            'value' => null,
            'type' => 'color',
        ]);

        MarqueeBanner::create([
            'key' => 'banner_text',
            'label' => 'Banner Text',
            'value' => 'Strengthening Connections',
            'type' => 'text',
        ]);

        MarqueeBanner::create([
            'key' => 'banner_cta_label',
            'label' => 'Banner CTA Label',
            'value' => null,
            'type' => 'text',
        ]);

        MarqueeBanner::create([
            'key' => 'banner_cta_url',
            'label' => 'Banner CTA URL',
            'value' => null,
            'type' => 'text',
        ]);

        MarqueeBanner::create([
            'key' => 'banner_cta_style',
            'label' => 'Banner CTA Style',
            'value' => 'transparent_white',
            'type' => 'select',
            'attributes' => [
                'options' => [
                    'hidden' => 'Hidden',
                    'transparent_white' => 'Transparent BG, White Border & Text',
                    'white_bg_purple_text' => 'White BG, Purple Text',
                    'purple_bg_white_text' => 'Purple BG, White Text',
                    'white_bg_teal_text' => 'White BG, Teal Text',
                    'teal_bg_white_text' => 'Teal BG, White Text',
                    'white_text_underline' => 'White Text, with underline',
                    'purple_text_underline' => 'Purple Text, with underline',
                    'teal_text_underline' => 'Teal Text, with underline',
                ],
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('marquee_banners');
    }
};
