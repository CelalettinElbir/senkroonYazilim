<?php

namespace Database\Seeders;

use App\Models\Module;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Crm extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Ana modül: CRM Müşteri İlişkileri Yönetimi - Önce var mı kontrol et
        $mainModule = Module::where('slug', 'crm-musteri-iliskileri-yonetimi')->first();

        if (!$mainModule) {
            $mainModule = Module::create([
                'title' => 'CRM Müşteri İlişkileri Yönetimi',
                'slug' => 'crm-musteri-iliskileri-yonetimi',
                'short_description' => 'Müşteri ilişkileri yönetimi, satış süreçleri ve pazarlama otomasyonu ERP modülü',
                'content' => '<p>İşletmenizin müşteri ilişkilerini yönetin ve güçlendirin. Potansiyel müşterilerden satış süreçlerine, pazarlama kampanyalarından servis hizmetlerine kadar tüm CRM operasyonlarınızı tek platformda koordine edin.</p>',
                'category' => 'workcube',
                'icon' => 'fas fa-handshake',
                'cover_image' => 'modules/crm-musteri-iliskileri.jpg',
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
                'title' => 'Kontakt',
                'slug' => 'kontakt',
                'short_description' => 'Müşteri ve potansiyel müşteri bilgileri, iletişim yönetimi',
                'content' => '<p>Müşteri ve potansiyel müşteri veritabanınızı yönetin. İletişim bilgilerini güncelleyin, müşteri segmentasyonu yapın ve müşteri etkileşim geçmişini detaylı olarak takip edin.</p>',
                'icon' => 'fas fa-address-book',
                'cover_image' => 'porto/workcube/crm/kontakt.svg',
            ],
            [
                'title' => 'Pazarlama',
                'slug' => 'pazarlama',
                'short_description' => 'Pazarlama kampanyaları, e-mail marketing ve dijital pazarlama',
                'content' => '<p>Pazarlama kampanyalarınızı planlayın ve yönetin. E-mail marketing, sosyal medya pazarlama ve dijital reklam kampanyalarını koordine edin. Kampanya performansını analiz edin.</p>',
                'icon' => 'fas fa-bullhorn',
                'cover_image' => 'porto/workcube/crm/pazarlama.svg',
            ],
            [
                'title' => 'Fırsat & Teklif Yönetimi',
                'slug' => 'firsat-teklif-yonetimi',
                'short_description' => 'Satış fırsatları, teklif hazırlama ve satış süreç yönetimi',
                'content' => '<p>Satış fırsatlarını takip edin, profesyonel teklifler hazırlayın ve satış süreçlerinizi sistematik olarak yönetin. Fırsat değerlendirme ve teklif onay süreçlerini otomatikleştirin.</p>',
                'icon' => 'fas fa-chart-line',
                'cover_image' => 'porto/workcube/crm/firsat_teklif.svg',
            ],
            [
                'title' => 'Satış Gücü Planlama',
                'slug' => 'satis-gucu-planlama',
                'short_description' => 'Satış ekibi yönetimi, hedef belirleme ve performans takibi',
                'content' => '<p>Satış ekibinizi organize edin, satış hedeflerini belirleyin ve performansları takip edin. Satış rotalarını planlayın ve satış temsilcilerinin etkinliğini artırın.</p>',
                'icon' => 'fas fa-users-cog',
                'cover_image' => 'porto/workcube/crm/satis_guvu.svg',
            ],
            [
                'title' => 'Call Center',
                'slug' => 'call-center',
                'short_description' => 'Çağrı merkezi yönetimi, telefon sistemi entegrasyonu ve müşteri hizmetleri',
                'content' => '<p>Çağrı merkezi operasyonlarınızı yönetin, telefon sistemiyle entegrasyon sağlayın ve müşteri hizmetleri kalitesini artırın. Çağrı raporları ve performans metrikleri takip edin.</p>',
                'icon' => 'fas fa-headset',
                'cover_image' => 'porto/workcube/crm/call_center.svg',
            ],
            [
                'title' => 'Servis',
                'slug' => 'servis',
                'short_description' => 'Müşteri hizmetleri, destek talepleri ve servis yönetimi',
                'content' => '<p>Müşteri servis taleplerini yönetin, destek biletleri oluşturun ve müşteri memnuniyetini artırın. Servis süreçlerini takip edin ve müşteri geri bildirimlerini değerlendirin.</p>',
                'icon' => 'fas fa-tools',
                'cover_image' => 'porto/workcube/crm/servis.svg',
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
