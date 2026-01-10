<?php

namespace Database\Seeders;

use App\Models\Module;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SUBO extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Ana modül: SUBO Abonelik Yönetimi - Önce var mı kontrol et
        $mainModule = Module::where('slug', 'abonelik-yonetimi')->first();

        if (!$mainModule) {
            $mainModule = Module::create([
                'title' => 'SUBO Abonelik Yönetimi',
                'slug' => 'abonelik-yonetimi',
                'short_description' => 'Abonelik tabanlı iş modellerini yönetmek için kapsamlı ERP modülü',
                'content' => '<p>Abonelik tabanlı işletmenizi yönetin. Abone yönetimi, faturalama, ödeme takibi ve fiziki varlık yönetimi ile subscription business modelinizi optimize edin.</p>',
                'category' => 'workcube',
                'icon' => 'fas fa-user-circle',
                'cover_image' => 'modules/abonelik-yonetimi.jpg',
                'is_active' => true,
                'order' => 80
            ]);
            $this->command->info('Ana modül oluşturuldu: ' . $mainModule->title);
        } else {
            $this->command->info('Ana modül zaten mevcut: ' . $mainModule->title);
        }

        // Alt modüller
        $subModules = [
            [
                'title' => 'Aboneler',
                'slug' => 'aboneler',
                'short_description' => 'Abone kayıtları, profil yönetimi ve abonelik takibi',
                'content' => '<p>Abonelerinizi kapsamlı bir şekilde yönetin. Abone kayıtları, profil bilgileri, abonelik planları ve müşteri ilişkileri yönetimi ile abone memnuniyetini artırın.</p>',
                'icon' => 'fas fa-users',
                'cover_image' => 'porto/workcube/subo/aboneler.svg',
            ],
            [
                'title' => 'Fatura',
                'slug' => 'fatura-subo',
                'short_description' => 'Abonelik faturaları, otomatik faturalama ve ödeme takibi',
                'content' => '<p>Abonelik faturalarınızı otomatik olarak oluşturun ve yönetin. Periyodik faturalama, ödeme takibi, gecikme uyarıları ve fatura özelleştirme seçenekleri.</p>',
                'icon' => 'fas fa-file-invoice-dollar',
                'cover_image' => 'porto/workcube/subo/fatura.svg',
            ],
            [
                'title' => 'Banka',
                'slug' => 'banka-subo',
                'short_description' => 'Ödeme işlemleri, banka entegrasyonu ve finansal takip',
                'content' => '<p>Abonelik ödemelerini yönetin ve takip edin. Banka entegrasyonları, otomatik ödeme alma, ödeme gecikmesi takibi ve finansal raporlama araçları.</p>',
                'icon' => 'fas fa-university',
                'cover_image' => 'porto/workcube/subo/banka.svg',
            ],
            [
                'title' => 'Fiziki Varlıklar',
                'slug' => 'fiziki-varliklar',
                'short_description' => 'Ekipman yönetimi, varlık takibi ve bakım planlaması',
                'content' => '<p>Abonelere sağlanan fiziki varlıkları yönetin. Ekipman envanteri, varlık takibi, bakım planlaması, arıza kayıtları ve değişim süreçlerini koordine edin.</p>',
                'icon' => 'fas fa-boxes',
                'cover_image' => 'porto/workcube/subo/fikizivarlıklar.svg',
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
