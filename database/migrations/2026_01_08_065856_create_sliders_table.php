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
        Schema::create('sliders', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();                      // Ana başlık (örn: "WEB DESIGN?")
            $table->string('subtitle')->nullable();       // Alt başlık (örn: "DO YOU NEED A NEW")
            $table->text('description')->nullable();      // Açıklama metni
            $table->string('background_image');           // Arka plan resmi yolu
            $table->string('button_text')->nullable();    // Buton metni
            $table->string('button_link')->nullable();    // Buton linki
            $table->integer('order')->default(0);         // Sıralama
            $table->boolean('is_active')->default(true);  // Aktif/pasif durumu
            $table->integer('animation_delay')->default(100); // Animasyon gecikmesi (ms)
            $table->string('overlay_class')->default('overlay-op-8'); // Overlay sınıfı
            $table->string('text_position')->default('center'); // Metin pozisyonu (center, left, right)
            $table->string('text_color')->default('text-color-light'); // Metin rengi sınıfı
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sliders');
    }
};
