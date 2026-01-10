<?php

namespace Database\Seeders;

use App\Models\Module;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PMS extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mainModule = Module::where('slug', 'proje-yonetim-sistemi')->first();

        if (!$mainModule) {
            $mainModule = Module::create([
                'title' => 'Proje Yönetim Sistemi',
                'slug' => 'proje-yonetim-sistemi',
                'short_description' => 'Proje yönetimi, görev takibi ve kaynak planlaması ERP modülü',
                'content' => '<p>Projelerinizi etkili bir şekilde yönetin. Görev atamaları, zaman takibi, kaynak planlaması ve proje ilerleme raporları ile tüm proje süreçlerinizi tek platformda kontrol edin.</p>',
                'category' => 'workcube',
                'icon' => 'fas fa-tasks',
                'cover_image' => 'modules/proje-yonetim-sistemi.jpg',
                'is_active' => true,
                'order' => 50
            ]);
            $this->command->info('Ana modül oluşturuldu: ' . $mainModule->title);
        } else {
            $this->command->info('Ana modül zaten mevcut: ' . $mainModule->title);
        }


        // Alt modüller
        $subModules = [
            [
                'title' => 'Proje Yönetimi',
                'slug' => 'proje-yonetimi',
                'short_description' => 'Proje planlama, görev yönetimi ve ilerleme takibi',
                'content' => '<p>Projelerinizi detaylı olarak planlayın ve yönetin. Görevleri atayın, proje zamanlamalarını oluşturun, milestone\'ları belirleyin ve proje ilerlemesini gerçek zamanlı takip edin.</p>',
                'icon' => 'fas fa-project-diagram',
                'cover_image' => 'porto/workcube/PMS/proje_yonetimi.svg',
            ],
            [
                'title' => 'Dijital Arşiv',
                'slug' => 'dijital-arsiv',
                'short_description' => 'Doküman yönetimi, dosya arşivleme ve dijital depolama',
                'content' => '<p>Tüm proje dokümanlarınızı dijital ortamda güvenli bir şekilde saklayın ve yönetin. Dosya versiyonlaması, erişim kontrolü ve arama özellikleri ile dokümanlarınızı organize edin.</p>',
                'icon' => 'fas fa-archive',
                'cover_image' => 'porto/workcube/PMS/dijital_arsiv.svg',
            ],
            [
                'title' => 'İletişim',
                'slug' => 'iletisim',
                'short_description' => 'Takım iletişimi, mesajlaşma ve bildirim sistemi',
                'content' => '<p>Proje ekipleri arasında etkili iletişim kurun. Anlık mesajlaşma, bildirim sistemi ve takım forumları ile iletişim süreçlerinizi güçlendirin.</p>',
                'icon' => 'fas fa-comments',
                'cover_image' => 'porto/workcube/PMS/iletisim.svg',
            ],
            [
                'title' => 'İçerik Yönetimi',
                'slug' => 'icerik-yonetimi',
                'short_description' => 'İçerik oluşturma, düzenleme ve yayınlama sistemi',
                'content' => '<p>Proje içeriklerinizi oluşturun, düzenleyin ve paylaşın. İçerik editörü, onay süreçleri ve yayınlama akışları ile içerik yönetim süreçlerinizi optimize edin.</p>',
                'icon' => 'fas fa-edit',
                'cover_image' => 'porto/workcube/PMS/icerik_yonetim.svg',
            ],
            [
                'title' => 'Çalışan',
                'slug' => 'calisan',
                'short_description' => 'Proje ekibi yönetimi, rol atama ve performans takibi',
                'content' => '<p>Proje ekibinizi organize edin, rolleri tanımlayın ve çalışan performansını takip edin. Kaynak planlaması, iş yükü dağılımı ve ekip yönetimi araçları ile verimliliği artırın.</p>',
                'icon' => 'fas fa-user-friends',
                'cover_image' => 'porto/workcube/PMS/calisan_bilgileri.svg',
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
