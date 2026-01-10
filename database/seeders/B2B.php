<?php

namespace Database\Seeders;

use App\Models\Module;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class B2B extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mainModule = Module::where('slug', 'b2b-e-ticaret-ve-bayi-yonetimi')->first();

        if (!$mainModule) {
            $mainModule = Module::create([
                'title' => 'B2B E-Ticaret ve Bayi Yönetimi',
                'slug' => 'b2b-e-ticaret-ve-bayi-yonetimi',
                'short_description' => 'B2B e-ticaret ve bayi yönetimi için kapsamlı çözüm',
                'content' => '<p>Bayi ağınızı yönetin, B2B satış süreçlerinizi dijitalleştirin ve müşteri ilişkilerinizi güçlendirin.</p>',
                'category' => 'workcube',
                'icon' => 'fas fa-store',
                'cover_image' => 'modules/b2b-e-ticaret.jpg',
                'is_active' => true,
                'order' => 80
            ]);
            $this->command->info('Ana modül oluşturuldu: ' . $mainModule->title);
        } else {
            $this->command->info('Ana modül zaten mevcut: ' . $mainModule->title);
        }

        $subModules = [
            [
                'title' => 'Ürün ve Stoklar',
                'icon' => 'fas fa-boxes',
                'short_description' => 'Ürün kataloğu, stok takibi ve envanter yönetimi.',
                'content' => '<p>Ürünlerinizi ve stoklarınızı etkin bir şekilde yönetin. Gerçek zamanlı stok takibi, çoklu depo yönetimi ve detaylı ürün bilgileri ile envanterinizi optimize edin.</p>',
                'cover_image' => 'porto/workcube/b2b/urun-ve-stoklar.svg'
            ],
            [
                'title' => 'Banka',
                'icon' => 'fas fa-university',
                'short_description' => 'Banka hesapları, ödemeler ve finansal işlemler.',
                'content' => '<p>Banka hesaplarınızı entegre edin, ödeme ve tahsilat süreçlerinizi otomatikleştirin. Finansal işlemlerinizi tek bir yerden yönetin.</p>',
                'cover_image' => 'porto/workcube/b2b/banka.svg'
            ],
            [
                'title' => 'Sevkiyat & Lojistik',
                'icon' => 'fas fa-truck',
                'short_description' => 'Sipariş sevkiyatı, kargo takibi ve lojistik planlama.',
                'content' => '<p>Sevkiyat süreçlerinizi planlayın ve yönetin. Kargo entegrasyonları ile siparişlerinizi takip edin ve lojistik operasyonlarınızı optimize edin.</p>',
                'cover_image' => 'porto/workcube/b2b/sevkiyat-lojistik.svg'
            ],
            [
                'title' => 'Fatura',
                'icon' => 'fas fa-file-invoice-dollar',
                'short_description' => 'E-fatura, e-arşiv ve fatura yönetimi.',
                'content' => '<p>Faturalarınızı dijital ortamda oluşturun, gönderin ve yönetin. E-fatura ve e-arşiv entegrasyonları ile yasal uyumluluğu sağlayın.</p>',
                'cover_image' => 'porto/workcube/b2b/fatura.svg'
            ],
            [
                'title' => 'Cari',
                'icon' => 'fas fa-address-book',
                'short_description' => 'Müşteri ve tedarikçi hesapları yönetimi.',
                'content' => '<p>Müşteri ve tedarikçi bilgilerinizi, hesap ekstrelerini ve borç-alacak durumlarını takip edin. Cari hesap yönetimi ile finansal kontrolü elinizde tutun.</p>',
                'cover_image' => 'porto/workcube/b2b/cari.svg'
            ],
            [
                'title' => 'Forum',
                'icon' => 'fas fa-comments',
                'short_description' => 'Bayi ve müşteriler için iletişim ve tartışma platformu.',
                'content' => '<p>Bayileriniz ve müşterilerinizle etkileşim kurun. Forum modülü ile bilgi paylaşımını artırın ve bir topluluk oluşturun.</p>',
                'cover_image' => 'porto/workcube/b2b/forum.svg'
            ],
            [
                'title' => 'İşe Alım',
                'icon' => 'fas fa-user-plus',
                'short_description' => 'İşe alım süreçleri, aday takibi ve mülakat yönetimi.',
                'content' => '<p>İşe alım süreçlerinizi dijitalleştirin. Aday başvurularını toplayın, değerlendirin ve mülakatları planlayın.</p>',
                'cover_image' => 'porto/workcube/b2b/ise-alim.svg'
            ],
            [
                'title' => 'İletişim',
                'icon' => 'fas fa-address-card',
                'short_description' => 'Müşteri ve bayi iletişim bilgileri yönetimi.',
                'content' => '<p>Tüm iletişim bilgilerinizi merkezi bir yerde toplayın ve yönetin. Müşteri ve bayilerinizle kolayca iletişim kurun.</p>',
                'cover_image' => 'porto/workcube/b2b/iletisim.svg'
            ],
            [
                'title' => 'Eğitim Yönetimi',
                'icon' => 'fas fa-graduation-cap',
                'short_description' => 'Bayi ve personel için online eğitim platformu.',
                'content' => '<p>Bayilerinize ve personelinize yönelik online eğitimler düzenleyin. Eğitim materyallerini paylaşın ve katılımcı ilerlemesini takip edin.</p>',
                'cover_image' => 'porto/workcube/b2b/egitim-yonetimi.svg'
            ],
            [
                'title' => 'Dijital Arşiv',
                'icon' => 'fas fa-archive',
                'short_description' => 'Belge ve dokümanların dijital olarak arşivlenmesi.',
                'content' => '<p>Tüm önemli belgelerinizi güvenli bir şekilde dijital olarak arşivleyin. Belgelere hızlı ve kolay bir şekilde erişin.</p>',
                'cover_image' => 'porto/workcube/b2b/dijital-arsiv.svg'
            ],
            [
                'title' => 'Call Center',
                'icon' => 'fas fa-headset',
                'short_description' => 'Müşteri hizmetleri ve çağrı merkezi yönetimi.',
                'content' => '<p>Çağrı merkezi operasyonlarınızı yönetin. Müşteri taleplerini ve şikayetlerini etkin bir şekilde takip edin ve çözüme kavuşturun.</p>',
                'cover_image' => 'porto/workcube/b2b/call-center.svg'
            ],
            [
                'title' => 'Servis',
                'icon' => 'fas fa-concierge-bell',
                'short_description' => 'Satış sonrası servis ve teknik destek yönetimi.',
                'content' => '<p>Satış sonrası servis taleplerini yönetin. Teknik destek ekibinizi organize edin ve müşteri memnuniyetini artırın.</p>',
                'cover_image' => 'porto/workcube/b2b/servis.svg'
            ],
            [
                'title' => 'Pazarlama',
                'icon' => 'fas fa-bullhorn',
                'short_description' => 'Pazarlama kampanyaları, e-posta gönderimi ve otomasyon.',
                'content' => '<p>Pazarlama kampanyalarınızı planlayın, yürütün ve sonuçlarını analiz edin. E-posta pazarlama ve otomasyon araçları ile hedef kitlenize ulaşın.</p>',
                'cover_image' => 'porto/workcube/b2b/pazarlama.svg'
            ],
            [
                'title' => 'Fırsat & Teklif Yönetimi',
                'icon' => 'fas fa-lightbulb',
                'short_description' => 'Satış fırsatları ve teklif süreçleri yönetimi.',
                'content' => '<p>Satış fırsatlarını takip edin, teklifler hazırlayın ve müşteri dönüşüm oranlarınızı artırın.</p>',
                'cover_image' => 'porto/workcube/b2b/firsat-teklif-yonetimi.svg'
            ],
            [
                'title' => 'Satış Gücü Planlama',
                'icon' => 'fas fa-users',
                'short_description' => 'Satış ekibi performans takibi ve hedef yönetimi.',
                'content' => '<p>Satış ekibinizin performansını izleyin, hedefler belirleyin ve satış stratejilerinizi optimize edin.</p>',
                'cover_image' => 'porto/workcube/b2b/satis-gucu-planlama.svg'
            ],
            [
                'title' => 'İçerik Yönetimi',
                'icon' => 'fas fa-file-alt',
                'short_description' => 'Web sitesi ve portal içeriklerinin yönetimi.',
                'content' => '<p>Web sitenizdeki ve bayi portalınızdaki içerikleri kolayca yönetin. Duyurular, haberler ve diğer içerikleri yayınlayın.</p>',
                'cover_image' => 'porto/workcube/b2b/icerik-yonetimi.svg'
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
                    'cover_image' => 'porto/workcube/b2b/' . $slug . '.svg',
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
