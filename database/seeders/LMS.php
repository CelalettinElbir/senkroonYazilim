<?php

namespace Database\Seeders;

use App\Models\Module;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class LMS extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mainModule = Module::where('slug', 'lms-ogrenme-yonetim-sistemi')->first();

        if (!$mainModule) {
            $mainModule = Module::create([
                'title' => 'LMS - Öğrenme Yönetim Sistemi',
                'slug' => 'lms-ogrenme-yonetim-sistemi',
                'short_description' => 'Kurum içi eğitim ve öğrenme yönetimi platformu.',
                'content' => '<p>Çalışanlarınızın ve bayilerinizin gelişimini desteklemek için online eğitimler, sınavlar ve sertifika programları düzenleyin.</p>',
                'category' => 'workcube',
                'icon' => 'fas fa-book-reader',
                'cover_image' => 'modules/lms-ogrenme-yonetimi.jpg',
                'is_active' => true,
                'order' => 90
            ]);
            $this->command->info('Ana modül oluşturuldu: ' . $mainModule->title);
        } else {
            $this->command->info('Ana modül zaten mevcut: ' . $mainModule->title);
        }

        $subModules = [
            [
                'title' => 'Ajanda-Etkinlik Takvimi',
                'icon' => 'fas fa-calendar-alt',
                'short_description' => 'Kişisel ve kurumsal etkinliklerin takibi.',
                'content' => '<p>Eğitim takviminizi, toplantılarınızı ve kişisel etkinliklerinizi yönetin.</p>',
                'cover_image' => 'porto/workcube/lms/ajanda.svg'
            ],
            // [
            //     'title' => 'Intranet Bilgilerimiz',
            //     'icon' => 'fas fa-info-circle',
            //     'short_description' => 'Kullanıcıya özel intranet bilgileri ve duyurular.',
            //     'content' => '<p>Şirket içi duyurulara, haberlere ve size özel bilgilere erişin.</p>',
            //     'cover_image' => 'porto/workcube/lms/intranet.svg'
            // ],
            [
                'title' => 'My Home - Diğer İşlemlerimiz',
                'icon' => 'fas fa-home',
                'short_description' => 'Kullanıcı başlangıç ekranı ve sık kullanılan işlemler.',
                'content' => '<p>Kişisel başlangıç sayfanızı ve sık kullandığınız işlemlere hızlı erişim sağlayın.</p>',
                'cover_image' => 'porto/workcube/lms/myhome.svg'
            ],
            [
                'title' => 'Forumlar',
                'icon' => 'fas fa-comments',
                'short_description' => 'Eğitim ve gelişim odaklı tartışma platformu.',
                'content' => '<p>Eğitimler hakkında tartışın, sorular sorun ve diğer kullanıcılarla bilgi alışverişinde bulunun.</p>',
                'cover_image' => 'porto/workcube/lms/forum.svg'
            ],
            [
                'title' => 'IK Self Servis İşlemleri',
                'icon' => 'fas fa-user-cog',
                'short_description' => 'İnsan kaynakları self servis işlemleri.',
                'content' => '<p>İzin talepleri, bordro görüntüleme ve kişisel bilgilerin güncellenmesi gibi IK işlemlerinizi kendiniz yapın.</p>',
                'cover_image' => 'porto/workcube/lms/ik.svg'
            ],
            [
                'title' => 'İç İletişim',
                'icon' => 'fas fa-address-book',
                'short_description' => 'Şirket içi iletişim rehberi.',
                'content' => '<p>Tüm çalışanların iletişim bilgilerine kolayca erişin.</p>',
                'cover_image' => 'porto/workcube/lms/iletisim.svg'
            ],
            [
                'title' => 'Literatürler',
                'icon' => 'fas fa-book-open',
                'short_description' => 'Eğitim materyalleri ve kaynak dokümanlar.',
                'content' => '<p>Eğitimlerle ilgili dokümanlara, sunumlara ve diğer kaynak materyallere erişin.</p>',
                'cover_image' => 'porto/workcube/lms/literatür.svg'
            ],
            [
                'title' => 'Destek ve Yardım',
                'icon' => 'fas fa-question-circle',
                'short_description' => 'Sistem kullanımı ile ilgili yardım ve destek.',
                'content' => '<p>Sistem kullanımıyla ilgili sıkça sorulan sorulara ve yardım dokümanlarına ulaşın.</p>',
                'cover_image' => 'porto/workcube/lms/yardım.svg'
            ],

            [
                'title' => 'Eğitim',
                'icon' => 'fas fa-question-circle',
                'short_description' => 'Sistem kullanımı ile ilgili yardım ve destek.',
                'content' => '<p>Sistem kullanımıyla ilgili sıkça sorulan sorulara ve yardım dokümanlarına ulaşın.</p>',
                'cover_image' => 'porto/workcube/lms/egitim.svg'
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
