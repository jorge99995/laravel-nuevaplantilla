@extends('layouts.app')
@section('content')
<div class="d-flex flex-column flex-lg-row-fluid py-10">
    <!--begin::Content-->
    <div class="d-flex flex-center flex-column flex-column-fluid">
        <!--begin::Wrapper-->
        <div class="w-lg-500px p-10 p-lg-15 mx-auto">

            <!--begin::Form-->
            <form class="form w-100" novalidate="novalidate" id="kt_sign_in_form" data-kt-redirect-url="/open-html-pro/index.html" action="#">
                <!--begin::Heading-->
                <div class="text-center mb-10">
                    <!--begin::Title-->
                    <h1 class="text-dark mb-3">
                        Sign In to Open HTML Pro </h1>
                    <!--end::Title-->

                    <!--begin::Link-->
                    <div class="text-gray-400 fw-semibold fs-4">
                        New Here?

                        <a href="../sign-up/basic.html" class="link-primary fw-bold">
                            Create an Account
                        </a>
                    </div>
                    <!--end::Link-->
                </div>
                <!--begin::Heading-->

                <!--begin::Input group-->
                <div class="fv-row mb-10">
                    <!--begin::Label-->
                    <label class="form-label fs-6 fw-bold text-dark">Email</label>
                    <!--end::Label-->

                    <!--begin::Input-->
                    <input class="form-control form-control-lg form-control-solid" type="text" name="email" autocomplete="off">
                    <!--end::Input-->
                </div>
                <!--end::Input group-->

                <!--begin::Input group-->
                <div class="fv-row mb-10">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-stack mb-2">
                        <!--begin::Label-->
                        <label class="form-label fw-bold text-dark fs-6 mb-0">Password</label>
                        <!--end::Label-->

                        <!--begin::Link-->
                        <a href="password-reset.html" class="link-primary fs-6 fw-bold">
                            Forgot Password ?
                        </a>
                        <!--end::Link-->
                    </div>
                    <!--end::Wrapper-->

                    <!--begin::Input-->
                    <input class="form-control form-control-lg form-control-solid" type="password" name="password" autocomplete="off">
                    <!--end::Input-->
                </div>
                <!--end::Input group-->

                <!--begin::Actions-->
                <div class="text-center">
                    <!--begin::Submit button-->
                    <button type="submit" id="kt_sign_in_submit" class="btn btn-lg btn-primary w-100 mb-5">
                        <span class="indicator-label">
                            Continue
                        </span>

                        <span class="indicator-progress">
                            Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                        </span>
                    </button>

                    <div class="text-center text-muted text-uppercase fw-bold mb-5">or</div>

                    <a href="#" class="btn btn-flex flex-center btn-light btn-lg w-100 mb-5">
                        <img alt="Logo" src="../../assets/media/svg/brand-logos/google-icon.svg" class="h-20px me-3">
                        Continue with Google
                    </a>

                    <a href="#" class="btn btn-flex flex-center btn-light btn-lg w-100 mb-5">
                        <img alt="Logo" src="../../assets/media/svg/brand-logos/facebook-4.svg" class="h-20px me-3">
                        Continue with Facebook
                    </a>

                    <a href="#" class="btn btn-flex flex-center btn-light btn-lg w-100">
                        <img alt="Logo" src="../../assets/media/svg/brand-logos/apple-black.svg" class="theme-light-show h-20px me-3">
                        <img alt="Logo" src="../../assets/media/svg/brand-logos/apple-black-dark.svg" class="theme-dark-show h-20px me-3">
                        Continue with Apple
                    </a>

                </div>

            </form>

        </div>

    </div>

</div>
@endsection