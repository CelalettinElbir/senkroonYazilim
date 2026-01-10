<?php

namespace Database\Seeders;

use App\Models\Module;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class uretim extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Ana modül: Üretim Planlama - Önce var mı kontrol et
        $mainModule = Module::where('slug', 'uretim-planlama-mrp-erp-mm')->first();

        if (!$mainModule) {
            $mainModule = Module::create([
                'title' => 'Üretim Planlama',
                'slug' => 'uretim-planlama-mrp-erp-mm',
                'short_description' => 'Üretim süreçleri, malzeme ihtiyaç planlama ve üretim yönetimi ERP modülü',
                'content' => '<p>İşletmenizin tüm üretim süreçlerini planlayın ve yönetin. Malzeme ihtiyaç planlamadan üretim kontrolüne, kalite yönetiminden geri dönüşüm süreçlerine kadar tüm operasyonlarınızı optimize edin.</p>',
                'category' => 'workcube',
                'icon' => 'fas fa-industry',
                'cover_image' => 'modules/uretim-planlama.jpg',
                'is_active' => true,
                'order' => 30
            ]);
            $this->command->info('Ana modül oluşturuldu: ' . $mainModule->title);
        } else {
            $this->command->info('Ana modül zaten mevcut: ' . $mainModule->title);
        }

        // Alt modüller
        $subModules = [
            [
                'title' => 'Üretim Tasarımı',
                'slug' => 'uretim-tasarimi',
                'short_description' => 'Ürün tasarımı, CAD entegrasyonu, teknik çizim ve prototip geliştirme',
                'content' => '<p>Ürün tasarım süreçlerinizi yönetin, CAD sistemleriyle entegrasyon sağlayın, teknik çizimleri organize edin ve prototip geliştirme süreçlerinizi takip edin.</p>',
                'icon' => 'fas fa-drafting-compass',
                'cover_image' => 'porto/workcube/uretim/uretim_tasarımı.svg',
            ],
            [
                'title' => 'Üretim Planlama',
                'slug' => 'uretim-planlama',
                'short_description' => 'Üretim programlama, kapasite planlama ve MRP süreçleri',
                'content' => '<p>Üretim planlarınızı oluşturun, makine ve işgücü kapasitelerini optimize edin, malzeme ihtiyaç planlaması yapın ve üretim programınızı verimli bir şekilde yönetin.</p>',
                'icon' => 'fas fa-calendar-alt',
                'cover_image' => 'porto/workcube/uretim/uretim_planlama.svg',
            ],
            [
                'title' => 'Üretim Yönetimi',
                'slug' => 'uretim-yonetimi',
                'short_description' => 'Üretim takibi, iş emri yönetimi ve operasyon kontrolü',
                'content' => '<p>Üretim süreçlerinizi gerçek zamanlı takip edin, iş emirlerini yönetin, operasyon verimliliğini analiz edin ve üretim performansınızı optimize edin.</p>',
                'icon' => 'fas fa-cogs',
                'cover_image' => 'porto/workcube/uretim/uretim yonetimi.svg',
            ],
            [
                'title' => 'Geri Dönüşüm',
                'slug' => 'geri-donusum',
                'short_description' => 'Atık yönetimi, geri dönüşüm süreçleri ve çevre uyumluluk',
                'content' => '<p>Üretim atıklarınızı yönetin, geri dönüşüm süreçlerini organize edin, çevre mevzuatına uyumu sağlayın ve sürdürülebilir üretim stratejilerinizi geliştirin.</p>',
                'icon' => 'fas fa-recycle',
                'cover_image' => 'porto/workcube/uretim/geri_donuşum.svg',
            ],
        ];

        $created = 0;
        $skipped = 0;

        foreach ($subModules as $index => $subModuleData) {
            // Alt modülün zaten var olup olmadığını kontrol et
            $existingSubModule = Module::where('slug', $subModuleData['slug'])
                ->where('parent_id', $mainModule->id)
                ->first();

            if (!$existingSubModule) {
                Module::create([
                    'parent_id' => $mainModule->id,
                    'title' => $subModuleData['title'],
                    'slug' => $subModuleData['slug'],
                    'short_description' => $subModuleData['short_description'],
                    'content' => $subModuleData['content'],
                    'category' => 'workcube',
                    'icon' => $subModuleData['icon'],
                    'cover_image' => $subModuleData['cover_image'],
                    'is_active' => true,
                    'order' => $index + 1
                ]);
                $created++;
            } else {
                $skipped++;
            }
        }

        $this->command->info('Alt modül oluşturma tamamlandı!');
        $this->command->info('Oluşturulan alt modül sayısı: ' . $created);
        $this->command->info('Zaten mevcut olan alt modül sayısı: ' . $skipped);
        $this->command->info('Toplam alt modül sayısı: ' . count($subModules));
    }
}
