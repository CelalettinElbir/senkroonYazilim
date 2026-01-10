<?php

namespace Database\Seeders;

use App\Models\Module;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Hr extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Ana modül: İnsan Kaynakları - Önce var mı kontrol et
        $mainModule = Module::where('slug', 'insan-kaynaklari-ik')->first();

        if (!$mainModule) {
            $mainModule = Module::create([
                'title' => 'İnsan Kaynakları',
                'slug' => 'insan-kaynaklari-ik',
                'short_description' => 'İnsan kaynakları yönetimi, bordro, özlük ve personel süreçlerini kapsayan ERP modülü',
                'content' => '<p>İşletmenizin tüm insan kaynakları süreçlerini yönetin. Personel takibinden bordro işlemlerine, performans değerlendirmesinden organizasyon planlamasına kadar tüm HR operasyonlarınızı tek platformda kontrol edin.</p>',
                'category' => 'workcube',
                'icon' => 'fas fa-users',
                'cover_image' => 'modules/insan-kaynaklari.jpg',
                'is_active' => true,
                'order' => 40
            ]);
            $this->command->info('Ana modül oluşturuldu: ' . $mainModule->title);
        } else {
            $this->command->info('Ana modül zaten mevcut: ' . $mainModule->title);
        }

        // Alt modüller
        $subModules = [
            [
                'title' => 'Çalışan Bilgileri',
                'slug' => 'calisan-bilgileri',
                'short_description' => 'Personel kayıtları, özlük dosyaları ve çalışan profil yönetimi',
                'content' => '<p>Personel bilgilerini kaydedin ve yönetin. Özlük dosyalarını dijital ortamda saklayın, çalışan profillerini güncelleyin ve personel veritabanınızı sistematik olarak organize edin.</p>',
                'icon' => 'fas fa-id-card',
                'cover_image' => 'porto/workcube/hr/calisan_bilgi.svg',
            ],
            [
                'title' => 'İşe Alım',
                'slug' => 'ise-alim',
                'short_description' => 'İşe alım süreçleri, başvuru yönetimi ve aday takibi',
                'content' => '<p>İşe alım süreçlerinizi yönetin, iş ilanlarını yayınlayın, başvuruları değerlendirin ve aday takibi yapın. Mülakatları planlayın ve işe alım kararlarını kaydedin.</p>',
                'icon' => 'fas fa-user-plus',
                'cover_image' => 'porto/workcube/hr/isealim.svg',
            ],
            [
                'title' => 'Bordro ve Puantaj',
                'slug' => 'bordro-puantaj',
                'short_description' => 'Bordro hesaplaması, puantaj takibi ve maaş işlemleri',
                'content' => '<p>Personel puantajlarını takip edin, bordro hesaplamalarını otomatikleştirin ve maaş işlemlerini yönetin. SGK, vergi ve diğer kesintileri otomatik hesaplayın.</p>',
                'icon' => 'fas fa-calculator',
                'cover_image' => 'porto/workcube/hr/bordro_puantaj.svg',
            ],
            [
                'title' => 'Bordro Kuralları',
                'slug' => 'bordro-kurallari',
                'short_description' => 'Bordro hesaplama kuralları, kesintiler ve hakediş tanımları',
                'content' => '<p>Bordro hesaplama kurallarını tanımlayın, kesinti ve hakediş parametrelerini ayarlayın. Farklı personel grupları için özel bordro kuralları oluşturun.</p>',
                'icon' => 'fas fa-cogs',
                'cover_image' => 'porto/workcube/hr/bordro_kurallari.svg',
            ],
            [
                'title' => 'Ücret Yönetimi ve Özlük',
                'slug' => 'ucret-yonetimi-ozluk',
                'short_description' => 'Ücret politikası, maaş artışları ve özlük işlemleri',
                'content' => '<p>Ücret politikalarını yönetin, maaş artışlarını planlayın ve özlük işlemlerini takip edin. Personel terfi, nakil ve diğer özlük hareketlerini kaydedin.</p>',
                'icon' => 'fas fa-money-bill-wave',
                'cover_image' => 'porto/workcube/hr/ucretveyonetimi.svg',
            ],
            [
                'title' => 'Organizasyon Planlama',
                'slug' => 'organizasyon-planlama',
                'short_description' => 'Organizasyon şeması, departman yapısı ve hiyerarşi yönetimi',
                'content' => '<p>Organizasyon yapısını planlayın, departmanları tanımlayın ve hiyerarşik ilişkileri yönetin. Organizasyon şemalarını oluşturun ve güncelleyin.</p>',
                'icon' => 'fas fa-sitemap',
                'cover_image' => 'porto/workcube/hr/organizasyon_planlama.svg',
            ],
            [
                'title' => 'Rol Planlama',
                'slug' => 'rol-planlama',
                'short_description' => 'İş tanımları, rol yetkileri ve görev dağılımı',
                'content' => '<p>İş tanımlarını oluşturun, roller için yetki ve sorumluluklarını belirleyin. Görev dağılımını planlayın ve rol bazlı yetki yönetimini gerçekleştirin.</p>',
                'icon' => 'fas fa-user-tag',
                'cover_image' => 'porto/workcube/hr/rol_planlama.svg',
            ],
            [
                'title' => 'Performans',
                'slug' => 'performans',
                'short_description' => 'Performans değerlendirme, hedef takibi ve başarı ölçümü',
                'content' => '<p>Performans değerlendirme süreçlerini yönetin, hedefleri takip edin ve başarı ölçümlerini gerçekleştirin. 360 derece değerlendirme ve kişisel gelişim planları oluşturun.</p>',
                'icon' => 'fas fa-chart-bar',
                'cover_image' => 'porto/workcube/hr/performans.svg',
            ],
            [
                'title' => 'Disiplin ve Diğer İşlemler',
                'slug' => 'disiplin-diger-islemler',
                'short_description' => 'Disiplin işlemleri, ceza-ödül sistemi ve personel hareketleri',
                'content' => '<p>Disiplin işlemlerini yönetin, ceza ve ödül sistemini takip edin. Personel hareketlerini kaydedin ve yasal süreçleri yönetin.</p>',
                'icon' => 'fas fa-gavel',
                'cover_image' => 'porto/workcube/hr/disiplin.svg',
            ],
            [
                'title' => 'Devam ve Kontrol',
                'slug' => 'devam-kontrol',
                'short_description' => 'Devam takibi, izin yönetimi ve çalışma saatleri kontrolü',
                'content' => '<p>Personel devam durumlarını takip edin, izin taleplerini yönetin ve çalışma saatlerini kontrol edin. Vardiya planlaması ve fazla mesai hesaplamalarını gerçekleştirin.</p>',
                'icon' => 'fas fa-clock',
                'cover_image' => 'porto/workcube/hr/devam_ve_konrtol.svg',
            ],
            [
                'title' => 'Sağlık ve Güvenlik İşlemleri',
                'slug' => 'saglik-guvenlik',
                'short_description' => 'İş sağlığı güvenliği, sağlık raporları ve güvenlik eğitimleri',
                'content' => '<p>İş sağlığı ve güvenliği süreçlerini yönetin, sağlık raporlarını takip edin ve güvenlik eğitimlerini planlayın. İSG mevzuatına uyumu sağlayın.</p>',
                'icon' => 'fas fa-hard-hat',
                'cover_image' => 'porto/workcube/hr/saglik_ve_guvenlik.svg',
            ],
            [
                'title' => 'Bildirgeler',
                'slug' => 'bildirgeler',
                'short_description' => 'Resmi bildirimler, SGK bildirgeleri ve yasal raporlama',
                'content' => '<p>Resmi kurumlara yapılacak bildirimleri yönetin, SGK bildirgeleri oluşturun ve yasal raporlama süreçlerini otomatikleştirin.</p>',
                'icon' => 'fas fa-file-alt',
                'cover_image' => 'porto/workcube/hr/bildirgeler.svg',
            ],
            [
                'title' => 'Şemalar',
                'slug' => 'semalar',
                'short_description' => 'Organizasyon şemaları, süreç akışları ve görsel raporlar',
                'content' => '<p>Organizasyon şemalarını oluşturun, süreç akışlarını görselleştirin ve HR süreçleri için interaktif şemalar hazırlayın.</p>',
                'icon' => 'fas fa-project-diagram',
                'cover_image' => 'porto/workcube/hr/semalar.svg',
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
