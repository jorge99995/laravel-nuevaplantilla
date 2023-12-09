<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>SISTEMA ESID | PERÚ</title>


    <link rel="shortcut icon" href="{{ asset('assets/media/logos/favicon.ico') }}">
    <link href="{{asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.css')}}" rel="stylesheet">
    <link href="{{asset('assets/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet">
    <link href="{{asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet">
    <link href="{{asset('assets/css/style.bundle.css') }}" rel="stylesheet">
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime()
                , event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0]
                , j = d.createElement(s)
                , dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-5FS8GGP');

    </script>

</head>
<body id="kt_app_body" data-kt-app-header-fixed="true" data-kt-app-header-fixed-mobile="true" data-kt-app-toolbar-enabled="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" class="app-default">

    <script>
        var defaultThemeMode = "light";
        var themeMode;

        if (document.documentElement) {
            if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
                themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
            } else {
                if (localStorage.getItem("data-bs-theme") !== null) {
                    themeMode = localStorage.getItem("data-bs-theme");
                } else {
                    themeMode = defaultThemeMode;
                }
            }

            if (themeMode === "system") {
                themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
            }

            document.documentElement.setAttribute("data-bs-theme", themeMode);
        }

    </script>
    <div class="d-flex flex-column flex-root app-root" id="kt_app_root">
        <!--begin::Page-->
        <div class="app-page  flex-column flex-column-fluid " id="kt_app_page">

            <div id="kt_app_header" class="app-header " data-kt-sticky="true" data-kt-sticky-activate="{default: true, lg: true}" data-kt-sticky-name="app-header-minimize" data-kt-sticky-offset="{default: '200px', lg: '300px'}" data-kt-sticky-animation="false">


                <div class="app-container  container-fluid d-flex align-items-stretch flex-stack " id="kt_app_header_container">

                    <div class="d-flex align-items-center d-block d-lg-none ms-n3" title="Show sidebar menu">
                        <div class="btn btn-icon btn-color-gray-600 btn-active-color-primary w-35px h-35px me-1" id="kt_app_sidebar_mobile_toggle">
                            <i class="ki-duotone ki-abstract-14 fs-2"><i class="path1"></i><i class="path2"></i></i>
                        </div>


                        <a href="index.html">
                            <img alt="Logo" src="assets/media/logos/default-dark.svg" class="h-30px">
                        </a>

                    </div>



                    <!--begin::Navbar-->
                    <div class="app-navbar flex-lg-grow-1" id="kt_app_header_navbar">
                        <div class="app-navbar-item d-flex align-items-center flex-lg-grow-1 me-2 me-lg-0">

                            <!--begin::Search-->
                            <div id="kt_header_search" class="header-search d-flex align-items-center w-lg-350px" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="menu" data-kt-search-responsive="true" data-kt-menu-trigger="auto" data-kt-menu-permanent="true" data-kt-menu-placement="bottom-end">

                                <!--begin::Tablet and mobile search toggle-->
                                <div data-kt-search-element="toggle" class="search-toggle-mobile d-flex d-lg-none align-items-center">
                                    <div class="d-flex ">
                                        <i class="ki-duotone ki-magnifier fs-1 "><i class="path1"></i><i class="path2"></i></i>
                                    </div>
                                </div>
                                {{-- <!--end::Tablet and mobile search toggle-->  --}}

                                {{-- begin::Form(use d-none d-lg-block classes for responsive search)  --}}

                                <form data-kt-search-element="form" class="d-none d-lg-block w-100 position-relative mb-5 mb-lg-0" autocomplete="off">
                                    <!--begin::Hidden input(Added to disable form autocomplete)-->
                                    <input type="hidden">
                                    <!--end::Hidden input-->

                                    <!--begin::Icon-->
                                    <i class="ki-duotone ki-magnifier search-icon fs-2 text-gray-500 position-absolute top-50 translate-middle-y ms-5"><i class="path1"></i><i class="path2"></i></i>
                                    <!--end::Icon-->

                                    <!--begin::Input-->
                                    <input type="text" class="search-input form-control form-control rounded-1  ps-13" name="search" value="" placeholder="Search..." data-kt-search-element="input">
                                    <!--end::Input-->

                                    <!--begin::Spinner-->
                                    <span class="search-spinner  position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5" data-kt-search-element="spinner">
                                        <span class="spinner-border h-15px w-15px align-middle text-gray-400"></span>
                                    </span>
                                    <!--end::Spinner-->

                                    <!--begin::Reset-->
                                    <span class="search-reset  btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-4" data-kt-search-element="clear">
                                        <i class="ki-duotone ki-cross fs-2 fs-lg-1 me-0"><i class="path1"></i><i class="path2"></i></i> </span>
                                    <!--end::Reset-->
                                </form>

                            </div>
                            <!--end::Search-->
                        </div>

                    </div>
                    <!--end::Navbar-->
                </div>

            </div>


            <!--begin::Wrapper-->
            <div class="app-wrapper  flex-column flex-row-fluid " id="kt_app_wrapper">


                @yield('content')
                <!--begin::Sidebar-->
                <div id="kt_app_sidebar" class="app-sidebar  flex-column " data-kt-drawer="true" data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="300px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">



                    <div class="app-sidebar-header flex-column mx-10 pt-8" id="kt_app_sidebar_header">
                        <!--begin::Brand-->
                        <div class="d-flex flex-stack d-none d-lg-flex mb-13">
                            <!--begin::Logo-->
                            <a href="index.html" class="app-sidebar-logo">
                                <img alt="Logo" src="assets/media/logos/default.svg" class="h-30px app-sidebar-logo-default">
                            </a>

                        </div>
                        <!--end::Brand-->

                        <!--begin::User-->
                        <div class="d-flex  btn btn-outline btn-custom align-items-center w-200 mb-2" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-start">
                            <!--begin::User-->
                            <div class="cursor-pointer symbol symbol-35px symbol-lg-40px me-3 ms-n2">
                                <img class="" src="assets/media/avatars/300-3.jpg" alt="user">
                            </div>
                            <!--end::User-->

                            <!--begin:Info-->
                            <div class="d-flex flex-column align-items-start flex-grow-1">
                                <a href="pages/user-profile/projects.html" class="btn-title fs-6 fw-bold">Soeng Souy</a>

                                <a href="pages/user-profile/overview.html" class="btn-desc fs-7 fw-bold d-block">React
                                    Developer</a>
                            </div>
                            <!--end:Info-->

                            <i class="ki-duotone ki-icons/duotune/general/gen033.svg  btn-icon fs-2 me-n2"></i>
                        </div>


                        <!--begin::User account menu-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px" data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <div class="menu-content d-flex align-items-center px-3">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-50px me-5">
                                        <img alt="Logo" src="assets/media/avatars/300-3.jpg">
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Username-->
                                    <div class="d-flex flex-column">
                                        <div class="fw-bold d-flex align-items-center fs-5">
                                            Soeng Souy <span class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">Conectado</span>
                                        </div>

                                        <a href="#" class="fw-semibold text-muted text-hover-primary fs-7">
                                            React Developer </a>
                                    </div>
                                    <!--end::Username-->
                                </div>
                            </div>
                            <!--end::Menu item-->

                            <!--begin::Menu separator-->
                            <div class="separator my-2"></div>
                            <!--end::Menu separator-->

                            <!--begin::Menu item-->
                            <div class="menu-item px-5">
                                <a href="account/overview.html" class="menu-link px-5">
                                    Mi Perfil
                                </a>
                            </div>

                            <div class="separator my-2"></div>


                            <div class="menu-item px-5">
                                <a href="authentication/sign-in/basic.html" class="menu-link px-5">
                                    Salir

                                </a>
                            </div>

                        </div>
                        <!--end::User account menu-->

                    </div>

                    <div class="app-sidebar-navs flex-column-fluid pb-6" id="kt_app_sidebar_navs">
                        <div id="kt_app_sidebar_navs_wrappers" class="hover-scroll-y my-2" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_app_sidebar_header" data-kt-scroll-wrappers="#kt_app_sidebar_navs" data-kt-scroll-offset="5px">

                            {{-- side bar --}}
                            @include('sidebar.sidebar')
                            {{-- content page --}}

                            <!--begin::Footer-->
                            <div id="kt_app_footer" class="app-footer ">
                                <!--begin::Footer container-->
                                <div class="app-container  container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3 ">
                                    <!--begin::Copyright-->
                                    <div class="text-dark order-2 order-md-1">
                                        <span class="text-muted fw-semibold me-1">2023&copy;</span>
                                        <a href="https://keenthemes.com" target="_blank" class="text-gray-800 text-hover-primary">Keenthemes</a>
                                    </div>
                                    <!--end::Copyright-->

                                    <!--begin::Menu-->
                                    <ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
                                        <li class="menu-item"><a href="https://keenthemes.com" target="_blank" class="menu-link px-2">About</a></li>

                                        <li class="menu-item"><a href="https://devs.keenthemes.com" target="_blank" class="menu-link px-2">Support</a></li>

                                        <li class="menu-item"><a href="https://keenthemes.com/products/open-html-pro" target="_blank" class="menu-link px-2">Purchase</a></li>
                                    </ul>
                                    <!--end::Menu-->
                                </div>
                                <!--end::Footer container-->
                            </div>
                            <!--end::Footer-->
                        </div>

                    </div>


                </div>
            </div>
        </div>
    </div>

    <script src="{{asset('assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{asset('assets/js/scripts.bundle.js')}}"><script>
    <script src="{{ asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.js')}}">
    </script>
    <script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <script src="{{ asset('assets/plugins/custom/formrepeater/formrepeater.bundle.js') }}"></script>
    <script src="{{ asset('assets/plugins/custom/fslightbox/fslightbox.bundle.js') }}"></script>
    <script src="{{ asset('assets/plugins/custom/vis-timeline/vis-timeline.bundle.js') }}"></script>
  

    <script src="{{ asset('assets/js/widgets.bundle.js')}}"></script>
    <script src="{{ asset('assets/js/custom/widgets.js')}}"></script>
   

    <script src="{{ URL::to('assets/js/custom/apps/chat/chat.js')}}"></script>
    <script src="{{ URL::to('assets/js/custom/utilities/modals/create-app.js')}}"></script>
    <script src="{{ URL::to('assets/js/custom/utilities/modals/upgrade-plan.js')}}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/users-search.js')}}"></script>
    @yield('script')

</body>
</html>


