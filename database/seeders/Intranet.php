<?php

namespace Database\Seeders;

use App\Models\Module;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Intranet extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Ana modül: workcube Intranet İçerik Yönetimi - Önce var mı kontrol et
        $mainModule = Module::where('slug', 'workcube-intranet-icerik-yonetimi')->first();

        if (!$mainModule) {
            $mainModule = Module::create([
                'title' => 'workcube Intranet İçerik Yönetimi',
                'slug' => 'workcube-intranet-icerik-yonetimi',
                'short_description' => 'Kurumsal intranet sistemi, içerik yönetimi ve çalışan iletişimi ERP modülü',
                'content' => '<p>İşletmenizin iç iletişim ve bilgi paylaşım süreçlerini yönetin. Çalışan portali, içerik yönetimi, forum ve self servis uygulamaları ile kurumsal intranet sisteminizi tek platformda yönetin.</p>',
                'category' => 'workcube',
                'icon' => 'fas fa-globe',
                'cover_image' => 'modules/workcube-intranet.jpg',
                'is_active' => true,
                'order' => 60
            ]);
            $this->command->info('Ana modül oluşturuldu: ' . $mainModule->title);
        } else {
            $this->command->info('Ana modül zaten mevcut: ' . $mainModule->title);
        }

        // Alt modüller
        $subModules = [
            [
                'title' => 'Ajanda',
                'slug' => 'ajanda',
                'short_description' => 'Kişisel ve kurumsal ajanda yönetimi, randevu planlama',
                'content' => '<p>Kişisel ve kurumsal ajandanızı yönetin. Randevularınızı planlayın, toplantıları organize edin ve önemli tarihlerinizi takip edin. Paylaşımlı ajanda özellikleri ile ekip koordinasyonu sağlayın.</p>',
                'icon' => 'fas fa-calendar-alt',
                'cover_image' => 'porto/workcube/intranet/ajanda.svg',
            ],
            [
                'title' => 'Literatür',
                'slug' => 'literatur',
                'short_description' => 'Kurumsal dokümanlar, politikalar ve prosedür yönetimi',
                'content' => '<p>Kurumsal dokümanlarınızı, politikalarınızı ve prosedürlerinizi yönetin. Literatür arşivi oluşturun, güncellemeleri takip edin ve çalışanların erişimini kontrol edin.</p>',
                'icon' => 'fas fa-book-open',
                'cover_image' => 'porto/workcube/intranet/literature.svg',
            ],
            [
                'title' => 'IK Self Servis İşlemleri',
                'slug' => 'ik-self-servis',
                'short_description' => 'Çalışan self servis uygulamaları ve HR işlemleri',
                'content' => '<p>Çalışanların kendi HR işlemlerini gerçekleştirebilecekleri self servis platformu. İzin talepleri, bordro görüntüleme, kişisel bilgi güncellemeleri ve diğer HR işlemleri.</p>',
                'icon' => 'fas fa-user-cog',
                'cover_image' => 'porto/workcube/intranet/ik_self_servis.svg',
            ],
            [
                'title' => 'İçerik Yönetimi',
                'slug' => 'icerik-yonetimi-intranet',
                'short_description' => 'İntranet içerik oluşturma, düzenleme ve yayınlama',
                'content' => '<p>İntranet sitesi için içerik oluşturun, düzenleyin ve yayınlayın. Haber yazıları, duyurular, etkinlik tanıtımları ve diğer kurumsal içerikleri yönetin.</p>',
                'icon' => 'fas fa-edit',
                'cover_image' => 'porto/workcube/intranet/icerik_yonetimi.svg',
            ],
            [
                'title' => 'Intranet Bilgilerim',
                'slug' => 'intranet-bilgilerim',
                'short_description' => 'Kişisel profil yönetimi ve çalışan bilgileri',
                'content' => '<p>Kişisel profilinizi yönetin, iletişim bilgilerinizi güncelleyin ve çalışan dizinini kullanın. Organizasyon şeması ve iç telefon rehberini görüntüleyin.</p>',
                'icon' => 'fas fa-id-card-alt',
                'cover_image' => 'porto/workcube/intranet/intranet.svg',
            ],
            [
                'title' => 'My Home - Diğer İşlemler',
                'slug' => 'my-home-diger-islemler',
                'short_description' => 'Kişisel anasayfa ve hızlı erişim araçları',
                'content' => '<p>Kişiselleştirilmiş anasayfanızda sık kullandığınız işlemlere hızlı erişim sağlayın. Widget\'lar, kısayollar ve özelleştirilebilir dashboard özelliklerini kullanın.</p>',
                'icon' => 'fas fa-home',
                'cover_image' => 'porto/workcube/intranet/my_home.svg',
            ],
            [
                'title' => 'Forum',
                'slug' => 'forum',
                'short_description' => 'Kurumsal forum ve tartışma platformu',
                'content' => '<p>Çalışanlar arası iletişimi güçlendiren forum platformu. Konular oluşturun, tartışmalara katılın ve bilgi paylaşımını destekleyin. Moderation ve kategori yönetimi özellikleri.</p>',
                'icon' => 'fas fa-comments',
                'cover_image' => 'porto/workcube/intranet/forum.svg',
            ],
            [
                'title' => 'İletişim',
                'slug' => 'iletisim-intranet',
                'short_description' => 'İç iletişim araçları ve mesajlaşma sistemi',
                'content' => '<p>Kurumsal iletişim araçları ile çalışanlar arasında etkili iletişim kurun. Anlık mesajlaşma, bildirimler ve kurumsal e-posta entegrasyonu.</p>',
                'icon' => 'fas fa-envelope',
                'cover_image' => 'porto/workcube/intranet/iletisim.svg',
            ],
            [
                'title' => 'Yardım',
                'slug' => 'yardim',
                'short_description' => 'Yardım masası, SSS ve teknik destek',
                'content' => '<p>Kullanıcılar için kapsamlı yardım sistemi. SSS bölümü, kullanım kılavuzları, video eğitimleri ve teknik destek talep sistemi ile kullanıcı deneyimini iyileştirin.</p>',
                'icon' => 'fas fa-question-circle',
                'cover_image' => 'porto/workcube/intranet/yardim.svg',
            ],
            [
                'title' => 'Dijital Arşiv',
                'slug' => 'dijital-arsiv-intranet',
                'short_description' => 'Kurumsal doküman arşivi ve dosya yönetimi',
                'content' => '<p>Tüm kurumsal dokümanları dijital ortamda güvenli bir şekilde arşivleyin. Dosya organizasyonu, versiyon kontrolü ve erişim yönetimi ile dijital arşiv sisteminizi yönetin.</p>',
                'icon' => 'fas fa-archive',
                'cover_image' => 'porto/workcube/intranet/dijital_arsiv.svg',
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
