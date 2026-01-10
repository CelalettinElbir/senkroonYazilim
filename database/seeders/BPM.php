<?php

namespace Database\Seeders;

use App\Models\Module;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BPM extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Ana modül: BPM İş Süreçleri Yönetimi - Önce var mı kontrol et
        $mainModule = Module::where('slug', 'bpm-is-surecleri-workflow-chatflow')->first();

        if (!$mainModule) {
            $mainModule = Module::create([
                'title' => 'BPM İş Süreçleri Yönetimi',
                'slug' => 'bpm-is-surecleri-workflow-chatflow',
                'short_description' => 'İş süreçleri yönetimi, kullanıcı yetkileri ve süreç otomasyonu ERP modülü',
                'content' => '<p>İşletmenizin iş süreçlerini modelleyin, otomatikleştirin ve optimize edin. Kullanıcı yetki yönetimi, süreç tasarımı ve akış kontrolü ile operasyonel verimliliğinizi artırın.</p>',
                'category' => 'workcube',
                'icon' => 'fas fa-project-diagram',
                'cover_image' => 'modules/bpm-is-surecleri.jpg',
                'is_active' => true,
                'order' => 70
            ]);
            $this->command->info('Ana modül oluşturuldu: ' . $mainModule->title);
        } else {
            $this->command->info('Ana modül zaten mevcut: ' . $mainModule->title);
        }

        // Alt modüller
        $subModules = [
            [
                'title' => 'Kullanıcı Yetki Yönetimi',
                'slug' => 'kullanici-yetki-yonetimi',
                'short_description' => 'Kullanıcı rolleri, yetkilendirme ve erişim kontrolü',
                'content' => '<p>Sistem kullanıcılarının rollerini tanımlayın, yetkileri atayın ve erişim kontrollerini yönetin. Dinamik yetkilendirme, rol tabanlı erişim kontrolü ve güvenlik politikaları ile sisteminizi koruyun.</p>',
                'icon' => 'fas fa-users-cog',
                'cover_image' => 'porto/workcube/bpm/kullanici_yetki.svg',
            ],
            [
                'title' => 'İş Süreçleri',
                'slug' => 'is-surecleri',
                'short_description' => 'Süreç modelleme, akış tasarımı ve iş süreçleri otomasyonu',
                'content' => '<p>İş süreçlerinizi görsel olarak modelleyin, akış diyagramları oluşturun ve otomatik süreçler tasarlayın. BPMN standartları ile uyumlu süreç yönetimi ve performans izleme araçları.</p>',
                'icon' => 'fas fa-sitemap',
                'cover_image' => 'porto/workcube/bpm/is_surecleri.svg',
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
