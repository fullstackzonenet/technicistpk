<?php

use Winter\Storm\Database\Schema\Blueprint;
use Winter\Storm\Database\Updates\Migration;
use Winter\Storm\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('technicist_portfolio_pages', function (Blueprint $table) {
            // Hero section fields
            $table->text('hero_badge')->nullable();
            $table->text('hero_badge_urdu')->nullable();
            $table->text('hero_title')->nullable();
            $table->text('hero_title_urdu')->nullable();
            $table->text('hero_subtitle')->nullable();
            $table->text('hero_subtitle_urdu')->nullable();
            $table->text('hero_video')->nullable();

            // Stats strip
            $table->text('stats_json')->nullable(); // JSON array of stats

            // Section B - About/Intro
            $table->text('intro_badge')->nullable();
            $table->text('intro_badge_urdu')->nullable();
            $table->text('intro_title')->nullable();
            $table->text('intro_title_urdu')->nullable();
            $table->text('intro_text')->nullable();
            $table->text('intro_text_urdu')->nullable();

            // Meta
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();

            // Phone / WhatsApp / Email for contact
            $table->string('phone')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('email')->nullable();
            $table->text('address')->nullable();
            $table->text('address_urdu')->nullable();

            // Generic sections JSON (flexible)
            $table->longText('sections_json')->nullable();
        });
    }

    public function down()
    {
        Schema::table('technicist_portfolio_pages', function (Blueprint $table) {
            $table->dropColumn([
                'hero_badge','hero_badge_urdu','hero_title','hero_title_urdu',
                'hero_subtitle','hero_subtitle_urdu','hero_video',
                'stats_json','intro_badge','intro_badge_urdu',
                'intro_title','intro_title_urdu','intro_text','intro_text_urdu',
                'meta_title','meta_description',
                'phone','whatsapp','email','address','address_urdu',
                'sections_json'
            ]);
        });
    }
};
