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
        Schema::create('seos', function (Blueprint $table) {
            $table->id();
            $table->string('page')->unique();     // home, about, service-details
            $table->string('title');
            $table->text('description')->nullable()->default(null);
            $table->text('keywords')->nullable()->default(null);
            $table->string('canonical')->nullable()->default(null);
            $table->string('og_title')->nullable()->default(null);
            $table->text('og_description')->nullable()->default(null);
            $table->string('og_image')->nullable()->default(null);
            $table->boolean('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seos');
    }
};
