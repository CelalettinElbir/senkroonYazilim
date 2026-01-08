@extends('layout.master')
@section('content')
    <section class="section position-relative border-0 m-0"
        style="background-image: url(porto/simages/main.png); background-position: center; background-size: cover;">
        <div class="container position-relative pb-5 mb-5">
            {{-- <svg class="d-none d-lg-block custom-svg-position-1" version="1.1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1686.88 1095.86"
                data-appear-animation-svg="true">
                <path class="appear-animation" data-appear-animation="customLines1anim" data-appear-animation-delay="100"
                    data-appear-animation-duration="7s" fill="none" stroke="#d8d8d8" stroke-width="2px"
                    stroke-miterlimit="10" d="M87.95,1.4c6.82,9.14,15.53,21.59,24.68,36.94c6.82,11.45,27.18,46.82,42.55,96.51
            c22.8,73.68,21.39,136.02,20.51,156c-3.11,70.56-22.16,122.51-36,159.32c-10.88,28.95-11.68,24.38-59.74,125.62
            c-43.46,91.53-49.66,109.7-52.85,119.49C6.6,758.14,2.98,804.59,2.16,829.14c-1.49,44.72,4.54,70.82,6.47,78.64
            c3.54,14.35,10.42,41.25,29.79,70.47c6.64,10.01,30.84,44.6,76.77,69.11c42.9,22.9,81.52,24.6,110.47,25.87
            c45.57,2.01,79.98-6.18,113.02-14.3c30.83-7.58,58.4-18.38,113.53-40c59.55-23.35,66.43-28.58,110.47-43.91
            c35.63-12.41,57.67-19.98,89.36-25.7c25.68-4.64,55.3-9.77,94.3-6.3c12.43,1.11,53.97,5.59,102.13,27.74
            c32.05,14.74,53.03,30.87,57.53,34.38c24.26,18.91,41.05,38.65,51.91,53.45" />
                <path class="appear-animation" data-appear-animation="customLines1anim" data-appear-animation-delay="100"
                    data-appear-animation-duration="7s" fill="none" stroke="#d8d8d8" stroke-width="2px"
                    stroke-miterlimit="10" d="M119.44,34.42c8.99,12.85,20.33,30.49,31.66,52.43c26.28,50.9,36.35,93.84,39.15,106.55
            c3.12,14.2,10.77,52.5,9.53,102.81c-0.28,11.19-2.03,65.48-23.83,133.79c-9.82,30.78-21.07,54.56-43.57,102.13
            c-26.78,56.6-29.14,53.79-45.62,90.21c-19.84,43.85-42.56,94.07-48.68,161.02c-2.86,31.34-5.69,66.08,7.49,108.6
            c6.03,19.44,20.95,65.45,64,101.11c47.45,39.3,101.05,42.8,133.79,44.94c63.04,4.12,115.57-13.6,165.11-30.3
            c5.59-1.89,23.59-8.86,59.57-22.81c100.23-38.85,99.33-40.27,122.21-47.32c41.18-12.69,80.51-24.8,133.11-21.79
            c19.83,1.14,63.01,5.65,111.66,28.94c8.19,3.92,50.6,24.68,88.51,64.34c5.66,5.92,10.38,11.39,12.6,13.96
            c23.78,27.59,39.5,52.94,49.36,70.81" />
                <path class="appear-animation" data-appear-animation="customLines1anim" data-appear-animation-delay="100"
                    data-appear-animation-duration="7s" fill="none" stroke="#d8d8d8" stroke-width="2px"
                    stroke-miterlimit="10" d="M149.4,68.12c6.57,8.86,14.9,20.95,23.49,35.91c4.29,7.48,19.67,34.89,32.17,73.53
            c6.72,20.77,21.93,69.22,20.6,133.28c-1.3,62.06-17.49,108.17-28.94,139.91c-10.84,30.08-24.93,58.75-53.11,116.09
            c-20.68,42.08-23.94,45.72-33.7,69.11c-12.01,28.77-26.1,63.09-33.02,108.6c-5.01,32.91-10.64,69.92,1.7,115.4
            c5.5,20.27,17.08,60.94,53.45,94.64c42.55,39.43,93.06,45.28,119.49,48.34c54.36,6.29,98.94-6.87,146.04-20.77
            c14.56-4.3,31.27-10.58,64.68-23.15c90.64-34.09,94.12-40.57,133.45-51.74c33.81-9.61,71.69-20.37,122.21-16.68
            c58.83,4.3,99.83,25.64,107.91,29.96c40.02,21.39,65.7,49.16,77.96,62.64c8.35,9.18,14.84,17.39,19.4,23.49" />
                <path class="appear-animation" data-appear-animation="customLines1anim" data-appear-animation-delay="100"
                    data-appear-animation-duration="7s" fill="none" stroke="#d8d8d8" stroke-width="2px"
                    stroke-miterlimit="10" d="M179.69,101.14c6.75,9.74,13.52,20.4,20.09,32c22.79,40.27,33.1,74.23,35.4,82.04
            c5.33,18.08,15.6,58.21,14.64,110.3c-0.24,12.92-1.88,65.03-24.85,127.32c-3.1,8.42-7.74,18.89-17.02,39.83
            c-25.65,57.88-36.57,75.11-52.43,110.3c-18.12,40.19-31.28,69.39-39.83,110.64c-7.2,34.73-15.41,74.33-2.38,122.21
            c4.55,16.73,14.43,51.38,44.94,82.04c35.67,35.85,78.11,44.69,100.43,49.02c58.53,11.37,107.23-3.46,156.26-18.38
            c24.42-7.44,15.93-6.77,86.47-33.7c103.46-39.5,129.97-44.06,142.98-45.96c28.7-4.18,61.65-8.66,103.15,1.02
            c7.96,1.86,47.73,11.59,90.21,42.55c30.91,22.53,50.88,47.29,62.64,64.34" />
                <path class="appear-animation" data-appear-animation="customLines1anim" data-appear-animation-delay="100"
                    data-appear-animation-duration="7s" fill="none" stroke="#d8d8d8" stroke-width="2px"
                    stroke-miterlimit="10" d="M208.89,133.57c7.42,9.37,15.01,20.15,22.21,32.43c21.75,37.04,29.38,69.66,33.96,89.87
            c4.69,20.73,13.92,63.26,7.4,117.96c-4.84,40.58-16.18,69.74-28.09,100.34c-11.91,30.61-15.38,31.76-42.38,89.11
            c-24.66,52.37-36.99,78.56-44.68,105.45c-8.49,29.66-18.6,66.37-13.28,113.36c2.65,23.35,6.06,53.41,27.06,84
            c28.75,41.87,70.98,56.35,86.81,61.53c35.79,11.71,65.37,8.99,93.19,6.13c15-1.54,44-5.54,139.91-42.38
            c72.26-27.76,81.46-35.35,120.77-43.91c27.26-5.94,54.69-11.68,91.15-8.17c55.63,5.36,93.81,28.56,102.38,33.96
            c36.12,22.73,57.57,50.99,66.38,62.81c3.86,5.17,6.88,9.63,8.94,12.77" />
            </svg>
            <svg class="d-none d-lg-block custom-svg-position-2" width="780" version="1.1"
                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                viewBox="0 0 1034.87 621.92" data-appear-animation-svg="true">
                <path class="appear-animation" data-appear-animation="customLines1anim" data-appear-animation-delay="100"
                    data-appear-animation-duration="7s" fill="none" stroke="#d8d8d8" stroke-width="2px"
                    stroke-miterlimit="10" d="M1033.14,343.02c-15.35,3.35-35.43,6.53-59.06,7.15c-6.93,0.18-31.19,0.59-62.64-4.6
            c-17.43-2.87-66.48-11.4-119.49-41.36c-44.67-25.25-70.31-53.39-114.72-102.13c-41.11-45.11-36.16-48.69-77.11-91.57
            c-56.53-59.21-89.83-77.39-103.83-84.43C476.06,15.9,449.68,2.99,412.71,1.4c-12.99-0.56-43.99-1.53-77.96,14.64
            c-41.24,19.63-61.56,52.48-73.53,71.83c-23.33,37.71-29.81,74.12-34.04,97.87c-2.5,14.07-3.49,25.38-5.45,48
            c-3.15,36.29-2.4,50.69-3.91,84.09c-2.19,48.31-3.28,72.47-10.04,104c-5.37,25.04-10.9,49.9-27.06,79.15
            c-17.97,32.52-39.6,53.3-50.89,63.15c-11.85,10.34-37.13,30.25-74.72,43.74c-21.2,7.61-39.98,10.9-53.79,12.43" />
                <path class="appear-animation" data-appear-animation="customLines1anim" data-appear-animation-delay="100"
                    data-appear-animation-duration="7s" fill="none" stroke="#d8d8d8" stroke-width="2px"
                    stroke-miterlimit="10" d="M1001.31,353.83c-9.83,1.88-23.04,3.96-38.72,5.11c-41.64,3.05-75.12-2.32-93.96-6.3
            c-40.95-8.65-70.03-22.85-78.38-27.06c-38.81-19.59-63.61-42.55-82.47-60.26c-12.26-11.52-28.17-30.13-59.49-66.89
            c-50.46-59.23-51.93-63.36-70.21-81.19c-23.99-23.4-43.89-42.81-76.85-59.49c-17.8-9.01-50.48-25.07-94.21-24.26
            c-11.84,0.22-31.62,0.78-54.64,10.47c-26.56,11.18-42.26,28.14-52.85,39.83c-31.65,34.94-42.46,72.73-48,92.94
            c-6.72,24.51-8.36,44.66-11.23,79.91c-1.08,13.31-1.74,28.45-3.06,58.72c-1.92,44.01-1.36,47.29-3.06,64.85
            c-1.74,17.94-3.56,36.73-9.7,60.77c-4.86,19.04-10.57,40.74-25.28,65.87c-4.44,7.59-16.44,27.02-37.53,47.23
            c-25.95,24.88-51.32,37.19-60.51,41.36c-20.86,9.47-39.57,13.88-52.85,16.09" />
                <path class="appear-animation" data-appear-animation="customLines1anim" data-appear-animation-delay="100"
                    data-appear-animation-duration="7s" fill="none" stroke="#d8d8d8" stroke-width="2px"
                    stroke-miterlimit="10" d="M82.16,604.55c9.97-1.79,22.58-4.85,36.6-10.3c8.38-3.25,23.78-9.9,41.02-21.79
            c10.53-7.26,28.65-21.25,45.79-43.57c19.61-25.55,28.03-49.12,33.02-63.49c9.64-27.72,11.87-49.43,14.98-81.7
            c2.99-31.08,0.85-33.59,3.57-83.06c2.17-39.47,3.26-59.2,7.49-80c5.05-24.83,10.68-51.28,28.77-80.51
            c8.98-14.51,23.96-38.12,53.45-55.66c22.82-13.57,43.56-17.11,49.87-18.04c30.43-4.49,54,3.04,74.04,9.7
            c41.63,13.83,69.09,36.91,86.81,52.09c13.38,11.46,21.69,20.52,38.3,38.64c31.56,34.42,37.19,46.51,64.34,77.45
            c21.88,24.93,36.09,41.13,58.89,59.06c41.27,32.46,79.97,46.48,93.11,50.89c33.92,11.4,63.83,14.7,84.77,15.49
            c29.54,1.11,54.49-2.31,72.85-6.13" />
                <path class="appear-animation" data-appear-animation="customLines1anim" data-appear-animation-delay="100"
                    data-appear-animation-duration="7s" fill="none" stroke="#d8d8d8" stroke-width="2px"
                    stroke-miterlimit="10" d="M937.57,374.34c-5.44,1.12-12.86,2.48-21.7,3.57c-10.07,1.24-33.34,3.55-62.81,0.51
            c-36.87-3.8-64.54-14-76.09-18.64c-41.03-16.48-67.58-38.6-81.7-50.55c-16.08-13.62-26.54-25.15-40.09-40.09
            c-29.01-31.98-30.63-40.34-54.38-67.91c-16.91-19.63-39.47-45.44-75.06-68.94c-20.46-13.5-41.03-26.78-71.74-32.68
            c-14.69-2.82-39.94-7.35-69.45,2.55c-30.17,10.13-47.82,29.65-57.7,40.85c-24.49,27.76-32.67,56.86-38.3,76.85
            c-6.19,21.99-7.61,39.17-10.47,73.53c-1.46,17.52-0.81,17.82-3.06,61.53c-1.88,36.55-2.86,55.09-4.85,67.91
            c-3.37,21.72-6.4,41.25-17.11,64.85c-12.8,28.2-30.14,48.07-42.89,60.26c-29.82,28.48-60.52,39.77-69.7,42.89
            c-10.72,3.65-20.03,5.69-26.81,6.89" />
                <path class="appear-animation" data-appear-animation="customLines1anim" data-appear-animation-delay="100"
                    data-appear-animation-duration="7s" fill="none" stroke="#d8d8d8" stroke-width="2px"
                    stroke-miterlimit="10" d="M142.63,591.42c6.17-1.05,14.23-2.76,23.43-5.68c6.86-2.18,23.03-7.8,40.7-19.06
            c8.24-5.25,31.65-21.2,51.4-50.55c18.26-27.13,24.16-52,28.94-73.02c5.69-25.03,6.52-47.72,8.17-93.11
            c1.14-31.38,0.16-40.44,3.06-64.17c2.7-22.04,4.58-37.39,11.4-56.68c5.71-16.12,17.03-46.9,46.81-71.83
            c8.95-7.49,24.51-20.23,48.51-26.04c27.25-6.6,49.5-0.43,65.19,3.91c28.35,7.86,47.23,21.08,63.49,32.68
            c25.58,18.26,42.05,36.76,58.21,55.15c19.98,22.73,19.16,26.07,41.53,51.74c13.88,15.93,26.73,30.68,45.28,46.64
            c16.75,14.41,43.12,36.7,83.74,51.91c5.94,2.23,33.77,12.38,72.34,15.32c28.74,2.19,53.04-0.43,70.64-3.57" />
            </svg> --}}


            <div class="row align-items-center pb-5 mb-4">
                <div class="col-lg-6">

                    <h2 class="text-color-dark font-weight-bold text-12 line-height-3 mb-2 appear-animation"
                        data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="100">Workcube ERP ile
                        İşletmenizi Dönüştürün</h2>
                    <p class="text-color-dark text-4 font-weight-medium mb-4-5 appear-animation"
                        data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="100">Malatya'nın en
                        güvenilir Workcube ERP çözüm ortağı olarak, işletmenizin dijital dönüşümü için eksiksiz hizmet
                        sağlıyoruz.</p>
                    <a href="{{ route('contact-us') }}"
                        class="btn btn-primary btn-rounded border-0 font-weight-bold text-3 px-5 btn-py-3 appear-animation popup-with-form"
                        data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="100">DEMO TALEBINDE BUL</a>
                </div>

            </div>
        </div>
    </section>



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
                        <input type="text" name="name" class="form-control" value=""
                            placeholder="Adınız Soyadınız*" required>
                    </div>
                    <div class="form-group col-lg-6 mb-3">
                        <input type="text" name="company" class="form-control" value="" placeholder="Şirket Adı*"
                            required>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-lg-6 mb-3">
                        <input type="email" name="email" class="form-control" value="" placeholder="E-posta*"
                            required>
                    </div>
                    <div class="form-group col-lg-6 mb-3">
                        <input type="tel" name="phone" class="form-control" value="" placeholder="Telefon*"
                            required>
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
                <span class="d-block text-color-dark text-5 pb-2 mb-4 opacity-7">Workcube ERP Bayisi</span>
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
                                            <a href="{{ route('advisors.show', $advisor->slug) }}"
                                                class="btn btn-primary">Detayları
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
                                    <img alt="" class="img-fluid rounded"
                                        src="{{ asset('porto/simages/netline.png') }}">
                                </div>
                            </div>
                            <div class="owl-item active" style="width: 278.667px; margin-right: 10px;">
                                <div>
                                    <img alt="" class="img-fluid rounded"
                                        src="{{ asset('porto/simages/protermo.png') }}">
                                </div>
                            </div>
                            <div class="owl-item active" style="width: 278.667px; margin-right: 10px;">
                                <div>
                                    <img alt="" class="img-fluid rounded"
                                        src="{{ asset('porto/simages/ekomaxi.png') }}">
                                </div>
                            </div>
                            <div class="owl-item" style="width: 278.667px; margin-right: 10px;">
                                <div>
                                    <img alt="" class="img-fluid rounded"
                                        src="{{ asset('porto/simages/teknosis.png') }}">
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
        document.addEventListener("DOMContentLoaded", function() {
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
