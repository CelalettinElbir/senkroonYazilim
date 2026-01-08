 <header id="header"
     data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyStartAt': 70, 'stickySetTop': '-70px', 'stickyChangeLogo': true}">
     <div class="header-body border-0 box-shadow-none">
         <div class="header-container container">
             <div class="header-row py-2">
                 <div class="header-column">
                     <div class="header-row">
                         <div class=" mb-0">
                             <a href="{{ url('/') }}">
                                 <img alt="Porto" width="200" height="100"
                                     src="{{ asset('porto/simages/senkronlogo2.png') }}">
                             </a>
                         </div>
                     </div>
                 </div>
                 <div
                     class="header-column justify-content-end align-items-center flex-row d-none d-md-block d-lg-block">
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
                                             {{-- <li>
                                                 <a class="nav-link" href="{{ route('home.about') }}">
                                                     Hakkımızda
                                                 </a>
                                             </li> --}}

                                             <!-- Hizmetlerimiz - Basit Dropdown (Mobil) -->



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



 <header id="header" class="header-transparent header-effect-shrink header-no-border-bottom"
    data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': false, 'stickyEnableOnMobile': true, 'stickyStartAt': 70, 'stickyChangeLogo': false, 'stickyHeaderContainerHeight': 70}"
    style="height: 100px;">
    <div class="header-body border-top-0 bg-dark box-shadow-none" style="position: fixed; top: 0px;">
        <div class="header-container container" style="height: 100px; min-height: 0px;">
            <div class="header-row">
                <div class="header-column">
                    <div class="header-row">
                        <div class="header-logo appear-animation animated fadeIn appear-animation-visible"
                            data-appear-animation="fadeIn" data-plugin-options="{'accY': 100}"
                            style="animation-delay: 100ms;">
                            <a href="#" class="goto-top"><img alt="Porto" width="102" height="45" data-sticky-width="82"
                                    data-sticky-height="36" data-sticky-top="0" src="landing/img/logo.png"
                                    data-plugin-lazyload="" data-plugin-options="{'threshold': 500}"
                                    data-original="landing/img/logo.png" style="animation-duration: 1s;"
                                    class="lazy-load-loaded img-fluid"></a>
                        </div>
                    </div>
                </div>
                <div class="header-column justify-content-end">
                    <div class="header-row">
                        <div class="header-nav header-nav-links header-nav-light-text header-nav-dropdowns-dark">
                            <div class="header-nav-main header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-text-capitalize header-nav-main-text-size-2 header-nav-main-mobile-dark header-nav-main-effect-1 header-nav-main-sub-effect-1 appear-animation animated fadeIn appear-animation-visible"
                                data-appear-animation="fadeIn" data-plugin-options="{'accY': 100}"
                                style="animation-delay: 100ms;">
                                <nav class="collapse">
                                    <ul class="nav nav-pills mobile-nav" id="mainNav">
                                        <li class="dropdown dropdown-reverse"> <a class="dropdown-item dropdown-toggle"
                                                data-hash="" data-hash-offset="130" href="#demos"> Demos <i
                                                    class="fas fa-chevron-down"></i></a> </li>
                                        <li class="dropdown dropdown-reverse"> <a class="dropdown-item dropdown-toggle"
                                                data-hash="" data-hash-offset="130" href="#reviews"> Reviews <i
                                                    class="fas fa-chevron-down"></i></a> </li>
                                        <li class="dropdown dropdown-reverse"> <a class="dropdown-item dropdown-toggle"
                                                data-hash="" data-hash-offset="130" href="#support"> Support <i
                                                    class="fas fa-chevron-down"></i></a> </li>
                                        <li class="dropdown dropdown-reverse"> <a class="dropdown-item dropdown-toggle"
                                                data-hash="" data-hash-offset="130" href="#features"> Features <i
                                                    class="fas fa-chevron-down"></i></a>
                                        </li>
                                        <li class="dropdown dropdown-reverse"> <a class="dropdown-item dropdown-toggle"
                                                data-hash="" data-hash-offset="130" href="#elements"> Elements <i
                                                    class="fas fa-chevron-down"></i></a> </li>

                                        <li class="dropdown dropdown-reverse"> <a href="documentation.html"
                                                class="dropdown-item dropdown-toggle"> Documentation <i
                                                    class="fas fa-chevron-down"></i></a> </li>
                                    </ul>
                                </nav>
                            </div>
                            <a class="btn btn-gradient btn-rounded font-weight-semibold px-4 ml-3 appear-animation animated fadeIn appear-animation-visible"
                                data-appear-animation="fadeIn" data-plugin-options="{'accY': 100}"
                                href="https://www.portotheme.com/buynow/portoecohtml/" target="_blank" rel="noopener"
                                style="animation-delay: 100ms;">BUY PORTO NOW!</a>
                            <button class="btn header-btn-collapse-nav" data-toggle="collapse"
                                data-target=".header-nav-main nav"><i class="fa fa-bars"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
