<?php

namespace Database\Seeders;

use App\Models\Module;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SalesSupplyDistributionSeeder extends Seeder
{
    /**
     * Run the database seeder.
     */
    public function run(): void
    {
        // Ana modül: Satış / Tedarik / Dağıtım - Önce var mı kontrol et
        $mainModule = Module::where('slug', 'erp-satis-satinalma-dagitim-sd-scm')->first();

        if (!$mainModule) {
            $mainModule = Module::create([
                'title' => 'Satış / Tedarik / Dağıtım',
                'slug' => 'erp-satis-satinalma-dagitim-sd-scm',
                'short_description' => 'Satış, tedarik zinciri ve dağıtım süreçlerini yöneten kapsamlı ERP modülü',
                'content' => '<p>İşletmenizin satış, tedarik ve dağıtım süreçlerini entegre bir şekilde yönetin. Müşteri ilişkilerinden depo yönetimine, faturalamadan lojistiğe kadar tüm operasyonel süreçlerinizi tek platformda kontrol edin.</p>',
                'category' => 'workcube',
                'icon' => 'fas fa-shopping-cart',
                'cover_image' => 'modules/sales-distribution.jpg',
                'is_active' => true,
                'order' => 10
            ]);
            $this->command->info('Ana modül oluşturuldu: ' . $mainModule->title);
        } else {
            $this->command->info('Ana modül zaten mevcut: ' . $mainModule->title);
        }

        // Alt modüller
        $subModules = [
            [
                'title' => 'Müşteri ve Tedarikçi',
                'slug' => 'musteri-ve-tedarikci',
                'short_description' => 'Müşteri ve tedarikçi bilgilerinin yönetimi, CRM işlemleri',
                'content' => '<p>Müşteri ve tedarikçi veritabanınızı yönetin. İletişim bilgileri, ödeme koşulları, kredi limitleri, geçmiş işlemler ve performans analizlerini takip edin.</p>',
                'icon' => 'fas fa-handshake',
                'cover_image' => 'porto/workcube/erp-satis-satinalma-dagitim-sd-scm/musteri_tedarikçi.svg',
            ],
            [
                'title' => 'Ürün ve Stoklar',
                'slug' => 'urun-ve-stoklar',
                'short_description' => 'Ürün katalog yönetimi, stok takibi ve envanter kontrolü',
                'content' => '<p>Ürün kataloğunuzu yönetin, stok seviyelerini takip edin, minimum stok uyarıları alın ve envanter hareketlerini detaylı olarak izleyin.</p>',
                'icon' => 'fas fa-boxes',
                'cover_image' => 'porto/workcube/erp-satis-satinalma-dagitim-sd-scm/urunlarVeStoklar.svg',
            ],
            [
                'title' => 'Satış',
                'slug' => 'satis-modulu',
                'short_description' => 'Satış süreçleri, teklif hazırlama ve sipariş yönetimi',
                'content' => '<p>Satış fırsatlarını yönetin, teklifler hazırlayın, siparişleri takip edin ve satış performansınızı analiz edin.</p>',
                'icon' => 'fas fa-chart-line',
                'cover_image' => 'porto/workcube/erp-satis-satinalma-dagitim-sd-scm/satıs.svg',
            ],
            [
                'title' => 'Satın Alma',
                'slug' => 'satin-alma',
                'short_description' => 'Satın alma süreçleri, tedarikçi değerlendirmesi ve sipariş takibi',
                'content' => '<p>Satın alma taleplerini yönetin, tedarikçilerden teklifler alın, siparişleri oluşturun ve teslimat süreçlerini takip edin.</p>',
                'icon' => 'fas fa-shopping-bag',
                'cover_image' => 'porto/workcube/erp-satis-satinalma-dagitim-sd-scm/satınalma.svg',
            ],
            [
                'title' => 'Anlaşmalar-Koşullar',
                'slug' => 'anlasmalar-kosullar',
                'short_description' => 'Sözleşme yönetimi, ticari koşullar ve anlaşma takibi',
                'content' => '<p>Müşteri ve tedarikçi anlaşmalarını yönetin, ticari koşulları tanımlayın ve sözleşme yenileme tarihlerini takip edin.</p>',
                'icon' => 'fas fa-file-contract',
                'cover_image' => 'porto/workcube/erp-satis-satinalma-dagitim-sd-scm/anlaşma.svg',
            ],
            [
                'title' => 'Fatura',
                'slug' => 'fatura',
                'short_description' => 'Fatura oluşturma, düzenleme ve e-fatura entegrasyonu',
                'content' => '<p>Satış ve satın alma faturalarını oluşturun, e-fatura entegrasyonu ile otomatik gönderim yapın ve fatura takibinizi gerçekleştirin.</p>',
                'icon' => 'fas fa-file-invoice-dollar',
                'cover_image' => 'porto/workcube/erp-satis-satinalma-dagitim-sd-scm/fatura.svg',
            ],
            [
                'title' => 'Sevkiyat & Lojistik',
                'slug' => 'sevkiyat-lojistik',
                'short_description' => 'Kargo yönetimi, sevkiyat planlama ve lojistik koordinasyonu',
                'content' => '<p>Sevkiyat süreçlerinizi planlayın, kargo firmalarıyla entegrasyon sağlayın ve teslimat takibi yapın. Lojistik maliyetlerinizi optimize edin.</p>',
                'icon' => 'fas fa-truck',
                'cover_image' => 'porto/workcube/erp-satis-satinalma-dagitim-sd-scm/sevkiyat.svg',
            ],
            [
                'title' => 'Depo ve Alan Planlama',
                'slug' => 'depo-ve-alan-planlama',
                'short_description' => 'Depo yönetimi, raf organizasyonu ve alan optimizasyonu',
                'content' => '<p>Depo alanlarınızı verimli bir şekilde planlayın, raf sistemlerini organize edin ve stok yerleştirme stratejilerinizi optimize edin.</p>',
                'icon' => 'fas fa-warehouse',
                'cover_image' => 'porto/workcube/erp-satis-satinalma-dagitim-sd-scm/depo.svg',
            ],
            [
                'title' => 'Kalite Kontrol - Garanti',
                'slug' => 'kalite-kontrol-garanti',
                'short_description' => 'Ürün kalite kontrolleri, garanti takibi ve müşteri şikayetleri',
                'content' => '<p>Ürün kalitesini kontrol edin, garanti süreçlerini yönetin ve müşteri şikayetlerini etkin bir şekilde çözümleyin.</p>',
                'icon' => 'fas fa-shield-alt',
                'cover_image' => 'porto/workcube/erp-satis-satinalma-dagitim-sd-scm/kalite.svg',
            ],
            [
                'title' => 'Promosyon Yönetimi',
                'slug' => 'promosyon-yonetimi',
                'short_description' => 'Kampanya planlama, indirim yönetimi ve promosyon analizi',
                'content' => '<p>Satış kampanyalarınızı planlayın, indirim kodları oluşturun ve promosyon performansınızı analiz edin.</p>',
                'icon' => 'fas fa-tags',
                'cover_image' => 'porto/workcube/erp-satis-satinalma-dagitim-sd-scm/promosyon.svg',
            ],
            [
                'title' => 'Online Satış',
                'slug' => 'online-satis',
                'short_description' => 'E-ticaret entegrasyonu, online sipariş yönetimi ve dijital satış kanalları',
                'content' => '<p>E-ticaret platformlarınızla entegrasyon sağlayın, online siparişlerinizi yönetin ve çoklu satış kanallarınızı koordine edin.</p>',
                'icon' => 'fas fa-laptop-code',
                'cover_image' => 'porto/workcube/erp-satis-satinalma-dagitim-sd-scm/online.svg',
            ],
            [
                'title' => 'Fiyat Yönetimi',
                'slug' => 'fiyat-yonetimi',
                'short_description' => 'Dinamik fiyatlandırma, fiyat listesi yönetimi ve kar marjı analizi',
                'content' => '<p>Ürün fiyatlarınızı yönetin, müşteri bazlı fiyat listeleri oluşturun ve kar marjı analizlerinizi gerçekleştirin.</p>',
                'icon' => 'fas fa-dollar-sign',
                'cover_image' => 'porto/workcube/erp-satis-satinalma-dagitim-sd-scm/fiyatyonetimi.svg',
            ],
            [
                'title' => 'Dış Ticaret',
                'slug' => 'dis-ticaret',
                'short_description' => 'İthalat-ihracat işlemleri, gümrük takibi ve döviz yönetimi',
                'content' => '<p>Dış ticaret operasyonlarınızı yönetin, gümrük işlemlerini takip edin ve döviz kurları ile risk yönetiminizi gerçekleştirin.</p>',
                'icon' => 'fas fa-globe-americas',
                'cover_image' => 'porto/workcube/erp-satis-satinalma-dagitim-sd-scm/disticaret.svg',
            ],
            [
                'title' => 'Maliyet',
                'slug' => 'maliyet',
                'short_description' => 'Maliyet hesaplama, kar-zarar analizi ve bütçe planlama',
                'content' => '<p>Ürün maliyetlerinizi hesaplayın, kar-zarar analizlerinizi yapın ve satış bütçenizi planlayın. Maliyet merkezlerini takip edin.</p>',
                'icon' => 'fas fa-calculator',
                'cover_image' => 'porto/workcube/erp-satis-satinalma-dagitim-sd-scm/maliyet.svg',
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
