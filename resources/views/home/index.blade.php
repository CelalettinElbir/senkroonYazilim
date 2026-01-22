@extends('layout.master')
@section('content')
    <div class="owl-carousel owl-carousel-light owl-carousel-light-init-fadeIn owl-theme manual nav-style-1 nav-arrows-thin nav-inside nav-inside-plus nav-dark nav-lg nav-font-size-lg rounded-nav nav-borders show-nav-hover mb-0"
        data-plugin-options="{'autoplay': true, 'autoplayTimeout': 7000}"
         style="height: 650px; background-color:#f4f4f4" >
        <div class="owl-stage-outer">
            <div class="owl-stage">

                <!-- Carousel Slide 1 -->
                @foreach ($sliders as $slider)
                    <div class="owl-item p-relative overflow-hidden {{ $loop->first ? 'active' : '' }}">
                        <div  class=" border-radius-2 p-relative z-index-1 overflow-hidden">
                            <div class="custom-el-2 custom-pos-1">
                                <img class="img-fluid opacity-2 opacity-hover-2" src="{{ asset('porto/simages/waves.svg') }}"
                                    alt="">
                            </div>
                            <div class="container">
                                <div class="row justify-content-center align-items-center" style="min-height: 400px;" >
                                    <div class="col-lg-5 text-center text-lg-start px-2 px-lg-4 order-2 order-lg-1">

                                        <h1 class="text-10 text-lg-12 font-weight-semibold line-height-1  mb-4 appear-animation"
                                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                                            {{ $slider->title }}
                                        </h1>
                                        <div class="appear-animation" data-appear-animation="fadeInUpShorter"
                                            data-appear-animation-delay="400">
                                            <h4 class="text-5 text-lg-6 font-weight-light mb-4 appear-animation"
                                                data-appear-animation="fadeInUpShorter" data-appear-animation-delay="0">
                                                {{ $slider->subtitle }}
                                            </h4>

                                            <p class="text-4 text-lg-5 pe-lg-5 line-height-5 text-dark opacity-7 mb-2 mb-lg-4">
                                                {{ $slider->description }}
                                            </p>
                                        </div>
                                        @if($slider->button_text )
                                            <div class="appear-animation" data-appear-animation="fadeIn"
                                                data-appear-animation-delay="600">
                                                <a href="{{ $slider->button_link }}" data-hash data-hash-offset="0"
                                                    data-hash-offset-lg="0"
                                                    class="btn btn-light btn-effect-2 transition-3ms border-0 btn-rounded btn-xl text-3 py-4 btn-with-arrow-solid mt-3">
                                                    <strong
                                                        class="d-inline-flex text-dark font-weight-medium text-3-5 text-lg-4 me-3 px-3">{{ $slider->button_text }}</strong>
                                                    <span class="bg-transparent box-shadow-6"><i
                                                            class="fa-solid fa-arrow-right text-dark"></i></span>
                                                </a>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="col-8 col-lg-7 mt-1 mt-lg-3 px-2 px-md-5 ps-xl-5 pe-xxl-0 order-1 order-lg-2">
                                        <div class="p-relative">
                                            <div class="custom-mask-img custom-mask-img-1">
                                                <img class="img-fluid" src="{{ asset('storage/' . $slider->background_image) }}"
                                                    loading="lazy" alt="{{ $slider->title }}">
                                            </div>

                                            <div class="p-absolute bg-dark custom-stamp-1 appear-animation"
                                                data-appear-animation="blurIn" data-appear-animation-delay="800">
                                                <div class="rotate-animation">
                                                    <svg viewBox="0 0 300 300" xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink">
                                                        <path id="curvedText1" fill="none" stroke="none"
                                                            d="M 32.550491,148.48008 A -108.15144,-108.15144 0 0 1 140.70194,40.328644 -108.15144,-108.15144 0 0 1 248.85338,148.48008 -108.15144,-108.15144 0 0 1 140.70194,256.63153 -108.15144,-108.15144 0 0 1 32.550491,148.48008 Z" />
                                                        <text font-size="20" fill="#FFF" letter-spacing="0"
                                                            font-family="Poppins, Arial, sans-serif" font-weight="semibold">
                                                            <textPath xlink:href="#curvedText1">SENKROON YAZILIM - WORKCUBE ERP
                                                                BAAYI - ANKARA - </textPath>
                                                        </text>
                                                    </svg>
                                                </div>
                                                {{-- <div class="p-absolute transform3dxy-n50 left-50pct top-50pct">
                                                    <img width="58" height="58" src="{{ asset('') }}" alt="" data-icon
                                                        data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary p-relative bottom-2 right-3'}" />
                                                </div> --}}
                                            </div>

                                            {{-- <div class="p-absolute text-end custom-el-1 appear-animation"
                                                data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800">
                                                <p><mark
                                                        class="text-dark mark mark-color mark-color-light mark-pos-2 mark-height-50 p-0">100%</mark>
                                                </p>
                                                <em class="d-block custom-font-tertiary"><mark
                                                        class="text-dark mark mark-color mark-color-light mark-pos-2 mark-height-100 p-0">Güvenilir</mark></em>
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach



            </div>
        </div>
        <div class="owl-nav">
            <button type="button" role="presentation" class="owl-prev" aria-label="Previous"></button>
            <button type="button" role="presentation" class="owl-next" aria-label="Next"></button>
        </div>
        @if ($sliders->count() > 1)
            <div class="owl-dots mb-5">
                @foreach ($sliders as $slider)
                    <button role="button" class="owl-dot {{ $loop->first ? 'active' : '' }}"><span></span></button>
                @endforeach
            </div>
        @endif
    </div>



    <section class="section bg-secondary border-0 m-0">
        <div class="container">
            <div class="row align-items-center py-3">
                <div class="col-lg-8">
                    <div class="call-to-action-content">
                        <h3 class="text-white mb-2">
                            <strong class="font-weight-extra-bold">Ücretsiz</strong> Workcube ERP demo için
                            <strong class="font-weight-extra-bold">Teklif Al!</strong>
                        </h3>
                        <p class="mb-0 text-white opacity-8">
                            <i class="fas fa-clock me-2"></i>30 dakikalık online demoda Workcube ERP'nin
                            işletmenize uygun çözümlerini keşfedin
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 text-center text-lg-end">
                    <div class="call-to-action-btn">
                        <a href="{{ url('iletisim') }}"
                            class="btn btn-light font-weight-bold text-primary text-3 btn-px-5 btn-py-3 popup-with-form">
                            <i class="fas fa-calendar-alt me-2"></i>Teklif Al
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Randevu Form Modal -->
        <form id="randevu-form" class="contact-form white-popup-block mfp-hide" method="POST">
            <div class="row mt-2">
                <div class="col-sm-12">
                    <h2 class="font-weight-bold text-center text-7 mb-4">Ücretsiz Workcube ERP Demo</h2>
                    <p class="text-center mb-4">30 dakikalık online demoda Workcube ERP'nin işletmenize özel
                        çözümlerini keşfedin.</p>
                </div>
            </div>

            <div class="custom-form-style-1 custom-form-style-1-rounded">
                <div class="row">
                    <div class="form-group col-lg-6 mb-3">
                        <input type="text" name="name" class="form-control" value="" placeholder="Adınız Soyadınız*"
                            required>
                    </div>
                    <div class="form-group col-lg-6 mb-3">
                        <input type="text" name="company" class="form-control" value="" placeholder="Şirket Adı*" required>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-lg-6 mb-3">
                        <input type="email" name="email" class="form-control" value="" placeholder="E-posta*" required>
                    </div>
                    <div class="form-group col-lg-6 mb-3">
                        <input type="tel" name="phone" class="form-control" value="" placeholder="Telefon*" required>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-lg-6 mb-3">
                        <select name="sector" class="form-control" required>
                            <option value="">Sektörünüz*</option>
                            <option value="imalat">İmalat</option>
                            <option value="ticaret">Ticaret</option>
                            <option value="hizmet">Hizmet</option>
                            <option value="lojistik">Lojistik</option>
                            <option value="teknoloji">Teknoloji</option>
                            <option value="diger">Diğer</option>
                        </select>
                    </div>
                    <div class="form-group col-lg-6 mb-3">
                        <select name="employee_count" class="form-control" required>
                            <option value="">Çalışan Sayısı*</option>
                            <option value="1-10">1-10 kişi</option>
                            <option value="11-50">11-50 kişi</option>
                            <option value="51-100">51-100 kişi</option>
                            <option value="101+">100+ kişi</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col mb-3">
                        <textarea name="message" class="form-control" rows="4"
                            placeholder="Workcube ERP hakkında merak ettiklerinizi ve işletmenizin ihtiyaçlarını belirtiniz..."></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col mb-0">
                        <input type="submit"
                            class="btn btn-primary font-weight-semibold text-center text-4 btn-py-3 w-100 mb-3"
                            value="Demo Talebimi Gönder" data-loading-text="Gönderiliyor...">
                    </div>
                </div>
                <div class="row">
                    <div class="col text-center">
                        <small class="text-muted">
                            <i class="fas fa-shield-alt me-1"></i>Bilgileriniz güvenli, sadece randevu
                            koordinasyonu için kullanılacaktır.
                        </small>
                    </div>
                </div>
            </div>
        </form>
    </section>






    <!-- about us  -->
    <section class="section section-default border-0  appear-animation animated fadeIn appear-animation-visible"
        data-appear-animation="fadeIn" data-appear-animation-delay="750" style="animation-delay: 750ms;">
        <div class="container py-4">

            <div class="row align-items-center">

                <div class="col-md-6">
                    <div class="overflow-hidden mb-2">
                        <h2 class="text-color-primary font-weight-bold text-7 mb-0 pt-0 mt-0 appear-animation animated maskUp appear-animation-visible"
                            data-appear-animation="maskUp" data-appear-animation-delay="1200"
                            style="animation-delay: 1200ms;">Hakkımızda </h2>
                    </div>
                    <div class="appear-animation" data-appear-animation="fadeInLeftShorter"
                        data-appear-animation-delay="300">
                        <p class="text-3 mb-4">
                            Senkroon; ERP danışmanlığı, iş süreçleri ve organizasyon tasarımı, muhasebe & finansal
                            yapılandırma
                            ve Workcube ERP başta olmak üzere kurumsal yazılım çözümlerine odaklanan, işletmelerin uçtan uca
                            dönüşümünü hedefleyen bir iş ortağıdır.
                        </p>
                        <p class=" text-3 mb-4">
                            ERP projeleri, süreç ve organizasyon danışmanlığı, muhasebe–finans modellemesi ile Workcube
                            ERP’nin
                            konumlandırılması ve devreye alınması; ayrıca ihtiyaç duyulan ölçek ve yapılarda Mikro ve Watom
                            yazılımlarının doğru kurgulanması alanlarında entegre hizmet sunuyoruz.
                        </p>
                        <p class=" text-3 mb-4">
                            Sahadaki yönetim ve operasyon tecrübemizi analitik bakış açısı ve teknoloji odaklı
                            yaklaşımımızla
                            birleştirerek; hazır kalıplar yerine kurum kültürünüze ve çalışma biçiminize uygun, size özel iş
                            modelleri tasarlıyoruz. Amacımız; veriye dayalı karar almanızı sağlayan, güvenilir, ölçülebilir
                            ve
                            sürdürülebilir bir yönetim altyapısı kurmak; ERP’yi tek başına bir yazılım değil, işinizin
                            omurgasını güçlendiren stratejik bir araç hâline getirmek.
                        </p>
                    </div>
                </div>


                <div class="col-md-6 appear-animation animated fadeInLeftShorter appear-animation-visible"
                    data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="1000"
                    style="animation-delay: 1000ms;">
                    <div class="owl-carousel owl-theme nav-inside mb-0 owl-loaded owl-drag owl-carousel-init"
                        data-plugin-options="{'items': 1, 'margin': 10, 'animateOut': 'fadeOut', 'autoplay': true, 'autoplayTimeout': 6000, 'loop': true}"
                        style="height: auto;">


                        <div class="owl-stage-outer">
                            <div class="owl-stage"
                                style="transform: translate3d(-932px, 0px, 0px); transition: all; width: 2796px;">


                                <div class="owl-item " style="width: 456px; margin-right: 10px;">
                                    <div>
                                        <img alt="" class="img-fluid"
                                            src="{{ asset('porto/simages/workcube-about-us.png') }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>


    <section class="container py-5" id="services">
        <div class="row mb-5">
            <div class="col text-center">
                <h2 class="font-weight-bold line-height-2 text-7 mb-1">Hizmetlerimiz</h2>
            </div>
        </div>
        <div class="row gx-4 gy-4">
            <div class="col-12 col-md-6 col-lg-4 mb-4 appear-animation" data-appear-animation="fadeInUpShorter"
                data-appear-animation-delay="200">
                <div
                    class="card card-border card-border-top card-border-hover bg-color-light box-shadow-6 box-shadow-hover anim-hover-translate-top-10px transition-3ms h-100">
                    <div class="card-body text-center p-4">
                        <div class="mb-3">
                            <i class="fas fa-cogs text-primary text-6"></i>
                        </div>
                        <h4 class="card-title mb-3 text-5 font-weight-bold">Workcube ERP Satış & Lisanslama</h4>
                        <p class="card-text">Workcube ERP'nin tüm modüllerini uygun fiyatlarla temin edin.
                            Lisanslama, kurulum ve ilk konfigürasyon hizmetlerimizle işe başlayın.</p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4 mb-4 appear-animation" data-appear-animation="fadeInUpShorter"
                data-appear-animation-delay="400">
                <div
                    class="card card-border card-border-top card-border-hover bg-color-light box-shadow-6 box-shadow-hover anim-hover-translate-top-10px transition-3ms h-100">
                    <div class="card-body text-center p-4">
                        <div class="mb-3">
                            <i class="fas fa-project-diagram text-primary text-6"></i>
                        </div>
                        <h4 class="card-title mb-3 text-5 font-weight-bold">Kurulum & Konfigürasyon</h4>
                        <p class="card-text">Uzman ekibimiz Workcube ERP'yi işletmenizin ihtiyaçlarına göre
                            kurar ve konfigüre eder. Hızlı ve sorunsuz başlangıç garantisi.</p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4 mb-4 appear-animation" data-appear-animation="fadeInUpShorter"
                data-appear-animation-delay="600">
                <div
                    class="card card-border card-border-top card-border-hover bg-color-light box-shadow-6 box-shadow-hover anim-hover-translate-top-10px transition-3ms h-100">
                    <div class="card-body text-center p-4">
                        <div class="mb-3">
                            <i class="fas fa-chart-line text-primary text-6"></i>
                        </div>
                        <h4 class="card-title mb-3 text-5 font-weight-bold">Eğitim & Sertifikasyon</h4>
                        <p class="card-text">Kullanıcılarınız için kapsamlı Workcube ERP eğitimleri ve
                            sertifikasyon programları. Sistem kullanımında uzmanlaşma sağlayın.</p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4 mb-4 appear-animation" data-appear-animation="fadeInUpShorter"
                data-appear-animation-delay="800">
                <div
                    class="card card-border card-border-top card-border-hover bg-color-light box-shadow-6 box-shadow-hover anim-hover-translate-top-10px transition-3ms h-100">
                    <div class="card-body text-center p-4">
                        <div class="mb-3">
                            <i class="fas fa-users text-primary text-6"></i>
                        </div>
                        <h4 class="card-title mb-3 text-5 font-weight-bold">7/24 Teknik Destek</h4>
                        <p class="card-text">Workcube ERP kullanımında karşılaştığınız tüm sorunlar için
                            kesintisiz teknik destek hizmeti. Uzman ekibimiz her zaman yanınızda.</p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4 mb-4 appear-animation" data-appear-animation="fadeInUpShorter"
                data-appear-animation-delay="1000">
                <div
                    class="card card-border card-border-top card-border-hover bg-color-light box-shadow-6 box-shadow-hover anim-hover-translate-top-10px transition-3ms h-100">
                    <div class="card-body text-center p-4">
                        <div class="mb-3">
                            <i class="fas fa-chart-bar text-primary text-6"></i>
                        </div>
                        <h4 class="card-title mb-3 text-5 font-weight-bold">Özel Modül Geliştirme</h4>
                        <p class="card-text">Sektörünüze ve işletmenize özel Workcube modülleri geliştiriyoruz.
                            Standart çözümlerin yetmediği durumlarda tam uyumlu eklentiler.</p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4 mb-4 appear-animation" data-appear-animation="fadeInUpShorter"
                data-appear-animation-delay="1200">
                <div
                    class="card card-border card-border-top card-border-hover bg-color-light box-shadow-6 box-shadow-hover anim-hover-translate-top-10px transition-3ms h-100">
                    <div class="card-body text-center p-4">
                        <div class="mb-3">
                            <i class="fas fa-digital-tachograph text-primary text-6"></i>
                        </div>
                        <h4 class="card-title mb-3 text-5 font-weight-bold">Veri Migrasyon Hizmeti</h4>
                        <p class="card-text">Mevcut sisteminizdeki verileri Workcube ERP'ye güvenle taşıyoruz.
                            Veri kaybı olmadan güvenli geçiş sağlıyoruz.</p>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <hr>







    <section class="container mb-5">
        <div class="row">
            <div class="col">
                <div class="row mb-5">
                    <div class="col text-center">
                        <h2 class="font-weight-bold line-height-2 text-7 mb-1">Danışmanlık Alanlarımız</h2>
                        <span class="d-block text-color-dark text-5 pb-2 mb-2 opacity-7">Uzman kadromuzla size özel
                            çözümler sunuyoruz</span>

                    </div>
                </div>

                <div class="container pb-5 mb-5">
                    <div class="row">
                        @foreach ($advisors->take(3) as $advisor)
                            <div class="col-md-6 col-lg-4 mb-4">
                                <div class="card border-0 shadow-sm h-100">
                                    <img src="{{ asset('storage/' . $advisor->image) }}" class="card-img-top"
                                        alt="{{ $advisor->title }}">
                                    <div class="card-body">
                                        <h5 class="card-title font-weight-bold">{{ $advisor->title }}</h5>
                                        <p class="card-text">{!! Str::limit($advisor->description, 100) !!}</p>
                                        @if ($advisor->slug)
                                            <a href="{{ route('advisors.show', $advisor->slug) }}" class="btn btn-primary">Detayları
                                                Görüntüle</a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    @if ($advisors->count() > 3)
                        <div class="row">
                            <div class="col text-center">
                                <a href="{{ route('advisors.index') }}"
                                    class="btn btn-primary btn-outline btn-rounded font-weight-semibold text-3 btn-px-4 btn-py-2">
                                    Tüm Danışmanlık Alanlarını Görüntüle
                                </a>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>


    <section class="container py-5" id="process">
        <div class="row mb-5">
            <div class="col text-center">
                <h2 class="font-weight-bold line-height-2 text-7 mb-1">Nasıl Çalışıyoruz?</h2>
                <span class="d-block text-color-dark text-5 pb-2 mb-4 opacity-7">Her projede aynı disiplinle
                    ilerliyoruz</span>
                <p class="text-4 mb-4">Workcube güçlü bir platform, Senkroon ise onu sizin iş modelinize çeviren
                    mimardır. Hazır şablon dayatmıyor; süreç, organizasyon ve finans yapınızı birlikte analiz
                    ederek Workcube üzerinde kurumunuza özel ekranlar, akışlar ve raporlar tasarlıyoruz.</p>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="process process-vertical py-4">
                    <div class="process-step appear-animation" data-appear-animation="fadeInUpShorter"
                        data-appear-animation-delay="200">
                        <div class="process-step-circle">
                            <strong class="process-step-circle-content">1</strong>
                        </div>
                        <div class="process-step-content">
                            <h4 class="mb-3 text-5 font-weight-bold text-primary">Keşif & Analiz</h4>
                            <p class="mb-0">İşletmenizin mevcut durumunu, ihtiyaçlarını ve hedeflerini detaylı
                                olarak analiz ediyoruz.
                                Hangi Workcube modüllerinin size uygun olacağını, mevcut sistemlerinizle
                                entegrasyon imkanlarını
                                ve özel geliştirme gereksinimlerinizi belirliyoruz.</p>
                        </div>
                    </div>
                    <div class="process-step appear-animation" data-appear-animation="fadeInUpShorter"
                        data-appear-animation-delay="400">
                        <div class="process-step-circle">
                            <strong class="process-step-circle-content">2</strong>
                        </div>
                        <div class="process-step-content">
                            <h4 class="mb-3 text-5 font-weight-bold text-primary">Teklif & Planlama</h4>
                            <p class="mb-0">İhtiyaç analiziniz doğrultusunda size özel Workcube ERP çözümü
                                hazırlayıp
                                detaylı teklif sunuyoruz. Lisans türleri, kurulum süreci, eğitim planı ve
                                destek hizmetleri dahil şeffaf bir fiyatlandırma ile net yol haritası
                                çıkarıyoruz.</p>
                        </div>
                    </div>
                    <div class="process-step appear-animation" data-appear-animation="fadeInUpShorter"
                        data-appear-animation-delay="600">
                        <div class="process-step-circle">
                            <strong class="process-step-circle-content">3</strong>
                        </div>
                        <div class="process-step-content">
                            <h4 class="mb-3 text-5 font-weight-bold text-primary">Kurulum & Konfigürasyon</h4>
                            <p class="mb-0">Workcube ERP'yi işletmenizin altyapısına kuruyoruz ve
                                ihtiyaçlarınıza göre
                                konfigüre ediyoruz. Kullanıcı yetkileri, iş akışları, özel alanlar ve raporları
                                işletmenizin süreçlerine uyacak şekilde ayarlıyor, test ortamında doğruluyoruz.
                            </p>
                        </div>
                    </div>
                    <div class="process-step appear-animation" data-appear-animation="fadeInUpShorter"
                        data-appear-animation-delay="800">
                        <div class="process-step-circle">
                            <strong class="process-step-circle-content">4</strong>
                        </div>
                        <div class="process-step-content">
                            <h4 class="mb-3 text-5 font-weight-bold text-primary">Eğitim & Devreye Alma</h4>
                            <p class="mb-0">Kullanıcılarınız için kapsamlı Workcube ERP eğitimi düzenliyoruz.
                                Teorik ve pratik eğitimlerle
                                ekibinizin sistemi etkin kullanmasını sağlıyoruz. Kontrollü geçiş süreciyle
                                canlıya alıyor ve ilk günden itibaren verimli kullanım garantisi veriyoruz.</p>
                        </div>
                    </div>
                    <div class="process-step appear-animation" data-appear-animation="fadeInUpShorter"
                        data-appear-animation-delay="1000">
                        <div class="process-step-circle">
                            <strong class="process-step-circle-content">5</strong>
                        </div>
                        <div class="process-step-content">
                            <h4 class="mb-3 text-5 font-weight-bold text-primary">Destek & Güncelleme
                            </h4>
                            <p class="mb-0">Canlıya geçiş sonrası da yanınızdayız. 7/24 teknik destek, düzenli
                                sistem
                                güncellemeleri ve yeni özelliklerin eklenmesi için sürekli hizmet veriyoruz.
                                İşletmeniz büyüdükçe Workcube ERP çözümünüz de gelişiyor ve genişletiyor.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr class="mb-5">

    <section class="container mb-5">
        <div class="row">
            <div class="col">
                <h4>Referanslarımız</h4>
                <div class="owl-carousel owl-theme stage-margin nav-style-1 owl-loaded owl-drag owl-carousel-init"
                    data-plugin-options="{'items': 2, 'margin': 10, 'loop': false, 'nav': true, 'dots': false, 'stagePadding': 40}"
                    style="height: auto;">

                    <div class="owl-stage-outer">
                        <div class="owl-stage"
                            style="transform: translate3d(0px, 0px, 0px); transition: all; width: 2967px; padding-left: 40px; padding-right: 40px;">
                            <div class="owl-item active" style="width: 278.667px; margin-right: 10px;">
                                <div>
                                    <img alt="" class="img-fluid rounded" src="{{ asset('porto/simages/netline.png') }}">
                                </div>
                            </div>
                            <div class="owl-item active" style="width: 278.667px; margin-right: 10px;">
                                <div>
                                    <img alt="" class="img-fluid rounded" src="{{ asset('porto/simages/ygz.png') }}">
                                </div>
                            </div>
                            <div class="owl-item active" style="width: 278.667px; margin-right: 10px;">
                                <div>
                                    <img alt="" class="img-fluid rounded" src="{{ asset('porto/simages/ekomaxi.png') }}">
                                </div>
                            </div>
                            <div class="owl-item" style="width: 278.667px; margin-right: 10px;">
                                <div>
                                    <img alt="" class="img-fluid rounded" src="{{ asset('porto/simages/teknosis.png') }}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-nav"><button type="button" role="presentation"
                            class="owl-prev disabled"></button><button type="button" role="presentation"
                            class="owl-next"></button></div>
                    <div class="owl-dots disabled"></div>
                </div>
            </div>
        </div>
    </section>






    {{-- <div class="container py-4 my-5 mb-5" id="news">
        <div class="row">
            <div class="col text-center">
                <h2 class="font-weight-bold line-height-2 text-7 mb-1">Haberler & Blog</h2>
                <span class="d-block text-color-dark text-5 pb-2 mb-4 opacity-7">Workcube ERP Bayisi</span>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-5 mb-md-0">
                <article>
                    <a href="#" class="text-decoration-none">
                        <span class="thumb-info thumb-info-no-borders custom-thumb-info-style-1 pb-2 mb-2 mb-md-4">
                            <span class="thumb-info-wrapper">
                                <img src="img/demos/seo/blog/blog-1.jpg" class="img-fluid" alt="">
                                <span class="custom-thumb-info-date text-color-light bg-primary">
                                    27
                                    <span>KAS</span>
                                </span>
                            </span>
                        </span>
                    </a>
                    <h2 class="font-weight-semibold custom-fs-1 line-height-3 ls-0 mb-2"><a href="#"
                            class="text-color-dark text-decoration-none">Workcube ERP Neden Tercih Edilmeli?</a>
                    </h2>
                    <p class="mb-0">Modern işletmelerin dijital dönüşüm ihtiyaçları her geçen gün artarken,
                        doğru ERP seçimi
                        kritik önem taşıyor. Workcube ERP'nin esnek yapısı ve güçlü özellikleri ile işletmenizi
                        nasıl dönüştürebileceğinizi keşedin..."
                </article>
            </div>
            <div class="col-md-4 mb-5 mb-md-0">
                <article>
                    <a href="#" class="text-decoration-none">
                        <span class="thumb-info thumb-info-no-borders custom-thumb-info-style-1 pb-2 mb-2 mb-md-4">
                            <span class="thumb-info-wrapper">
                                <img src="img/demos/seo/blog/blog-2.jpg" class="img-fluid" alt="">
                                <span class="custom-thumb-info-date text-color-light bg-primary">
                                    12
                                    <span>ARA</span>
                                </span>
                            </span>
                        </span>
                    </a>
                    <h2 class="font-weight-semibold custom-fs-1 line-height-3 ls-0 mb-2"><a href="#"
                            class="text-color-dark text-decoration-none">Workcube ERP Modülleri ve
                            Özellikleri</a></h2>
                    <p class="mb-0">Workcube ERP'nin sunduğu zengin modül yelpazesi ile işletmenizin her
                        departmanının
                        ihtiyaçlarını karşılayabilirsiniz. Finansman, İK, CRM, üretim, lojistik ve daha
                        fazlası...
                        Hangi modülün işletmenize uygun olduğunu keşedin...</p>
                </article>
            </div>
            <div class="col-md-4">
                <article>
                    <a href="#" class="text-decoration-none">
                        <span class="thumb-info thumb-info-no-borders custom-thumb-info-style-1 pb-2 mb-2 mb-md-4">
                            <span class="thumb-info-wrapper">
                                <img src="img/demos/seo/blog/blog-3.jpg" class="img-fluid" alt="">
                                <span class="custom-thumb-info-date text-color-light bg-primary">
                                    12
                                    <span>ARA</span>
                                </span>
                            </span>
                        </span>
                    </a>
                    <h2 class="font-weight-semibold custom-fs-1 line-height-3 ls-0 mb-2"><a href="#"
                            class="text-color-dark text-decoration-none">Workcube ERP Başarı Hikayeleri</a></h2>
                    <p class="mb-0">Workcube ERP ile dijital dönüşümünü tamamlayan işletmelerin gerçek
                        deneyimlerini okuyun.
                        Farklı sektörlerden referanslarımızın Workcube ERP ile elde ettiği verimlilik artışı ve
                        maliyet tasarrufu hikayelerini keşfedin...</p>
                </article>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col text-center">
                <a href="#"
                    class="btn btn-primary btn-outline btn-rounded font-weight-semibold text-4 btn-px-5 btn-py-2">Tüm
                    Yazıları Görüntüle</a>
            </div>
        </div>
    </div> --}}


    <script>
        document.addEventListener("DOMContentLoaded", function () {
            // PopupManager'ın yüklenmesini bekle
            setTimeout(() => {
                if (window.popupManager) {
                    // 3 saniye sonra WhatsApp popup'ı aç
                    setTimeout(() => {
                        window.popupManager.showPopup("wa-popup");
                    }, 3000);
                }
            }, 100);
        });
    </script>
@endsection