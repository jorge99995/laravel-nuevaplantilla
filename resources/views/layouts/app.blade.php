<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ URL::to ('assets/media/logos/favicon.ico') }}">
    <link rel="stylesheet" href="{{ URL::to('assets/plugins/global/plugins.bundle.css') }}">
    <link rel="stylesheet" href="{{ URL::to('assets/css/style.bundle.css') }}">

    <title>Login | ESID PERÚ</title>
</head>
<body id="kt_body" class="app-blank">
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

    <div class="d-flex flex-column flex-root" id="kt_app_root">

        <div class="d-flex flex-column flex-lg-row flex-column-fluid">

            <div class="d-flex flex-column flex-lg-row-auto bg-primary w-xl-600px positon-xl-relative">

                <div class="d-flex flex-column position-xl-fixed top-0 bottom-0 w-xl-600px scroll-y">

                    <div class="d-flex flex-row-fluid flex-column text-center p-5 p-lg-10 pt-lg-20">

                        <a href="../../index.html" class="py-2 py-lg-20">
                            <img alt="Logo" src="../../assets/media/logos/default.svg" class="theme-light-show h-40px h-lg-50px">

                        </a>

                        <h1 class="d-none d-lg-block fw-bold text-white fs-2qx pb-5 pb-md-10">
                            Welcome to Open HTML Pro </h1>



                        <p class="d-none d-lg-block fw-semibold fs-2 text-white">
                            Plan your blog post by choosing a topic creating <br>
                            an outline and checking facts
                        </p>

                    </div>

                    <div class="d-none d-lg-block d-flex flex-row-auto bgi-no-repeat bgi-position-x-center bgi-size-contain bgi-position-y-bottom min-h-100px min-h-lg-350px" style="background-image: url(../../assets/media/illustrations/dozzy-1/17.png)">
                    </div>

                </div>

            </div>
            @yield('content')

        </div>
    </div>
    <script src="{{URL::to('assets/plugins/global/plugins.bundle.js')}}">
        <script>
    <script src="{{URL::to('assets/js/scripts.bundle.js')}}" ><script>
    <script src="{{URL::to('assets/js/custom/authentication/sign-in/general.js')}}" ><script>
</body>
</html>
