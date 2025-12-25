-- Önce tabloyu oluşturalım (eğer yoksa)
CREATE TABLE IF NOT EXISTS `modules` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `short_description` varchar(500) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `cover_image` varchar(255) DEFAULT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `order` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `modules_slug_unique` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Workcube modüllerini ekleyelim
INSERT INTO `modules` (`title`, `slug`, `short_description`, `content`, `icon`, `cover_image`, `meta_title`, `meta_description`, `is_active`, `order`, `created_at`, `updated_at`) VALUES

-- 1. Analiz ve Raporlama
('Analiz ve Raporlama', 'bi-analiz-ve-raporlama', 'Workcube Analiz ve Raporlama Modülü', 'Workcube Analiz ve Raporlama Modülü içerisindeki hazır olarak bulunan finans, satış, İK, satın alma vb. sayısız raporu anlık olarak takip edebilirsiniz. İşletmenizin tüm verilerini görselleştirin, derinlemesine analizler yapın ve stratejik kararlar alın. Özelleştirilebilir dashboard\'lar, otomatik raporlama ve gerçek zamanlı veri takibi ile işinizi daha iyi yönetin.', 'fas fa-chart-bar', 'documents/product/67BDA826-2810-4F79-9751349AA942D5F8.webp', 'Analiz ve Raporlama - Business Intelligence Çözümü', 'Workcube BI modülü ile finans, satış, İK raporlarını anlık takip edin. Gerçek zamanlı analizler ve özelleştirilebilir dashboard\'lar.', 1, 1, NOW(), NOW()),

-- 2. Proje Yönetim Sistemi
('Proje Yönetim Sistemi', 'proje-yonetim-sistemi', 'Kapsamlı Proje ve Görev Yönetimi', 'İnşaattan bilişime, İK\'dan Ar-Ge\'ye işinize ait tüm proje ve görevlendirmelerinizi verimli ve işbirliğine dayalı şekilde yönetmeniz için tasarlandı. Proje planlama, kaynak yönetimi, zaman takibi, maliyet kontrolü ve ekip işbirliği özelliklerini tek platformda sunuyoruz. Gantt şemaları, agile metodolojiler ve detaylı raporlama ile projelerinizi başarıyla tamamlayın.', 'fas fa-project-diagram', 'documents/product/F8791974-79B4-4384-8276173C782855A6.webp', 'Proje Yönetim Sistemi - PMS Yazılımı', 'Workcube PMS ile proje ve görevlerinizi etkin yönetin. İnşaat, bilişim, Ar-Ge projeleriniz için kapsamlı çözüm.', 1, 2, NOW(), NOW()),

-- 3. İş Süreçleri Yönetimi
('İş Süreçleri Yönetimi', 'bpm-is-surecleri-workflow-chatflow', 'BPM - Workflow ve Chatflow', 'Workcube %100 süreç bazlı bir iş yazılımıdır. Organizasyonun tüm birimlerinin, çalışanların, tedarikçilerin ve müşterilerin iş akışlarıyla çalışmalarına olanak sağlar. İş süreçlerinizi modelleyin, otomatikleştirin ve optimize edin. Onay mekanizmaları, eskalasyon kuralları ve entegre iletişim araçlarıyla iş akışlarınızı hızlandırın.', 'fas fa-sitemap', 'documents/product/8A2EB966-CB26-4DBD-AA48DA8C2947DCC1.webp', 'İş Süreçleri Yönetimi - BPM & Workflow', 'Workcube BPM ile iş süreçlerinizi otomatikleştirin. Workflow, chatflow ve süreç optimizasyonu.', 1, 3, NOW(), NOW()),

-- 4. Finans / Muhasebe / Bütçe
('Finans / Muhasebe / Bütçe', 'finans-muhasebe-butce-yonetimi', 'Kapsamlı Finansal Yönetim Sistemi', 'Her işlemi 3 para birimi ile yapar ve gerçek zamanlı IFRS ve tek düzen muhasebe kayıtları tutar. Mali tablolar, nakit akış yönetimi, bütçe planlama ve takibi, borç-alacak yönetimi, banka mutabakatı ve detaylı finansal raporlama özellikleriyle mali süreçlerinizi tam kontrol altında tutun.', 'fas fa-calculator', 'documents/product/3924E6D1-F4D7-4D4C-8A851890007E06E3.webp', 'Finans ve Muhasebe Yönetimi - ERP Modülü', 'Workcube Finans modülü ile IFRS uyumlu muhasebe, 3 para birimi desteği, bütçe yönetimi ve finansal raporlama.', 1, 4, NOW(), NOW()),

