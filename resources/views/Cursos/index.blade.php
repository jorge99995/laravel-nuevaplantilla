@extends('layouts.Master')
@section('content')
<!--begin::Toolbar-->
<div id="kt_app_toolbar" class="app-toolbar ">

    <!--begin::Toolbar container-->
    <div id="kt_app_toolbar_container" class="app-container  container-fluid d-flex flex-lg-column py-3 py-lg-6 ">

       <div class="page-title d-flex align-items-center gap-1 me-3" data-kt-swapper="true" data-kt-swapper-mode="{default: 'prepend', lg: 'prepend'}" data-kt-swapper-parent="{default: '#kt_app_content_container', lg: '#kt_app_header_wrapper'}">
            <!--begin::Title-->
            <span class="text-gray-900 fw-bolder fs-2x">
                Gestión de Cursos
            </span>

            <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-base ms-3">


                <li class="breadcrumb-item text-gray-700 fw-bold lh-1">
                    <a href="index.html" class="text-gray-700 text-hover-primary">
                        <i class="ki-duotone ki-home fs-3 text-gray-400 ms-2"></i>
                    </a>
                </li>

                <li class="breadcrumb-item">
                    <i class="ki-duotone ki-right fs-4 text-gray-700 mx-n2"></i>
                </li>

                <li class="breadcrumb-item text-gray-700 fw-bold lh-1">
                    Account </li>

                <li class="breadcrumb-item">
                    <i class="ki-duotone ki-right fs-4 text-gray-700 mx-n2"></i>
                </li>

                <li class="breadcrumb-item text-gray-500">
                    Overview </li>



            </ul>

        </div>


        <div class="app-toolbar-container-separator separator d-none d-lg-flex"></div>
        <!--end::Separator-->
    </div>
    <!--end::Toolbar container-->
</div>
<!--end::Toolbar-->
<div id="kt_app_content_container" class="app-container  container-fluid ">

    <div class="card card-flush">

        <div class="card-header align-items-center py-5 gap-2 gap-md-5">

            <div class="card-title">

                <div class="d-flex align-items-center position-relative my-1">
                    <i class="ki-duotone ki-magnifier fs-1 position-absolute ms-4"><i class="path1"></i><i class="path2"></i></i> <input type="text" data-kt-ecommerce-order-filter="search" class="form-control form-control-solid w-250px ps-14" placeholder="Search Order">
                </div>

            </div>



            <div class="card-toolbar">
                <!--begin::Toolbar-->
                <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">

                    <button type="button" class="btn btn-light-primary me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_export_users">
                        <i class="ki-duotone ki-exit-up fs-2"><i class="path1"></i><i class="path2"></i></i> Export
                    </button>

                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal_crear_curso">
                        <i class="ki-duotone ki-plus fs-2"></i> Crear Usuario
                    </button>

                </div>

            </div>

            <div class="card-body pt-0">


                <div id="kt_ecommerce_sales_table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                    <div class="table-responsive">
                        <table class="table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer" id="kt_ecommerce_sales_table">

                            <thead>

                                <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                                   
                           
                                    <th class="min-w-125px">Imagen</th>
                                    <th class="min-w-125px">Categoria</th>
                                    <th class="min-w-125px">Curso </th>
                                    <th class="min-w-125px">Estado</th>
                                    <th class="text-end min-w-100px">Acciones</th>
                                </tr>
                                <!--end::Table row-->
                            </thead>
                            <!--end::Table head-->

                            <!--begin::Table body-->
                            <tbody class="fw-semibold text-gray-600">

                                <tr class="odd">


                                    <td class="d-flex align-items-center">
                                        <!--begin:: Avatar -->
                                        <div
                                            class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                            <a href="view.html">
                                                <div class="symbol-label">
                                                    <img src="../../../assets/media/avatars/300-6.jpg"
                                                        alt="Emma Smith" class="w-100">
                                                </div>
                                            </a>
                                        </div>
                                       
                                        {{--  <div class="d-flex flex-column">
                                            <a href="view.html"
                                                class="text-gray-800 text-hover-primary mb-1">Emma
                                                Smith</a>
                                            <span>smith@kpmg.com</span>
                                        </div>  --}}
                                     

                                    </td>

                                    <td >
                                        <span class="fw-bold">PROGRAMAS DE ESPECIALIZACION</span>
                                    </td>

                                    <td class="d-flex align-items-center">
                                 
                                        <div
                                            class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                            <a href="view.html">
                                                <div class="symbol-label">
                                                    <img src="../../../assets/media/avatars/300-25.jpg"
                                                        alt="Brian Cox" class="w-100">
                                                </div>
                                            </a>
                                        </div>
                                       
                                        <div class="d-flex flex-column">
                                           
                                                <span class="fw-bold">GESTION PUBLICA</span>
                                        </div>
                                

                                    </td>

                                    <td  >
                                        <div class="badge badge-light-success fw-bold">
                                            <span class="fw-bold">ACTIVO</span>
                                        </div>
                                    </td>

                                    

                                    <td class="text-end">
                                        <a href="#" onclick="return false" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">

                                            <span class="svg-icon svg-icon-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor" />
                                                    <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </a>

                                        <a href="#" onclick="return false" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">

                                            <span class="svg-icon svg-icon-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="currentColor" />
                                                    <path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="currentColor" />
                                                    <path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="currentColor" />
                                                </svg>
                                            </span>

                                        </a>

                                    </td>

                                </tr>
                            </tbody>

                        </table>
                    </div>

                </div>
            </div>

            
        </div>
    </div>

</div>

@include('Cursos.create')

    @section('script')

    {{-- delete js --}}
    <script type="text/javascript">
        $(document).ready(function() {
            $("#kt_ecommerce_sales_table").DataTable(

            );

        });

    </script>
    @endsection
    @endsection
