<?php

namespace Database\Seeders;

use App\Models\Module;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BI extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mainModule = Module::where('slug', 'bi-analiz-ve-raporlama')->first();

        if (!$mainModule) {
            $mainModule = Module::create([
                'title' => 'BI Analiz ve Raporlama',
                'slug' => 'bi-analiz-ve-raporlama',
                'short_description' => 'İş zekası, analiz ve raporlama çözümleri.',
                'content' => '<p>Verilerinizi anlamlı bilgilere dönüştürerek karar alma süreçlerinizi güçlendirin. Gelişmiş analiz araçları, interaktif dashboardlar ve özelleştirilebilir raporlar ile iş performansınızı izleyin.</p>',
                'category' => 'workcube',
                'icon' => 'fas fa-chart-pie',
                'cover_image' => 'modules/bi-analiz-raporlama.jpg',
                'is_active' => true,
                'order' => 80
            ]);
            $this->command->info('Ana modül oluşturuldu: ' . $mainModule->title);
        } else {
            $this->command->info('Ana modül zaten mevcut: ' . $mainModule->title);
        }

        $subModules = [
            [
                'title' => 'Rapor Tasarımcısı',
                'icon' => 'fas fa-drafting-compass',
                'short_description' => 'Özelleştirilebilir raporlar oluşturun.',
                'content' => '<p>Sürükle-bırak arayüzü ile kendi raporlarınızı tasarlayın, veri kaynaklarınızı seçin ve raporlarınızı zamanlayın.</p>',
                'cover_image' => 'porto/wor/bi/rapor-tasarimcisi.svg'
            ],
            [
                'title' => 'Balance Score Card Rapor Şablonları',
                'icon' => 'fas fa-balance-scale',
                'short_description' => 'Stratejik hedeflerinizi izleyin.',
                'content' => '<p>Kurumsal performansınızı finansal, müşteri, iç süreçler ve öğrenme-gelişim boyutlarıyla ölçün.</p>',
                'cover_image' => 'porto/workcube/bi/balance-score-card.svg'
            ],
            [
                'title' => 'Hazır Raporlar',
                'icon' => 'fas fa-file-alt',
                'short_description' => 'Kullanıma hazır rapor şablonları.',
                'content' => '<p>Satış, finans, envanter ve daha birçok alanda önceden hazırlanmış raporlara anında erişin.</p>',
                'cover_image' => 'porto/workcube/bi/hazir-raporlar.svg'
            ],
            [
                'title' => 'Apache Superset Entegrasyon',
                'icon' => 'fas fa-chart-bar',
                'short_description' => 'Gelişmiş veri görselleştirme.',
                'content' => '<p>Apache Superset entegrasyonu ile verilerinizi interaktif ve zengin görselleştirmelerle analiz edin.</p>',
                'cover_image' => 'porto/workcube/bi/apache-superset.svg'
            ],
        ];

        $created = 0;
        $skipped = 0;

        foreach ($subModules as $index => $subModuleData) {
            $slug = Str::slug($subModuleData['title']);
            $existingSubModule = Module::where('slug', $slug)
                ->where('parent_id', $mainModule->id)
                ->first();

            if (!$existingSubModule) {
                Module::create([
                    'parent_id' => $mainModule->id,
                    'title' => $subModuleData['title'],
                    'slug' => $slug,
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