-- 5. Satış / Tedarik / Dağıtım
('Satış / Tedarik / Dağıtım', 'erp-satis-satinalma-dagitim-sd-scm', 'Tedarik Zinciri Yönetimi', 'Tedarikten teslimata tüm süreçlerinizi yönetebileceğiniz fonksiyonları sunar. Satış siparişleri, satın alma talepleri, stok yönetimi, depo operasyonları, lojistik planlama ve tedarikçi ilişkileri yönetimini entegre bir şekilde gerçekleştirin. Tedarik zincirini optimize edin ve operasyonel maliyetleri düşürün.', 'fas fa-truck', 'documents/product/AC5EC9A0-B3CB-4AFD-97C34DA1CB5C9F6D.webp', 'Satış ve Tedarik Zinciri Yönetimi - SCM', 'Workcube SCM ile satış, satın alma, dağıtım süreçlerinizi yönetin. Tedarikten teslimata entegre çözüm.', 1, 5, NOW(), NOW()),

-- 6. Intranet / İçerik Yönetimi
('Intranet / İçerik Yönetimi', 'cms-intranet-icerik-yonetimi', 'Kurumsal İçerik Yönetim Sistemi', 'Workcube CMS, web sitesi sahip olma ve yaşatma maliyetlerinizi belirgin biçimde düşürür. Kullanıcı dostu editör ile içerik oluşturun, çoklu dil desteği ile global erişim sağlayın, medya kütüphanesi ile dijital varlıklarınızı yönetin. SEO uyumlu yapısı ve responsive tasarımı ile modern web deneyimi sunun.', 'fas fa-globe', 'documents/product/4CDE17A7-C622-4F06-AF55A11F45E6805E.webp', 'CMS ve Intranet Çözümü - İçerik Yönetimi', 'Workcube CMS ile web sitenizi ve kurumsal intranet\'inizi yönetin. Düşük maliyet, kolay kullanım.', 1, 6, NOW(), NOW()),

-- 7. Fiziki Varlık Yönetimi
('Fiziki Varlık Yönetimi', 'pam-fiziki-varlik-tesis-yonetimi-tamir-bakim', 'Tesis ve Varlık Yönetimi', 'Şirket içerisindeki fiziki varlıkların kayıtlarının tutulmasını ve tüm tamir-bakım işlerinin merkezi olarak yürütülmesini sağlar. Demirbaş takibi, periyodik bakım planları, arıza yönetimi, yedek parça stoğu kontrolü ve maliyet analizi ile varlıklarınızın ömrünü uzatın ve bakım maliyetlerini optimize edin.', 'fas fa-tools', 'documents/product/A359C740-36E7-46A3-A5365D5E0A6A622F.webp', 'Fiziki Varlık Yönetimi - PAM & CMMS', 'Workcube PAM ile demirbaş, tesis ve bakım yönetimi. Tamir-bakım süreçlerini merkezi platformda yönetin.', 1, 7, NOW(), NOW()),

-- 8. Üretim
('Üretim', 'uretim-planlama-mrp-erp-mm', 'Üretim Planlama ve Yönetimi', 'Üretim Tasarımı, Planlaması ve Yönetimi. MRP (Malzeme İhtiyaç Planlaması), kapasite planlama, üretim emri yönetimi, kalite kontrol, iş istasyonu takibi ve üretim maliyetlendirmesi ile üretim süreçlerinizi optimize edin. Reçete yönetimi, rota tanımlama ve detaylı üretim raporlaması özellikleriyle verimli üretim yapın.', 'fas fa-industry', 'documents/product/0556CD99-5DC1-4EB0-8637B9D6D8ECE186.webp', 'Üretim Yönetimi - MRP & ERP', 'Workcube Üretim modülü ile üretim planlama, MRP, kapasite yönetimi ve üretim takibi.', 1, 8, NOW(), NOW()),

-- 9. Eğitim Yönetimi
('Eğitim Yönetimi', 'lms-egitim-yonetimi', 'Öğrenme Yönetim Sistemi - LMS', 'Workcube Eğitim Yönetimi Sistemi ile çalışan, partner ve hatta müşterileriniz için eğitimler planlayabilirsiniz. Online eğitim içerikleri oluşturun, eğitim takvimi planlayın, katılımcı takibi yapın, sınavlar ve testler düzenleyin, sertifika yönetimi gerçekleştirin. E-learning platform özellikleriyle kurumsal gelişimi destekleyin.', 'fas fa-graduation-cap', 'documents/product/7E1FE30C-1832-410C-A0AE98BE8DD562A5.webp', 'Eğitim Yönetimi - LMS Platformu', 'Workcube LMS ile çalışan, partner ve müşteri eğitimlerini yönetin. Online eğitim ve sertifika sistemi.', 1, 9, NOW(), NOW()),

