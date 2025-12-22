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
        Schema::create('modules', function (Blueprint $table) {
            $table->id();
             $table->string('title');                     // Modül adı
            $table->string('slug')->unique();            // SEO URL
            $table->string('short_description', 500);    // Liste sayfası
            $table->longText('content')->nullable();     // Detay içeriği (HTML)

            $table->string('icon')->nullable();          // FontAwesome / svg
            $table->string('cover_image')->nullable();   // Detay kapak görseli

            // SEO
            $table->string('meta_title')->nullable();
            $table->string('meta_description', 255)->nullable();

            // Kontrol
            $table->boolean('is_active')->default(true);
            $table->integer('order')->default(0);


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('modules');
    }
};
