@extends('layout.master')

@section('content')
    <!-- Header Breadcrumb -->



    <div class="container position-relative py-5" style="min-height: 643px;" id="home">
        <svg class="custom-svg-style-1" viewBox="0 0 180 470" x="0px" y="0px" width="100%" height="100%">
            <g>
                <path id="shape_one_start" opacity="0.098" fill="#00a3d5"
                    d="M 847.5703 23.7939 C 847.5703 23.7939 581.8154 -245.1675 394.2842 33.9375 C 305.4043 166.2183 345.0537 358.8125 253.5615 364.6631 C 162.0684 370.5146 129.5303 342.542 70.9883 383.9072 C 3.0254 431.9297 17.8926 499.2158 17.8926 499.2158 L 847.5703 499.2158 L 847.5703 23.7939 Z" />
                <path id="shape_one_end" opacity="0.098" fill="#00a3d5"
                    d="m847.5703,24.7939c0,0 -85.7549,-346.9614 -273.2861,-67.8564c149.1201,176.2808 52.7695,313.875 -46.7227,312.7256c-99.4922,-1.1494 -59.0312,107.8789 -117.5732,149.2441c-67.9629,48.0225 -186.0957,167.3086 -207.0957,167.3086l644.6777,-86l0,-475.4219z"
                    style="visibility:hidden" />

                <path id="shape_two_start" opacity="0.149" fill="#00a3d5"
                    d="M 847.5703 239.9771 C 847.5703 239.9771 806.873 141.5913 733.1348 164.937 C 622.249 200.0459 648.416 318.083 566.6426 342.042 C 484.8682 365.999 247.9814 345.0283 168.6406 371.8037 C 89.3008 398.5781 85.5703 499.3408 85.5703 499.3408 L 847.5693 499.3408 L 847.5703 239.9771 Z" />
                <path id="shape_two_end" opacity="0.149" fill="#00a3d5"
                    d="m907.5703,89.9771c0,0 29.3027,-9.3858 -95.4355,112.9599c-124.7382,122.3457 -254.7188,64.146 -300.4922,167.105c-45.7734,102.959 -79.6612,61.9863 -209.002,106.7617c-129.3408,44.7754 -218.0703,21.5371 -218.0703,21.5371l761.999,0l0.001,-265.3637z"
                    style="visibility:hidden" />
            </g>
        </svg>
        <div class="row align-items-center py-5 p-relative z-index-1">
            <div class="col-lg-6 pt-4 pt-lg-0 mt-5 mt-lg-0 mb-5 mb-lg-0">
                <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
                    <h1 class="mb-4 mb-md-0 mb-xl-3" data-plugin-float-element
                        data-plugin-options="{'startPos': 'none', 'speed': 1, 'transition': true, 'horizontal': false}">
                        <strong>Workcube ERP ile</strong> işletmenizi dijitalleştirin
                    </h1>
                </div>
                <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">
                    <p class="text-4 mb-5 mb-md-2" data-plugin-float-element
                        data-plugin-options="{'startPos': 'none', 'speed': 0.5, 'transition': true, 'horizontal': false}">
                        Türkiye'nin önde gelen Workcube ERP bayisi olarak, işletmelerin dijital dönüşüm
                        sürecinde
                        güçlü teknoloji çözümleri ve profesyonel destek hizmetleri sunuyoruz.</p>
                </div>
                <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800">
                    <a data-hash data-hash-offset="0" data-hash-offset-lg="95" href="#pricing"
                        class="btn btn-primary btn-outline btn-rounded font-weight-semibold text-4 btn-px-5 btn-py-2"
                        data-plugin-float-element
                        data-plugin-options="{'startPos': 'none', 'speed': 0.3, 'transition': true, 'horizontal': false}">Hemen
                        Başlayın</a>
                </div>
            </div>
            <div class="col-lg-6 text-center mt-5 appear-animation" data-appear-animation="fadeInRightShorter"
                data-appear-animation-delay="550">
                <img src="{{ asset('porto/simages/erp_main.png') }}" class="img-fluid" alt=""
                    data-plugin-float-element
                    data-plugin-options="{'startPos': 'none', 'speed': 8, 'transition': true, 'horizontal': true}" />
            </div>
        </div>
    </div>

    <section class="page-header page-header-modern bg-color-primary page-header-lg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 align-self-center p-static order-2 text-center">
                    <h1 class="text-light font-weight-bold text-8">Hakkımızda</h1>
                    <span class="sub-title text-light">Dijital Dönüşümde Güvenilir Ortağınız</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <div class="container py-5">

        <!-- Şirket Hikayesi -->
        <div class="row py-5">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="300">
                    <h2 class="text-color-primary font-weight-bold text-6 mb-4">Şirket Hikayemiz</h2>
                    <p class="text-4 mb-4">
                        Günümüzün hızla değişen iş dünyasında, başarının temel taşı güçlü yazılım altyapısı ve etkili
                        danışmanlık hizmetleriyle atılmaktadır.
                    </p>
                    <p class="mb-4">
                        Bu ihtiyaçtan yola çıkarak kurulan firmamız, sektördeki deneyimi ve uzman kadrosuyla işletmelere
                        geleceğe yönelik çözümler sunmayı hedeflemektedir.
                    </p>
                    <p class="mb-4">
                        Şirketimiz halen <strong>Workcube Ankara Çözüm Ortaklığını</strong> sürdürmektedir.
                        Müşteri odaklı yaklaşımımız sayesinde her bir işletmenin özgün ihtiyaçlarına uygun
                        çözümler üretirken, teknolojinin ve yenilikçiliğin gücünü en etkili şekilde kullanmayı
                        sürdürmekteyiz.
                    </p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300">
                    <img src="{{ asset('porto/simages/about_company.jpg') }}" class="img-fluid rounded shadow-lg"
                        alt="Şirket Hikayesi">
                </div>
            </div>
        </div>

        <!-- Hizmetlerimiz -->
        <div class="row py-5 bg-light rounded">
            <div class="col-12">
                <div class="text-center mb-5">
                    <h2 class="text-color-primary font-weight-bold text-6 mb-3">Hizmetlerimiz</h2>
                    <p class="text-4">İşletmenizin ihtiyaçlarına yönelik kapsamlı çözümler sunuyoruz</p>
                </div>
            </div>

            <div class="col-lg-6 mb-4">
                <div class="feature-box feature-box-style-2 appear-animation" data-appear-animation="fadeInUpShorter"
                    data-appear-animation-delay="300">
                    <div class="feature-box-icon">
                        <i class="icons icon-settings text-color-primary text-6"></i>
                    </div>
                    <div class="feature-box-info">
                        <h4 class="font-weight-bold text-4 mb-2">İdari Danışmanlık Hizmetleri</h4>
                        <p>İşletme stratejisi geliştirme, yönetim danışmanlığı ve süreç optimizasyonu
                            hizmetleriyle işletmelerin stratejik hedeflerine ulaşmalarına destek oluyoruz.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 mb-4">
                <div class="feature-box feature-box-style-2 appear-animation" data-appear-animation="fadeInUpShorter"
                    data-appear-animation-delay="500">
                    <div class="feature-box-icon">
                        <i class="icons icon-graph text-color-primary text-6"></i>
                    </div>
                    <div class="feature-box-info">
                        <h4 class="font-weight-bold text-4 mb-2">Raporlama ve Analiz Hizmetleri</h4>
                        <p>Veri analizi ve raporlama çözümleriyle işletmelerin karar verme süreçlerini
                            destekliyoruz. Gerçek zamanlı analitik ve öngörülebilir raporlar sunuyoruz.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 mb-4">
                <div class="feature-box feature-box-style-2 appear-animation" data-appear-animation="fadeInUpShorter"
                    data-appear-animation-delay="700">
                    <div class="feature-box-icon">
                        <i class="icons icon-support text-color-primary text-6"></i>
                    </div>
                    <div class="feature-box-info">
                        <h4 class="font-weight-bold text-4 mb-2">Teknik Destek Hizmetleri</h4>
                        <p>7/24 teknik destek hizmetimizle işletmenizin iş sürekliliğini garanti altına alıyoruz.
                            Uzman ekibimiz her zaman yanınızda.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 mb-4">
                <div class="feature-box feature-box-style-2 appear-animation" data-appear-animation="fadeInUpShorter"
                    data-appear-animation-delay="900">
                    <div class="feature-box-icon">
                        <i class="icons icon-graduation text-color-primary text-6"></i>
                    </div>
                    <div class="feature-box-info">
                        <h4 class="font-weight-bold text-4 mb-2">Eğitim Ve Uygulama Hizmetleri</h4>
                        <p>Yeni sisteme geçiş sürecinde ekibinizin hızla adapte olması için kapsamlı
                            eğitim programları ve uygulama desteği sağlıyoruz.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 mb-4">
                <div class="feature-box feature-box-style-2 appear-animation" data-appear-animation="fadeInUpShorter"
                    data-appear-animation-delay="1100">
                    <div class="feature-box-icon">
                        <i class="icons icon-briefcase text-color-primary text-6"></i>
                    </div>
                    <div class="feature-box-info">
                        <h4 class="font-weight-bold text-4 mb-2">ERP - MRP Proje Danışmanlığı</h4>
                        <p>İşletmelerin verimliliğini artırmak ve iş süreçlerini optimize etmek için
                            kullanılan yazılım sistemleri konusunda profesyonel danışmanlık hizmeti sunuyoruz.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Workcube Çözümleri -->
        <div class="row py-5">
            <div class="col-12">
                <div class="text-center mb-5">
                    <h2 class="text-color-primary font-weight-bold text-6 mb-3">Workcube Çözümleri</h2>
                    <p class="text-4">İşletmenizin her ihtiyacına uygun Workcube modülleri</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body text-center p-4">
                        <div class="mb-3">
                            <i class="fas fa-cogs text-color-primary text-6"></i>
                        </div>
                        <h5 class="font-weight-bold mb-3">Workcube ERP</h5>
                        <p class="text-3">Entegre işletme kaynak planlaması sistemi</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body text-center p-4">
                        <div class="mb-3">
                            <i class="fas fa-users text-color-primary text-6"></i>
                        </div>
                        <h5 class="font-weight-bold mb-3">Workcube CRM</h5>
                        <p class="text-3">Müşteri ilişkileri yönetim sistemi</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body text-center p-4">
                        <div class="mb-3">
                            <i class="fas fa-user-tie text-color-primary text-6"></i>
                        </div>
                        <h5 class="font-weight-bold mb-3">Workcube HR</h5>
                        <p class="text-3">İnsan kaynakları yönetim sistemi</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body text-center p-4">
                        <div class="mb-3">
                            <i class="fas fa-shield-alt text-color-primary text-6"></i>
                        </div>
                        <h5 class="font-weight-bold mb-3">Workcube PAM</h5>
                        <p class="text-3">Fiziki varlık yönetim sistemi</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body text-center p-4">
                        <div class="mb-3">
                            <i class="fas fa-project-diagram text-color-primary text-6"></i>
                        </div>
                        <h5 class="font-weight-bold mb-3">Workcube PMS</h5>
                        <p class="text-3">Proje yönetim sistemi</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body text-center p-4">
                        <div class="mb-3">
                            <i class="fas fa-graduation-cap text-color-primary text-6"></i>
                        </div>
                        <h5 class="font-weight-bold mb-3">Workcube LMS</h5>
                        <p class="text-3">Öğrenme yönetim sistemi</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Misyon & Vizyon -->
        <div class="row py-5">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="card bg-color-primary text-white border-0 h-100">
                    <div class="card-body p-5">
                        <div class="text-center mb-4">
                            <i class="fas fa-bullseye text-white text-6"></i>
                        </div>
                        <h3 class="font-weight-bold text-center mb-4">Misyonumuz</h3>
                        <p class="text-3 text-center">
                            Kurum ve kuruluşlardan gelecek yazılım ve bilişim ürünleri taleplerine,
                            profesyonel anlamda cevap verebilen ve bunu kapsamlı bir danışmanlık
                            misyonuyla yerine getiren, kurumsallaşmak ve verimliliği artırmak için
                            hizmet talep eden tüm kurum ve kuruluşlar için, yeniliğe ve verimliliğe
                            açılan kapı olmak.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card bg-color-secondary text-white border-0 h-100">
                    <div class="card-body p-5">
                        <div class="text-center mb-4">
                            <i class="fas fa-eye text-white text-6"></i>
                        </div>
                        <h3 class="font-weight-bold text-center mb-4">Vizyonumuz</h3>
                        <p class="text-3 text-center">
                            Hizmet sunduğumuz tüm kurum ve kuruluşlara, kurumsal yönetim, verimlilik
                            ve öngörülebilirlik alanlarında, çok yönlü ve profesyonel çözümler
                            geliştirebilen, markalaşmış bir danışmanlık firması olmak.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Değerlerimiz ve İlkelerimiz -->
        <div class="row py-5 bg-light rounded">
            <div class="col-12">
                <div class="text-center mb-5">
                    <h2 class="text-color-primary font-weight-bold text-6 mb-3">Değerlerimiz</h2>
                    <p class="text-4">Başarımızın temelini oluşturan değerler</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="text-center">
                    <div class="icon-box icon-box-primary mb-3">
                        <div class="icon-box-icon">
                            <i class="fas fa-handshake text-6"></i>
                        </div>
                    </div>
                    <h5 class="font-weight-bold mb-2">Güvenilirlik</h5>
                    <p class="text-3">Güvene dayalı insani ilişkiler</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="text-center">
                    <div class="icon-box icon-box-primary mb-3">
                        <div class="icon-box-icon">
                            <i class="fas fa-star text-6"></i>
                        </div>
                    </div>
                    <h5 class="font-weight-bold mb-2">Kalite</h5>
                    <p class="text-3">Yüksek kalite standartları</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="text-center">
                    <div class="icon-box icon-box-primary mb-3">
                        <div class="icon-box-icon">
                            <i class="fas fa-lightbulb text-6"></i>
                        </div>
                    </div>
                    <h5 class="font-weight-bold mb-2">Yenilikçilik</h5>
                    <p class="text-3">Sürekli yenilenen yapılanma</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="text-center">
                    <div class="icon-box icon-box-primary mb-3">
                        <div class="icon-box-icon">
                            <i class="fas fa-chart-line text-6"></i>
                        </div>
                    </div>
                    <h5 class="font-weight-bold mb-2">Verimlilik</h5>
                    <p class="text-3">Sürekli pozitif adımlar</p>
                </div>
            </div>
        </div>

        <!-- Sektörel Uygulamalar -->
        <div class="row py-5">
            <div class="col-12">
                <div class="text-center mb-5">
                    <h2 class="text-color-primary font-weight-bold text-6 mb-3">Sektörel Uygulamalar</h2>
                    <p class="text-4">Farklı sektörlere özel çözümler geliştiriyoruz</p>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-6 mb-4">
                <div class="text-center">
                    <div class="bg-color-light rounded p-4 mb-3">
                        <i class="fas fa-industry text-color-primary text-5"></i>
                    </div>
                    <h6 class="font-weight-bold">Üretim Odaklı İşletmeler</h6>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-6 mb-4">
                <div class="text-center">
                    <div class="bg-color-light rounded p-4 mb-3">
                        <i class="fas fa-boxes text-color-primary text-5"></i>
                    </div>
                    <h6 class="font-weight-bold">Toptan Ticaret</h6>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-6 mb-4">
                <div class="text-center">
                    <div class="bg-color-light rounded p-4 mb-3">
                        <i class="fas fa-store text-color-primary text-5"></i>
                    </div>
                    <h6 class="font-weight-bold">Perakendecilik</h6>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-6 mb-4">
                <div class="text-center">
                    <div class="bg-color-light rounded p-4 mb-3">
                        <i class="fas fa-concierge-bell text-color-primary text-5"></i>
                    </div>
                    <h6 class="font-weight-bold">Hizmet Sektörü</h6>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-6 mb-4">
                <div class="text-center">
                    <div class="bg-color-light rounded p-4 mb-3">
                        <i class="fas fa-hard-hat text-color-primary text-5"></i>
                    </div>
                    <h6 class="font-weight-bold">Taahhüt Sektörü</h6>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-6 mb-4">
                <div class="text-center">
                    <div class="bg-color-light rounded p-4 mb-3">
                        <i class="fas fa-hands-helping text-color-primary text-5"></i>
                    </div>
                    <h6 class="font-weight-bold">Sivil Toplum</h6>
                </div>
            </div>
        </div>

        <!-- Çağrı-İçin-Eylem -->
        <div class="row py-5">
            <div class="col-12">
                <div class="bg-color-primary rounded text-center py-5 px-4">
                    <h3 class="text-white font-weight-bold mb-3">Dijital Dönüşüme Hazır Mısınız?</h3>
                    <p class="text-white text-4 mb-4">
                        İşletmenizin potansiyelini en üst düzeye çıkarmak, kurumsal bir yapılanmayla
                        yarınlara hazırlanmak için bizimle iletişime geçin.
                    </p>
                    <div class="row justify-content-center">
                        <div class="col-auto">
                            <a href="#contact"
                                class="btn btn-light btn-rounded font-weight-semibold text-3 btn-px-5 btn-py-3 me-3">
                                İletişime Geçin
                            </a>
                        </div>
                        <div class="col-auto">
                            <a href="#demo"
                                class="btn btn-outline btn-light btn-rounded font-weight-semibold text-3 btn-px-5 btn-py-3">
                                Demo İsteyin
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
