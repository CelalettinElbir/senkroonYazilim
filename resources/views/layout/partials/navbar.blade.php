 <header id="header"
     data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyStartAt': 70, 'stickySetTop': '-70px', 'stickyChangeLogo': true}">
     <div class="header-body border-0 box-shadow-none">
         <div class="header-container container">
             <div class="header-row py-2">
                 <div class="header-column">
                     <div class="header-row">
                         <div class="header-logo mb-0">
                             <a href="index.html">
                                 <img alt="Porto" width="150" height="60"
                                     src="{{ asset('porto/simages/senkronlogo2.png') }}">
                             </a>
                         </div>
                     </div>
                 </div>
                 <div class="header-column justify-content-end align-items-center flex-row">
                     <ul
                         class="header-social-icons social-icons social-icons-clean social-icons-icon-dark social-icons-medium me-2 mb-0 d-none d-sm-block">
                         <li class="social-icons-instagram">
                             <a href="http://www.instagram.com/" target="_blank" title="Instagram"><i
                                     class="fab fa-instagram"></i></a>
                         </li>
                         <li class="social-icons-x">
                             <a href="http://www.x.com/" target="_blank" title="X"><i
                                     class="fab fa-x-twitter"></i></a>
                         </li>
                         <li class="social-icons-facebook">
                             <a href="http://www.facebook.com/" target="_blank" title="Facebook"><i
                                     class="fab fa-facebook-f"></i></a>
                         </li>
                     </ul>
                     <div class="header-nav-features">
                         <a href="tel:0123456789"
                             class="d-flex align-items-center text-decoration-none text-color-dark text-color-hover-primary font-weight-semibold ms-1 me-3">
                             <i class="icon icon-phone text-4-5 me-2"></i>
                             800-123-4567
                         </a>
                     </div>
                     {{-- <div class="header-nav-features d-none d-md-block">
                         <div class="header-nav-feature header-nav-features-search d-inline-flex align-items-center">
                             <a href="#"
                                 class="header-nav-features-toggle text-color-dark font-weight-semibold text-decoration-none ms-1"
                                 data-focus="headerSearch">
                                 <i
                                     class="icons icon-magnifier header-nav-top-icon font-weight-semibold text-3-5 text-color-dark text-color-hover-primary font-weight-semibold top-3"></i>
                                 Ara
                             </a>
                             <div class="header-nav-features-dropdown header-nav-features-dropdown-mobile-fixed border-radius-0 top-10 right-0"
                                 id="headerTopSearchDropdown">
                                 <form role="search" action="page-search-results.html" method="get">
                                     <div class="simple-search input-group">
                                         <input class="form-control text-1" id="headerSearch" name="q"
                                             type="search" value="" placeholder="Ara...">
                                         <button class="btn" type="submit" aria-label="Ara">
                                             <i
                                                 class="icons icon-magnifier header-nav-top-icon text-color-dark text-color-hover-primary top-2"></i>
                                         </button>
                                     </div>
                                 </form>
                             </div>
                         </div>
                     </div> --}}
                 </div>
             </div>
         </div>
         <div class="header-nav-bar z-index-0">
             <div class="container">
                 <div class="header-row">
                     <div class="header-column">
                         <div class="header-row align-items-center justify-content-end">
                             <div class="header-nav header-nav-links justify-content-start mb-3">
                                 <div
                                     class="header-nav-main header-nav-main-text-capitalize header-nav-main-effect-2 header-nav-main-sub-effect-1">
                                     <nav class="collapse">
                                         <ul class="nav nav-pills" id="mainNav">
                                             <!-- Anasayfa -->
                                             <li>
                                                 <a class="nav-link" href="{{ url('/') }}">
                                                     Anasayfa
                                                 </a>
                                             </li>

                                             <!-- Hakkımızda -->
                                             <li>
                                                 <a class="nav-link" href="{{ route('home.about') }}">
                                                     Hakkımızda
                                                 </a>
                                             </li>

                                             <!-- Hizmetlerimiz - Basit Dropdown (Mobil) -->
                                             <li class="dropdown d-lg-none">
                                                 <a class="nav-link dropdown-toggle"
                                                     href="{{ url('danismanlik-cozumleri') }}">
                                                     Hizmetlerimiz
                                                 </a>
                                                 <ul class="dropdown-menu">
                                                     <li><a class="dropdown-item"
                                                             href="{{ url('danismanlik-cozumleri/idari-danismanlik-hizmetleri') }}">İdari
                                                             Danışmanlık Hizmetleri</a></li>
                                                     <li><a class="dropdown-item"
                                                             href="{{ url('danismanlik-cozumleri/raporlama-ve-analiz-hizmetleri') }}">Raporlama
                                                             ve Analiz Hizmetleri</a></li>
                                                     <li><a class="dropdown-item"
                                                             href="{{ url('danismanlik-cozumleri/teknik-destek-hizmetleri') }}">Teknik
                                                             Destek Hizmetleri</a></li>
                                                     <li><a class="dropdown-item"
                                                             href="{{ url('danismanlik-cozumleri/egitim-ve-uygulama-hizmetleri') }}">Eğitim
                                                             ve Uygulama Hizmetleri</a></li>
                                                     <li><a class="dropdown-item"
                                                             href="{{ url('danismanlik-cozumleri/erp-mrp-proje-danismanligi') }}">ERP
                                                             – MRP Proje Danışmanlığı</a></li>
                                                     <li>
                                                         <hr class="dropdown-divider">
                                                     </li>
                                                     <li><a class="dropdown-item fw-bold"
                                                             href="{{ url('danismanlik-cozumleri') }}">Tümünü Gör</a>
                                                     </li>
                                                 </ul>
                                             </li>

                                             <!-- Hizmetlerimiz - Mega Menu (Desktop) -->
                                             <li class="dropdown dropdown-mega d-none d-lg-block">
                                                 <a class="nav-link dropdown-toggle"
                                                     href="{{ url('danismanlik-cozumleri') }}">
                                                     Hizmetlerimiz
                                                 </a>
                                                 <ul class="dropdown-menu">
                                                     <li>
                                                         <div class="dropdown-mega-content">
                                                             <div class="row">
                                                                 <!-- Sol Taraf - Görsel ve Açıklama -->
                                                                 <div class="col-lg-5">
                                                                     <div class="dropdown-mega-sub-title">Danışmanlık
                                                                         Çözümleri</div>
                                                                     <a href="{{ url('danismanlik-cozumleri') }}"
                                                                         class="d-block mb-3">
                                                                         <img src="{{ asset('images/danismanlik-cozumleri.jpg') }}"
                                                                             alt="Danışmanlık Çözümleri"
                                                                             class="img-fluid rounded mb-2">
                                                                         <p class="text-2 mb-0">ERP + MRP + EĞİTİM +
                                                                             TEKNİK DESTEK + RAPORLAMA + ANALİZ +
                                                                             UYGULAMA + İDARİ DANIŞMANLIK ve daha
                                                                             fazlası...</p>
                                                                     </a>
                                                                 </div>

                                                                 <!-- Sağ Taraf - Hizmet Listesi -->
                                                                 <div class="col-lg-7">
                                                                     <div class="dropdown-mega-sub-title">Danışmanlık
                                                                         Çözümleri</div>
                                                                     <div class="dropdown-mega-sub-nav">
                                                                         <ul class="list list-unstyled">
                                                                             <li>
                                                                                 <a class="dropdown-item d-flex align-items-center"
                                                                                     href="{{ url('danismanlik-cozumleri/idari-danismanlik-hizmetleri') }}">
                                                                                     <span>İdari Danışmanlık
                                                                                         Hizmetleri</span>
                                                                                 </a>
                                                                             </li>
                                                                             <li>
                                                                                 <a class="dropdown-item d-flex align-items-center"
                                                                                     href="{{ url('danismanlik-cozumleri/raporlama-ve-analiz-hizmetleri') }}">

                                                                                     <span>Raporlama ve Analiz
                                                                                         Hizmetleri</span>
                                                                                 </a>
                                                                             </li>
                                                                             <li>
                                                                                 <a class="dropdown-item d-flex align-items-center"
                                                                                     href="{{ url('danismanlik-cozumleri/teknik-destek-hizmetleri') }}">

                                                                                     <span>Teknik Destek
                                                                                         Hizmetleri</span>
                                                                                 </a>
                                                                             </li>
                                                                             <li>
                                                                                 <a class="dropdown-item d-flex align-items-center"
                                                                                     href="{{ url('danismanlik-cozumleri/erp-mrp-proje-danismanligi') }}">
                                                                                     <span>ERP – MRP Proje
                                                                                         Danışmanlığı</span>
                                                                                 </a>
                                                                             </li>
                                                                             <a href="{{ url('danismanlik-cozumleri') }}"
                                                                                 class="btn btn-link text-decoration-none ps-0">
                                                                                 <i
                                                                                     class="fas fa-angle-right me-1"></i>
                                                                                 Tüm Danışmanlık Çözümleri
                                                                             </a>

                                                                         </ul>

                                                                     </div>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </li>
                                                 </ul>
                                             </li>

                                             <!-- Ürünler & Çözümler - Basit Dropdown (Mobil) -->
                                             <li class="dropdown d-lg-none">
                                                 <a class="nav-link dropdown-toggle"
                                                     href="{{ route('modules.index') }}">
                                                     Ürünler & Çözümler
                                                 </a>
                                                 <ul class="dropdown-menu">
                                                     <li class="dropdown-header">Çözümler</li>
                                                     <li><a class="dropdown-item"
                                                             href="{{ route('modules.show', 'workcube-erp') }}">Workcube
                                                             ERP</a></li>
                                                     <li><a class="dropdown-item"
                                                             href="{{ route('modules.show', 'workcube-crm') }}">Workcube
                                                             CRM</a></li>
                                                     <li><a class="dropdown-item"
                                                             href="{{ route('modules.show', 'workcube-hr') }}">Workcube
                                                             HR</a></li>
                                                     <li><a class="dropdown-item"
                                                             href="{{ route('modules.show', 'workcube-pam') }}">Workcube
                                                             PAM</a></li>
                                                     <li><a class="dropdown-item"
                                                             href="{{ route('modules.show', 'workcube-pms') }}">Workcube
                                                             PMS</a></li>
                                                     <li>
                                                         <hr class="dropdown-divider">
                                                     </li>
                                                     <li class="dropdown-header">Sektörel Uygulamalar</li>
                                                     <li><a class="dropdown-item"
                                                             href="{{ route('sectors.show', 'uretim-odakli-isletmeler') }}">Üretim
                                                             Odaklı İşletmeler</a></li>
                                                     <li><a class="dropdown-item"
                                                             href="{{ route('sectors.show', 'toptan-ticaret') }}">Toptan
                                                             Ticaret</a></li>
                                                     <li><a class="dropdown-item"
                                                             href="{{ route('sectors.show', 'perakendecilik') }}">Perakendecilik</a>
                                                     </li>
                                                     <li><a class="dropdown-item"
                                                             href="{{ route('sectors.show', 'hizmet-sektoru') }}">Hizmet
                                                             Sektörü</a></li>
                                                     <li>
                                                         <hr class="dropdown-divider">
                                                     </li>
                                                     <li><a class="dropdown-item fw-bold"
                                                             href="{{ route('modules.index') }}">Tümünü Gör</a></li>
                                                 </ul>
                                             </li>

                                             <!-- Ürünler & Çözümler - Mega Menu (Desktop) -->
                                             <li class="dropdown dropdown-mega d-none d-lg-block">
                                                 <a class="nav-link dropdown-toggle"
                                                     href="{{ route('modules.index') }}">
                                                     Ürünler & Çözümler
                                                 </a>
                                                 <ul class="dropdown-menu">
                                                     <li>
                                                         <div class="dropdown-mega-content">
                                                             <div class="row">
                                                                 <!-- Sol Taraf - Workcube Görsel -->
                                                                 <div class="col-lg-3">
                                                                     <div class="dropdown-mega-sub-title">Workcube
                                                                     </div>
                                                                     <a href="{{ route('modules.index') }}"
                                                                         class="d-block mb-3">
                                                                         <img src="{{ asset('porto/simages/W3_logo.png') }}"
                                                                             alt="Workcube"
                                                                             class="img-fluid rounded mb-2">
                                                                         <p class="text-2 mb-0">ERP + CRM + HR + PMS +
                                                                             PAM + CMS + DAM + LMS SUBO + Intranet +
                                                                             E-Devlet ve daha fazlası...</p>
                                                                     </a>
                                                                 </div>

                                                                 <!-- Çözümler -->
                                                                 <div class="col-lg-2">
                                                                     <div class="dropdown-mega-sub-title">Çözümler
                                                                     </div>
                                                                     <div class="dropdown-mega-sub-nav">
                                                                         <ul class="list list-unstyled">
                                                                             <li><a class="dropdown-item"
                                                                                     href="{{ route('modules.show', 'erp-satis-satinalma-dagitim-sd-scm') }}">Workcube
                                                                                     ERP</a></li>
                                                                             <li><a class="dropdown-item"
                                                                                     href="{{ route('modules.show', 'crm-musteri-iliskileri-yonetimi') }}">Workcube
                                                                                     CRM</a></li>
                                                                             <li><a class="dropdown-item"
                                                                                     href="{{ route('modules.show', 'insan-kaynaklari-ik') }}">Workcube
                                                                                     HR</a></li>
                                                                             <li><a class="dropdown-item"
                                                                                     href="{{ route('modules.show', 'pam-fiziki-varlik-tesis-yonetimi-tamir-bakim') }}">Workcube
                                                                                     PAM</a></li>
                                                                         </ul>
                                                                         <a href="{{ route('modules.index') }}"
                                                                             class="btn btn-link text-decoration-none ps-0">
                                                                             <i class="fas fa-angle-right me-1"></i>
                                                                             Tüm Çözümler
                                                                         </a>
                                                                     </div>
                                                                 </div>

                                                                 <!-- Çözümler - 2. Kolon -->
                                                                 <div class="col-lg-2 ">
                                                                     <div class="dropdown-mega-sub-title">
                                                                         &nbsp;
                                                                     </div>

                                                                     <div class="dropdown-mega-sub-nav">
                                                                         <ul class="list list-unstyled">
                                                                             <li><a class="dropdown-item"
                                                                                     href="{{ route('modules.show', 'proje-yonetim-sistemi') }}">Workcube
                                                                                     PMS</a></li>
                                                                             {{-- <li><a class="dropdown-item"
                                                                                     href="{{ route('modules.show', 'workcube-lms') }}">Workcube
                                                                                     LMS</a></li> --}}
                                                                             <li><a class="dropdown-item"
                                                                                     href="{{ route('modules.show', 'cms-intranet-icerik-yonetimi') }}">Workcube
                                                                                     CMS</a></li>
                                                                             <li><a class="dropdown-item"
                                                                                     href="{{ route('modules.show', 'workcube-dam') }}">Workcube
                                                                                     DAM</a></li>
                                                                         </ul>
                                                                     </div>
                                                                 </div>



                                                                 <!-- Sektörel Uygulamalar -->
                                                                 <div class="col-lg-3">
                                                                     <div class="dropdown-mega-sub-title">Sektörel
                                                                         Uygulamalar</div>
                                                                     <div class="dropdown-mega-sub-nav">
                                                                         <ul class="list list-unstyled">
                                                                             <li><a class="dropdown-item"
                                                                                     href="{{ route('sectors.show', 'uretim-odakli-isletmeler') }}">Üretim
                                                                                     Odaklı İşletmeler</a></li>
                                                                             <li><a class="dropdown-item"
                                                                                     href="{{ route('sectors.show', 'toptan-ticaret') }}">Toptan
                                                                                     Ticaret</a></li>
                                                                             <li><a class="dropdown-item"
                                                                                     href="{{ route('sectors.show', 'perakendecilik') }}">Perakendecilik</a>
                                                                             </li>
                                                                             <li><a class="dropdown-item"
                                                                                     href="{{ route('sectors.show', 'hizmet-sektoru') }}">Hizmet
                                                                                     Sektörü</a></li>
                                                                             <li><a class="dropdown-item"
                                                                                     href="{{ route('sectors.show', 'taahhut-sektoru') }}">Taahhüt
                                                                                     Sektörü</a></li>
                                                                             <li><a class="dropdown-item"
                                                                                     href="{{ route('sectors.show', 'sivil-toplum') }}">Sivil
                                                                                     Toplum</a></li>
                                                                             <li><a class="dropdown-item"
                                                                                     href="{{ route('sectors.show', 'kamu') }}">Kamu</a>
                                                                             </li>
                                                                         </ul>
                                                                         <a href="{{ route('sectors.index') }}"
                                                                             class="btn btn-link text-decoration-none ps-0">
                                                                             <i class="fas fa-angle-right me-1"></i>
                                                                             Tüm Workcube Sektörel Uygulamalar
                                                                         </a>
                                                                     </div>
                                                                 </div>


                                                                 <div class="col-lg-2">

                                                                     <div class="dropdown-mega-sub-title">&nbsp;</div>
                                                                     <div class="dropdown-mega-sub-nav">
                                                                         <ul class="list list-unstyled">

                                                                             <li><a class="dropdown-item"
                                                                                     href="{{ route('sectors.show', 'mobilya') }}">Mobilya</a>
                                                                             </li>
                                                                             <li><a class="dropdown-item"
                                                                                     href="{{ route('sectors.show', 'moda') }}">Moda</a>
                                                                             </li>
                                                                             <li><a class="dropdown-item"
                                                                                     href="{{ route('sectors.show', 'insaat') }}">İnşaat</a>
                                                                             </li>
                                                                             <li><a class="dropdown-item"
                                                                                     href="{{ route('sectors.show', 'maden') }}">Maden</a>
                                                                             </li>
                                                                             <li><a class="dropdown-item"
                                                                                     href="{{ route('sectors.show', 'kozmetik') }}">Kozmetik</a>
                                                                             </li>
                                                                         </ul>

                                                                     </div>
                                                                 </div>

                                                             </div>
                                                         </div>
                                                     </li>
                                                 </ul>
                                             </li>


                                             <!-- İletişim -->
                                             <li>
                                                 <a class="nav-link" href="{{ route('contact-us') }}">
                                                     İletişim
                                                 </a>
                                             </li>


                                         </ul>
                                     </nav>
                                 </div>
                             </div>

                             <!-- CTA Button -->
                             <a href="{{ url('iletisim') }}"
                                 class="position-relative top-5 btn btn-rounded btn-secondary text-2 font-weight-bold text-uppercase px-5 btn-py-2 mb-3">
                                 TEKLİF AL
                             </a>

                             <!-- Mobile Toggle Button -->
                             <button class="btn header-btn-collapse-nav" data-bs-toggle="collapse"
                                 data-bs-target=".header-nav-main nav">
                                 <i class="fas fa-bars"></i>
                             </button>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </header>
