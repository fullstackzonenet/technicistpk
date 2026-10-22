<?php

use Winter\Storm\Database\Schema\Blueprint;
use Winter\Storm\Database\Updates\Migration;
use Winter\Storm\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('technicist_portfolio_projects', function (Blueprint $table) {
            $table->string('client')->nullable();
            $table->string('location')->nullable();
            $table->string('year')->nullable();
            $table->string('image')->nullable();
            $table->string('badge')->nullable();
            $table->text('features_json')->nullable(); // JSON array
            $table->boolean('featured')->default(false);
            $table->integer('sort_order')->default(0);
        });
    }

    public function down()
    {
        Schema::table('technicist_portfolio_projects', function (Blueprint $table) {
            $table->dropColumn(['client','location','year','image','badge','features_json','featured','sort_order']);
        });
    }
};
