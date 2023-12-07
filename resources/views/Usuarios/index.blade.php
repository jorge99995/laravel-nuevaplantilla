@extends('layouts.Master')
@section('content')
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
                  
                    <button type="button" class="btn btn-light-primary me-3"
                            data-bs-toggle="modal" data-bs-target="#kt_modal_export_users">
                            <i class="ki-duotone ki-exit-up fs-2"><i class="path1"></i><i
                                    class="path2"></i></i> Export
                        </button>

                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#kt_modal_add_user">
                            <i class="ki-duotone ki-plus fs-2"></i> Crear Usuario
                        </button>

                </div>

        </div>

        <div class="card-body pt-0">

          
            <div id="kt_ecommerce_sales_table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                <div class="table-responsive">
                    <table class="table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer" id="kt_ecommerce_sales_table">
                     
                        <thead>

                            <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                <th class="w-10px pe-2 sorting_disabled" rowspan="1" colspan="1" aria-label="
                            
                                
                            
                        " style="width: 29.8906px;">
                                    <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                        <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_ecommerce_sales_table .form-check-input" value="1">
                                    </div>
                                </th>
                                <th class="min-w-100px sorting" tabindex="0" aria-controls="kt_ecommerce_sales_table" rowspan="1" colspan="1" aria-label="Order ID: activate to sort column ascending" style="width: 163.844px;">Order ID</th>

                                <th class="min-w-175px sorting" tabindex="0" aria-controls="kt_ecommerce_sales_table" rowspan="1" colspan="1" aria-label="Customer: activate to sort column ascending" style="width: 312.156px;">Customer</th>

                                <th class="text-end min-w-70px sorting" tabindex="0" aria-controls="kt_ecommerce_sales_table" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 120.469px;">Status</th>

                                <th class="text-end min-w-100px sorting" tabindex="0" aria-controls="kt_ecommerce_sales_table" rowspan="1" colspan="1" aria-label="Total: activate to sort column ascending" style="width: 163.844px;">Total</th>

                                <th class="text-end min-w-100px sorting" tabindex="0" aria-controls="kt_ecommerce_sales_table" rowspan="1" colspan="1" aria-label="Date Added: activate to sort column ascending" style="width: 163.844px;">Date Added</th>

                                <th class="text-end min-w-100px sorting" tabindex="0" aria-controls="kt_ecommerce_sales_table" rowspan="1" colspan="1" aria-label="Date Modified: activate to sort column ascending" style="width: 163.844px;">Date Modified</th>

                                <th class="text-end min-w-100px sorting_disabled" rowspan="1" colspan="1" aria-label="Actions" style="width: 163.859px;">Actions</th>
                            </tr>
                            <!--end::Table row-->
                        </thead>
                        <!--end::Table head-->

                        <!--begin::Table body-->
                        <tbody class="fw-semibold text-gray-600">
                           
                            <tr class="odd">
                               
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1">
                                    </div>
                                </td>
                               
                                <td data-kt-ecommerce-order-filter="order_id">
                                    <a href="details.html" class="text-gray-800 text-hover-primary fw-bold">
                                        13368 </a>
                                </td>
                              
                                <td>
                                    <div class="d-flex align-items-center">
                                      
                                        <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                            <a href="../../user-management/users/view.html">
                                                <div class="symbol-label fs-3 bg-light-danger text-danger">
                                                    M </div>
                                            </a>
                                        </div>
                                     

                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="../../user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Melody
                                                Macy</a>
                                          
                                        </div>
                                    </div>
                                </td>
                               
                                <td class="text-end pe-0" data-order="Denied">
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-danger">Denied</div>
                                   
                                </td>
                               
                                <td class="text-end pe-0">
                                    <span class="fw-bold">$475.00</span>
                                </td>
                              
                                <td class="text-end" data-order="2023-03-31">
                                    <span class="fw-bold">31/03/2023</span>
                                </td>
                               
                                <td class="text-end" data-order="2023-04-06">
                                    <span class="fw-bold">06/04/2023</span>
                                </td>
                               
                                <td class="text-end">
                                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        Actions
                                        <i class="ki-duotone ki-down fs-5 ms-1"></i> </a>
                              
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="details.html" class="menu-link px-3">
                                                View
                                            </a>
                                        </div>
                                      
                                        <div class="menu-item px-3">
                                            <a href="edit-order.html" class="menu-link px-3">
                                                Edit
                                            </a>
                                        </div>
                                    
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">
                                                Delete
                                            </a>
                                        </div>
                              
                                    </div>
                                   
                                </td>
                               
                            </tr>                          
                        </tbody>
                    
                    </table>
                </div>
                
            </div>  
        </div>
    </div>
</div>
@endsection