-- 10. B2B / B2C Framework
('B2B / B2C Framework', 'b2b-b2c-framework-omnichannel', 'Omnichannel E-Ticaret Çözümü', 'Artık internet iş dünyasının ayrılmaz bir parçası. Tanıtımdan satışa, satın almadan eğitime işinizin önemli bir bölümünde müşterileriniz, tedarikçileriniz, satış kanalınız veya takipçilerinizle internet üzerinden buluşuyorsunuz. B2B ve B2C e-ticaret altyapısı, çoklu kanal satış yönetimi, ödeme entegrasyonları ve müşteri deneyimi optimizasyonu sunar.', 'fas fa-shopping-cart', 'documents/product/82245154-55ED-475F-A6705AE102169BF3.webp', 'B2B & B2C E-Ticaret Framework', 'Workcube B2B/B2C framework ile omnichannel satış yapın. E-ticaret, müşteri portali ve tedarikçi entegrasyonu.', 1, 10, NOW(), NOW()),

-- 11. İnsan Kaynakları
('İnsan Kaynakları', 'insan-kaynaklari-ik', 'Kapsamlı İK Yönetim Sistemi', 'İşe alımdan emekliliğe kadar tüm İK süreçlerini kapsar. İşe alım, bordro, özlük işleri, performans yönetimi, eğitim planlama, izin yönetimi, puantaj, vardiya planlama, organizasyon şeması, yetkinlik yönetimi ve İK analitiği ile insan kaynakları süreçlerinizi dijitalleştirin ve optimize edin.', 'fas fa-users', 'documents/product/2FDD27FA-2033-4092-A542862DB5D04873.webp', 'İnsan Kaynakları Yönetimi - HRMS', 'Workcube İK modülü ile işe alımdan emekliliğe tüm İK süreçlerini yönetin. Bordro, performans, eğitim ve daha fazlası.', 1, 11, NOW(), NOW()),

-- 12. Müşteri İlişkileri
('Müşteri İlişkileri', 'crm-musteri-iliskileri-yonetimi', 'CRM - Müşteri İlişkileri Yönetimi', 'Workcube, hedef kitle analizinden satış sonrası hizmetlerin yönetimine kurumlarda müşteri ilişkileri yönetiminin tüm süreç ve aşamalarını destekler. Müşterilerinizle olan iletişim ve ilişkinizi daha güçlü, daha etkin hale getirmek için ihtiyaç duyduğunuz tüm araçları size sunar. İşletmenizin satış, pazarlama ve servis destek operasyonlarını etkin ve verimli bir biçimde yönetmenizi sağlar. Potansiyel müşteri takibi, fırsat yönetimi, kampanya yönetimi, servis masası ve müşteri sadakati programları.', 'fas fa-handshake', 'documents/product/AB124FC7-2F4C-4EDD-8BC34659A65498E3.webp', 'CRM - Müşteri İlişkileri Yönetimi', 'Workcube CRM ile satış, pazarlama ve servis süreçlerini yönetin. Hedef kitle analizinden satış sonrasına kadar.', 1, 12, NOW(), NOW()),

-- 13. Abonelik Yönetimi
('Abonelik Yönetimi', 'abonelik-yonetimi', 'Subscription Management System', 'Abonelik yönetimi ile ilgili tüm süreçleri etkin bir biçimde yönetmek için ihtiyaç duyduğunuz tüm bileşenler. Abonelik planları oluşturma, otomatik faturalandırma, yenileme yönetimi, üyelik seviyeleri, kullanım takibi, iptal ve geri ödeme süreçleri, müşteri portali ve abonelik analitiği ile yinelenen gelir modelinizi profesyonelce yönetin.', 'fas fa-sync-alt', 'documents/product/B20A12E4-70B4-41BC-A0383768FBF67278.webp', 'Abonelik Yönetimi - Subscription Management', 'Workcube Abonelik Yönetimi ile tekrarlayan gelir modelinizi yönetin. Otomatik faturalandırma ve yenileme.', 1, 13, NOW(), NOW());

-- Index ekleyelim (performans için)
CREATE INDEX idx_modules_is_active ON modules(is_active);
CREATE INDEX idx_modules_order ON modules(`order`);
CREATE INDEX idx_modules_slug ON modules(slug);
