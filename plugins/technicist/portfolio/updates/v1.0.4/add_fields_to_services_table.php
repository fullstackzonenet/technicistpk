<?php

use Winter\Storm\Database\Schema\Blueprint;
use Winter\Storm\Database\Updates\Migration;
use Winter\Storm\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('technicist_portfolio_services', function (Blueprint $table) {
            $table->string('icon')->nullable();
            $table->string('badge')->nullable();
            $table->string('image')->nullable();
            $table->text('features_json')->nullable(); // JSON array of feature strings
            $table->boolean('featured')->default(false);
            $table->integer('sort_order')->default(0);
            $table->string('url_slug')->nullable();
            // Urdu fields
            $table->string('title_urdu')->nullable();
            $table->text('description_urdu')->nullable();
        });
    }

    public function down()
    {
        Schema::table('technicist_portfolio_services', function (Blueprint $table) {
            $table->dropColumn(['icon','badge','image','features_json','featured','sort_order','url_slug','title_urdu','description_urdu']);
        });
    }
};
