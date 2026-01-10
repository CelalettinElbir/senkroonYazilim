<?php

namespace Database\Seeders;

use App\Models\Module;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Fab_Seeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Ana modül: Finans ve Muhasebe - Önce var mı kontrol et
        $mainModule = Module::where('slug', 'finans-muhasebe-butce-yonetimi')->first();

        if (!$mainModule) {
            $mainModule = Module::create([
                'title' => 'Finans ve Muhasebe',
                'slug' => 'finans-muhasebe-butce-yonetimi',
                'short_description' => 'Finansal işlemler, muhasebe kayıtları ve bütçe yönetimi süreçlerini kapsayan ERP modülü',
                'content' => '<p>İşletmenizin tüm finansal süreçlerini yönetin. Nakit akışı takibinden muhasebe kayıtlarına, borç-alacak yönetiminden mali tablolara kadar tüm finansal operasyonlarınızı tek platformda kontrol edin.</p>',
                'category' => 'workcube',
                'icon' => 'fas fa-calculator',
                'cover_image' => 'modules/finans-muhasebe.jpg',
                'is_active' => true,
                'order' => 20
            ]);
            $this->command->info('Ana modül oluşturuldu: ' . $mainModule->title);
        } else {
            $this->command->info('Ana modül zaten mevcut: ' . $mainModule->title);
        }

        // Alt modüller
        $subModules = [
            [
                'title' => 'Banka',
                'slug' => 'banka',
                'short_description' => 'Banka hesapları yönetimi, virman işlemleri ve banka mutabakatı',
                'content' => '<p>Banka hesaplarınızı yönetin, virman işlemlerini takip edin, banka ekstrelerini içe aktarın ve otomatik mutabakat gerçekleştirin.</p>',
                'icon' => 'fas fa-university',
                'cover_image' => 'porto/workcube/finans-muhasebe-butce-yonetimi/banka.svg',
            ],
            [
                'title' => 'Cari',
                'slug' => 'cari',
                'short_description' => 'Cari hesap yönetimi, müşteri-tedarikçi bakiyeleri ve yaşlandırma',
                'content' => '<p>Cari hesaplarınızı detaylı olarak takip edin, müşteri ve tedarikçi bakiyelerini yönetin, yaşlandırma raporları alın.</p>',
                'icon' => 'fas fa-address-book',
                'cover_image' => 'porto/workcube/finans-muhasebe-butce-yonetimi/cari.svg',
            ],
            [
                'title' => 'Kasa',
                'slug' => 'kasa',
                'short_description' => 'Nakit kasa yönetimi, giriş-çıkış işlemleri ve kasa sayımı',
                'content' => '<p>Nakit kasa işlemlerinizi kaydedin, giriş-çıkış hareketlerini takip edin ve günlük kasa sayım işlemlerini gerçekleştirin.</p>',
                'icon' => 'fas fa-cash-register',
                'cover_image' => 'porto/workcube/finans-muhasebe-butce-yonetimi/kasa.svg',
            ],
            [
                'title' => 'Çek-Senet',
                'slug' => 'cek-senet',
                'short_description' => 'Çek ve senet takibi, vade yönetimi ve tahsilat süreçleri',
                'content' => '<p>Müşteri ve tedarikçi çek-senetlerini yönetin, vade takibi yapın ve tahsilat süreçlerinizi otomatikleştirin.</p>',
                'icon' => 'fas fa-money-check',
                'cover_image' => 'porto/workcube/finans-muhasebe-butce-yonetimi/çek.svg',
            ],
            [
                'title' => 'Masraf ve Gelir İşlemleri',
                'slug' => 'masraf-gelir',
                'short_description' => 'Gider-gelir kaydı, masraf merkezi takibi ve bütçe kontrolü',
                'content' => '<p>Şirket giderlerinizi ve gelirlerinizi kategorize edin, masraf merkezleri bazında takip yapın ve bütçe kontrolünüzü sağlayın.</p>',
                'icon' => 'fas fa-chart-pie',
                'cover_image' => 'porto/workcube/finans-muhasebe-butce-yonetimi/masraf.svg',
            ],
            [
                'title' => 'Borç-Alacak Yönetimi',
                'slug' => 'borc-alacak',
                'short_description' => 'Borç ve alacak takibi, ödeme planlaması ve risk analizi',
                'content' => '<p>Borç ve alacaklarınızı sistematik olarak takip edin, ödeme planlaması yapın ve finansal riskinizi analiz edin.</p>',
                'icon' => 'fas fa-balance-scale',
                'cover_image' => 'porto/workcube/finans-muhasebe-butce-yonetimi/borç.svg',
            ],
            [
                'title' => 'Nakit Yönetimi',
                'slug' => 'nakit-yonetimi',
                'short_description' => 'Nakit akış projeksiyonu, likidite yönetimi ve finansal planlama',
                'content' => '<p>Nakit akışınızı proje edin, likidite durumunuzu analiz edin ve finansal planlamanızı optimize edin.</p>',
                'icon' => 'fas fa-coins',
                'cover_image' => 'porto/workcube/finans-muhasebe-butce-yonetimi/nakit.svg',
            ],
            [
                'title' => 'Risk ve Teminat',
                'slug' => 'risk-teminat',
                'short_description' => 'Finansal risk değerlendirmesi, teminat yönetimi ve sigorta takibi',
                'content' => '<p>Finansal risklerinizi değerlendirin, teminat işlemlerinizi yönetin ve sigorta poliçelerinizi takip edin.</p>',
                'icon' => 'fas fa-shield-alt',
                'cover_image' => 'porto/workcube/finans-muhasebe-butce-yonetimi/risk.svg',
            ],
            [
                'title' => 'Krediler',
                'slug' => 'krediler',
                'short_description' => 'Kredi yönetimi, faiz hesaplama ve geri ödeme takibi',
                'content' => '<p>Kredi işlemlerinizi yönetin, faiz hesaplamalarını otomatikleştirin ve geri ödeme planlarınızı takip edin.</p>',
                'icon' => 'fas fa-hand-holding-usd',
                'cover_image' => 'porto/workcube/finans-muhasebe-butce-yonetimi/krediler.svg',
            ],
            [
                'title' => 'Muhasebe İşlemleri',
                'slug' => 'muhasebe-islemleri',
                'short_description' => 'Günlük muhasebe kayıtları, yevmiye defterleri ve hesap hareketleri',
                'content' => '<p>Günlük muhasebe işlemlerinizi kaydedin, yevmiye defterlerini tutun ve hesap hareketlerinizi detaylı takip edin.</p>',
                'icon' => 'fas fa-book',
                'cover_image' => 'porto/workcube/finans-muhasebe-butce-yonetimi/muhasebe.svg',
            ],
            [
                'title' => 'Muhasebe Tabloları',
                'slug' => 'muhasebe-tablolari',
                'short_description' => 'Bilanço, gelir tablosu ve finansal raporlar',
                'content' => '<p>Bilanço ve gelir tablolarınızı otomatik oluşturun, finansal raporlarınızı düzenleyin ve analiz edin.</p>',
                'icon' => 'fas fa-table',
                'cover_image' => 'porto/workcube/finans-muhasebe-butce-yonetimi/muhasebe_tablo.svg',
            ],
            [
                'title' => 'Maliyet Muhasebesi',
                'slug' => 'maliyet-muhasebesi',
                'short_description' => 'Maliyet hesaplama, maliyet merkezi analizi ve karlılık raporları',
                'content' => '<p>Ürün ve hizmet maliyetlerinizi hesaplayın, maliyet merkezi analizleri yapın ve karlılık raporlarınızı oluşturun.</p>',
                'icon' => 'fas fa-industry',
                'cover_image' => 'porto/workcube/finans-muhasebe-butce-yonetimi/maliyet.svg',
            ],
            [
                'title' => 'Defterler',
                'slug' => 'defterler',
                'short_description' => 'Yasal defterler, kayıt tutma ve arşivleme',
                'content' => '<p>Yasal defterlerinizi elektronik ortamda tutun, kayıtlarınızı sistemli bir şekilde arşivleyin ve denetim süreçlerine hazır olun.</p>',
                'icon' => 'fas fa-archive',
                'cover_image' => 'porto/workcube/finans-muhasebe-butce-yonetimi/defterler.svg',
            ],
            [
                'title' => 'Sabit Kıymet',
                'slug' => 'sabit-kiymet',
                'short_description' => 'Sabit varlık yönetimi, amortisman hesaplama ve envanter takibi',
                'content' => '<p>Sabit varlıklarınızı kaydedin, amortisman hesaplamalarını otomatikleştirin ve varlık envanterini takip edin.</p>',
                'icon' => 'fas fa-building',
                'cover_image' => 'porto/workcube/finans-muhasebe-butce-yonetimi/sabit_kıymetler.svg',
            ],
            [
                'title' => 'Menkul Kıymet',
                'slug' => 'menkul-kiymet',
                'short_description' => 'Hisse senedi ve tahvil yönetimi, portföy takibi ve değerleme',
                'content' => '<p>Menkul kıymet portföyünüzü yönetin, hisse senedi ve tahvillerinizi takip edin ve değerleme işlemlerini gerçekleştirin.</p>',
                'icon' => 'fas fa-chart-line',
                'cover_image' => 'porto/workcube/finans-muhasebe-butce-yonetimi/menkul.svg',
            ],
            [
                'title' => 'Değerleme ve Reeskont',
                'slug' => 'degerleme-reeskont',
                'short_description' => 'Döviz değerleme, reeskont işlemleri ve kur farkı hesaplama',
                'content' => '<p>Dövizli işlemlerinizin değerleme işlemlerini yapın, reeskont hesaplamalarını gerçekleştirin ve kur farklarını takip edin.</p>',
                'icon' => 'fas fa-exchange-alt',
                'cover_image' => 'porto/workcube/finans-muhasebe-butce-yonetimi/değerleme ve reeskont.svg',
            ],
            [
                'title' => 'E-Devlet',
                'slug' => 'e-devlet',
                'short_description' => 'E-devlet entegrasyonu, online beyannameler ve resmi işlemler',
                'content' => '<p>E-devlet sistemleriyle entegrasyon sağlayın, beyannamelerinizi online gönderin ve resmi işlemlerinizi dijital ortamda tamamlayın.</p>',
                'icon' => 'fas fa-desktop',
                'cover_image' => 'porto/workcube/finans-muhasebe-butce-yonetimi/e devlet.svg',
            ],
            [
                'title' => 'Muhasebe Tanımları',
                'slug' => 'muhasebe-tanimları',
                'short_description' => 'Hesap planı, kod tanımları ve muhasebe parametreleri',
                'content' => '<p>Muhasebe hesap planınızı oluşturun, kod tanımlarını yapın ve sistem parametrelerinizi ayarlayın.</p>',
                'icon' => 'fas fa-cogs',
                'cover_image' => 'porto/workcube/finans-muhasebe-butce-yonetimi/muhasebe_tanımları.svg',
            ],
            [
                'title' => 'Mali Denetim',
                'slug' => 'mali-denetim',
                'short_description' => 'İç denetim, kontrol mekanizmaları ve uyumluluk takibi',
                'content' => '<p>Mali denetim süreçlerinizi yönetin, iç kontrol mekanizmalarını kurun ve yasal uyumluluk takibinizi gerçekleştirin.</p>',
                'icon' => 'fas fa-search-dollar',
                'cover_image' => 'porto/workcube/finans-muhasebe-butce-yonetimi/mail_denetim.svg',
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
