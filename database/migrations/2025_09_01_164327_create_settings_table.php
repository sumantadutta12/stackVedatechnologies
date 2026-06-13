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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('site_name');
            $table->string('location');
            $table->string('mobile');
            $table->string('email');
            $table->string('facebook_url')->nullable()->default(null);
            $table->string('x_url')->nullable()->default(null);
            $table->string('youtube_url')->nullable()->default(null);
            $table->string('linkdin_url')->nullable()->default(null);
            $table->longText('short_description')->nullable()->default(null);
            $table->string('mobile_2')->nullable()->default(null);
            $table->string('mobile_3')->nullable()->default(null);
            $table->string('email_2')->nullable()->default(null);
            $table->string('email_3')->nullable()->default(null);
            $table->string('instagram_url')->nullable()->default(null);
            $table->string('office_time')->nullable()->default(null);
            $table->longText('map_link')->nullable()->default(null);
            $table->string('logo')->nullable()->default(null);
            $table->string('favicon')->nullable()->default(null);
            $table->string('inverted_logo')->nullable()->default(null);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
