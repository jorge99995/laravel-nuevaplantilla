 <div id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false" class="menu menu-column menu-rounded menu-sub-indention menu-active-bg mb-7">

     <!--begin:Menu item-->
     <div class="menu-item pt-5">
         <!--begin:Menu content-->
         <div class="menu-content"><span class="menu-heading fw-bold text-uppercase fs-5">Dashboards</span></div>
         <!--end:Menu content-->
     </div>

     <div class="menu-item">
         <a class="menu-link active" href="{{ route('home') }}"><span class="menu-icon"><i class="ki-duotone ki-element-11 fs-1"><i class="path1"></i><i class="path2"></i><i class="path3"></i><i class="path4"></i></i></span><span class="menu-title">Dashboard</span></a>
     </div>

     {{-- <div class="menu-item">
         <a class="menu-link" href="dashboards/projects.html"><span class="menu-icon"><i class="ki-duotone ki-some-files fs-1"><i class="path1"></i><i class="path2"></i></i></span><span class="menu-title">Projects</span></a>

     </div>

     <div class="menu-item">
         <a class="menu-link" href="dashboards/ecommerce.html"><span class="menu-icon"><i class="ki-duotone ki-chart-line-star fs-1"><i class="path1"></i><i class="path2"></i><i class="path3"></i></i></span><span class="menu-title">eCommerce</span></a>

     </div>  --}}

     {{-- <div class="menu-item">
         <a class="menu-link" href="dashboards/bidding.html"><span class="menu-icon"><i class="ki-duotone ki-rescue fs-1"><i class="path1"></i><i class="path2"></i></i></span><span class="menu-title">Bidding</span></a>

     </div>  --}}

     <div class="menu-item pt-7">
         <div class="menu-content"><span class="menu-heading fw-bold text-uppercase fs-5">Paginas</span></div>
     </div>

     <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
         <span class="menu-link">
             <span class="menu-icon">
                 <i class="ki-duotone ki-shield-tick fs-1"><i class="path1"></i><i class="path2"></i></i>
             </span>
             <span class="menu-title">Gestion de Usuarios</span>
             <span class="menu-arrow"></span>
         </span>

         <div class="menu-sub menu-sub-accordion">
             <div class="menu-item">
                 <a class="menu-link" href="{{route('usuarios')}}"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Lista de Usuarios</span></a>

             </div>

             <!--end:Menu item-->
         </div>
         <!--end:Menu sub-->
     </div>

     <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
         <span class="menu-link"><span class="menu-icon"><i class="ki-duotone ki-chart-pie-4 fs-1"><i class="path1"></i><i class="path2"></i><i class="path3"></i></i></span><span class="menu-title">Gestión de Cursos</span><span class="menu-arrow"></span></span>

         <div class="menu-sub menu-sub-accordion">
             <!--begin:Menu item-->
             <div class="menu-item">
                <a class="menu-link" href="{{route('cursos')}}"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Lista de Cursos</span></a>

            </div>

         </div>

     </div>
     <!--end:Menu item-->
     <!--begin:Menu item-->
     <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
         <!--begin:Menu link--><span class="menu-link"><span class="menu-icon"><i class="ki-duotone ki-user fs-1"><i class="path1"></i><i class="path2"></i></i></span><span class="menu-title">Authentication</span><span class="menu-arrow"></span></span>
         <!--end:Menu link-->
         <!--begin:Menu sub-->
         <div class="menu-sub menu-sub-accordion">
             <!--begin:Menu item-->
             <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                 <!--begin:Menu link--><span class="menu-link"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Sign In</span><span class="menu-arrow"></span></span>
                 <!--end:Menu link-->
                 <!--begin:Menu sub-->
                 <div class="menu-sub menu-sub-accordion menu-active-bg">
                     <!--begin:Menu item-->
                     <div class="menu-item">
                         <!--begin:Menu link--><a class="menu-link" href="authentication/sign-in/basic.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Basic</span></a>
                         <!--end:Menu link-->
                     </div>
                     <!--end:Menu item-->
                     <!--begin:Menu item-->
                     <div class="menu-item">
                         <!--begin:Menu link--><a class="menu-link" href="authentication/sign-in/two-steps.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Two Steps</span></a>
                         <!--end:Menu link-->
                     </div>
                     <!--end:Menu item-->
                     <!--begin:Menu item-->
                     <div class="menu-item">
                         <!--begin:Menu link--><a class="menu-link" href="authentication/sign-in/password-reset.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Password
                                 Reset</span></a>
                         <!--end:Menu link-->
                     </div>
                     <!--end:Menu item-->
                     <!--begin:Menu item-->
                     <div class="menu-item">
                         <!--begin:Menu link--><a class="menu-link" href="authentication/sign-in/new-password.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">New
                                 Password</span></a>
                         <!--end:Menu link-->
                     </div>
                     <!--end:Menu item-->
                 </div>
                 <!--end:Menu sub-->
             </div>
             <!--end:Menu item-->
             <!--begin:Menu item-->
             <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                 <!--begin:Menu link--><span class="menu-link"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Sign Up</span><span class="menu-arrow"></span></span>
                 <!--end:Menu link-->
                 <!--begin:Menu sub-->
                 <div class="menu-sub menu-sub-accordion menu-active-bg">
                     <!--begin:Menu item-->
                     <div class="menu-item">
                         <!--begin:Menu link--><a class="menu-link" href="authentication/sign-up/basic.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Basic</span></a>
                         <!--end:Menu link-->
                     </div>
                     <!--end:Menu item-->
                     <!--begin:Menu item-->
                     <div class="menu-item">
                         <!--begin:Menu link--><a class="menu-link" href="authentication/sign-up/multi-steps.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Multi-steps</span></a>
                         <!--end:Menu link-->
                     </div>
                     <!--end:Menu item-->
                     <!--begin:Menu item-->
                     <div class="menu-item">
                         <!--begin:Menu link--><a class="menu-link" href="authentication/sign-up/free-trial.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Free Trial</span></a>
                         <!--end:Menu link-->
                     </div>
                     <!--end:Menu item-->
                     <!--begin:Menu item-->
                     <div class="menu-item">
                         <!--begin:Menu link--><a class="menu-link" href="authentication/sign-up/coming-soon.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Coming
                                 Soon</span></a>
                         <!--end:Menu link-->
                     </div>
                     <!--end:Menu item-->
                 </div>
                 <!--end:Menu sub-->
             </div>
             <!--end:Menu item-->
             <!--begin:Menu item-->
             <div class="menu-item">
                 <!--begin:Menu link--><a class="menu-link" href="authentication/general/welcome.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Welcome Message</span></a>
                 <!--end:Menu link-->
             </div>
             <!--end:Menu item-->
             <!--begin:Menu item-->
             <div class="menu-item">
                 <!--begin:Menu link--><a class="menu-link" href="authentication/general/verify-email.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Verify Email</span></a>
                 <!--end:Menu link-->
             </div>
             <!--end:Menu item-->
             <!--begin:Menu item-->
             <div class="menu-item">
                 <!--begin:Menu link--><a class="menu-link" href="authentication/general/password-confirmation.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Password
                         Confirmation</span></a>
                 <!--end:Menu link-->
             </div>
             <!--end:Menu item-->
             <!--begin:Menu item-->
             <div class="menu-item">
                 <!--begin:Menu link--><a class="menu-link" href="authentication/general/deactivation.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Account
                         Deactivation</span></a>
                 <!--end:Menu link-->
             </div>
             <!--end:Menu item-->
             <!--begin:Menu item-->
             <div class="menu-item">
                 <!--begin:Menu link--><a class="menu-link" href="authentication/general/error-404.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Error 404</span></a>
                 <!--end:Menu link-->
             </div>
             <!--end:Menu item-->
             <!--begin:Menu item-->
             <div class="menu-item">
                 <!--begin:Menu link--><a class="menu-link" href="authentication/general/error-500.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Error 500</span></a>
                 <!--end:Menu link-->
             </div>
             <!--end:Menu item-->
             <!--begin:Menu item-->
             <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                 <!--begin:Menu link--><span class="menu-link"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Email Templates</span><span class="menu-arrow"></span></span>
                 <!--end:Menu link-->
                 <!--begin:Menu sub-->
                 <div class="menu-sub menu-sub-accordion menu-active-bg">
                     <!--begin:Menu item-->
                     <div class="menu-item">
                         <!--begin:Menu link--><a class="menu-link" href="authentication/email/verify-email.html" target="_blank"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Verify
                                 Email</span></a>
                         <!--end:Menu link-->
                     </div>
                     <!--end:Menu item-->
                     <!--begin:Menu item-->
                     <div class="menu-item">
                         <!--begin:Menu link--><a class="menu-link" href="authentication/email/invitation.html" target="_blank"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Account
                                 Invitation</span></a>
                         <!--end:Menu link-->
                     </div>
                     <!--end:Menu item-->
                     <!--begin:Menu item-->
                     <div class="menu-item">
                         <!--begin:Menu link--><a class="menu-link" href="authentication/email/password-reset.html" target="_blank"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Password
                                 Reset</span></a>
                         <!--end:Menu link-->
                     </div>
                     <!--end:Menu item-->
                     <!--begin:Menu item-->
                     <div class="menu-item">
                         <!--begin:Menu link--><a class="menu-link" href="authentication/email/password-change.html" target="_blank"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Password
                                 Changed</span></a>
                         <!--end:Menu link-->
                     </div>
                     <!--end:Menu item-->
                 </div>
                 <!--end:Menu sub-->
             </div>
             <!--end:Menu item-->
         </div>
         <!--end:Menu sub-->
     </div>
     <!--end:Menu item-->
     <!--begin:Menu item-->
     <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
         <!--begin:Menu link--><span class="menu-link"><span class="menu-icon"><i class="ki-duotone ki-rocket fs-1"><i class="path1"></i><i class="path2"></i></i></span><span class="menu-title">General</span><span class="menu-arrow"></span></span>
         <!--end:Menu link-->
         <!--begin:Menu sub-->
         <div class="menu-sub menu-sub-accordion">
             <!--begin:Menu item-->
             <div class="menu-item">
                 <!--begin:Menu link--><a class="menu-link" href="pages/general/about.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">About Us</span></a>
                 <!--end:Menu link-->
             </div>
             <!--end:Menu item-->
             <!--begin:Menu item-->
             <div class="menu-item">
                 <!--begin:Menu link--><a class="menu-link" href="pages/general/invoice.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Invoice</span></a>
                 <!--end:Menu link-->
             </div>
             <!--end:Menu item-->
             <!--begin:Menu item-->
             <div class="menu-item">
                 <!--begin:Menu link--><a class="menu-link" href="pages/general/faq.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">FAQ</span></a>
                 <!--end:Menu link-->
             </div>
             <!--end:Menu item-->
             <!--begin:Menu item-->
             <div class="menu-item">
                 <!--begin:Menu link--><a class="menu-link" href="pages/general/wizard.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Wizard</span></a>
                 <!--end:Menu link-->
             </div>
             <!--end:Menu item-->
             <!--begin:Menu item-->
             <div class="menu-item">
                 <!--begin:Menu link--><a class="menu-link" href="pages/general/pricing.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Pricing</span></a>
                 <!--end:Menu link-->
             </div>
             <!--end:Menu item-->
         </div>
         <!--end:Menu sub-->
     </div>
     <!--end:Menu item-->
     <!--begin:Menu item-->
     <div class="menu-item pt-7">
         <!--begin:Menu content-->
         <div class="menu-content"><span class="menu-heading fw-bold text-uppercase fs-5">APPS</span></div>
         <!--end:Menu content-->
     </div>
     <!--end:Menu item-->
     <!--begin:Menu item-->
     <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
         <!--begin:Menu link--><span class="menu-link"><span class="menu-icon"><i class="ki-duotone ki-abstract-41 fs-1"><i class="path1"></i><i class="path2"></i></i></span><span class="menu-title">Projects</span><span class="menu-arrow"></span></span>
         <!--end:Menu link-->
         <!--begin:Menu sub-->
         <div class="menu-sub menu-sub-accordion">
             <!--begin:Menu item-->
             <div class="menu-item">
                 <!--begin:Menu link--><a class="menu-link" href="apps/projects/list.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">My Projects</span></a>
                 <!--end:Menu link-->
             </div>
             <!--end:Menu item-->
             <!--begin:Menu item-->
             <div class="menu-item">
                 <!--begin:Menu link--><a class="menu-link" href="apps/projects/project.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">View Project</span></a>
                 <!--end:Menu link-->
             </div>
             <!--end:Menu item-->
             <!--begin:Menu item-->
             <div class="menu-item">
                 <!--begin:Menu link--><a class="menu-link" href="apps/projects/targets.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Targets</span></a>
                 <!--end:Menu link-->
             </div>
             <!--end:Menu item-->
             <!--begin:Menu item-->
             <div class="menu-item">
                 <!--begin:Menu link--><a class="menu-link" href="apps/projects/budget.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Budget</span></a>
                 <!--end:Menu link-->
             </div>
             <!--end:Menu item-->
             <!--begin:Menu item-->
             <div class="menu-item">
                 <!--begin:Menu link--><a class="menu-link" href="apps/projects/users.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Users</span></a>
                 <!--end:Menu link-->
             </div>
             <!--end:Menu item-->
             <!--begin:Menu item-->
             <div class="menu-item">
                 <!--begin:Menu link--><a class="menu-link" href="apps/projects/files.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Files</span></a>
                 <!--end:Menu link-->
             </div>
             <!--end:Menu item-->
             <!--begin:Menu item-->
             <div class="menu-item">
                 <!--begin:Menu link--><a class="menu-link" href="apps/projects/activity.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Activity</span></a>
                 <!--end:Menu link-->
             </div>
             <!--end:Menu item-->
             <!--begin:Menu item-->
             <div class="menu-item">
                 <!--begin:Menu link--><a class="menu-link" href="apps/projects/settings.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Settings</span></a>
                 <!--end:Menu link-->
             </div>
             <!--end:Menu item-->
         </div>
         <!--end:Menu sub-->
     </div>
     <!--end:Menu item-->
     <!--begin:Menu item-->
     <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
         <!--begin:Menu link--><span class="menu-link"><span class="menu-icon"><i class="ki-duotone ki-basket fs-1"><i class="path1"></i><i class="path2"></i><i class="path3"></i><i class="path4"></i></i></span><span class="menu-title">eCommerce</span><span class="menu-arrow"></span></span>
         <!--end:Menu link-->
         <!--begin:Menu sub-->
         <div class="menu-sub menu-sub-accordion">
             <!--begin:Menu item-->
             <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                 <!--begin:Menu link--><span class="menu-link"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Catalog</span><span class="menu-arrow"></span></span>
                 <!--end:Menu link-->
                 <!--begin:Menu sub-->
                 <div class="menu-sub menu-sub-accordion">
                     <!--begin:Menu item-->
                     <div class="menu-item">
                         <!--begin:Menu link--><a class="menu-link" href="apps/ecommerce/catalog/products.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Products</span></a>
                         <!--end:Menu link-->
                     </div>
                     <!--end:Menu item-->
                     <!--begin:Menu item-->
                     <div class="menu-item">
                         <!--begin:Menu link--><a class="menu-link" href="apps/ecommerce/catalog/categories.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Categories</span></a>
                         <!--end:Menu link-->
                     </div>
                     <!--end:Menu item-->
                     <!--begin:Menu item-->
                     <div class="menu-item">
                         <!--begin:Menu link--><a class="menu-link" href="apps/ecommerce/catalog/add-product.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Add
                                 Product</span></a>
                         <!--end:Menu link-->
                     </div>
                     <!--end:Menu item-->
                     <!--begin:Menu item-->
                     <div class="menu-item">
                         <!--begin:Menu link--><a class="menu-link" href="apps/ecommerce/catalog/edit-product.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Edit
                                 Product</span></a>
                         <!--end:Menu link-->
                     </div>
                     <!--end:Menu item-->
                     <!--begin:Menu item-->
                     <div class="menu-item">
                         <!--begin:Menu link--><a class="menu-link" href="apps/ecommerce/catalog/add-category.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Add
                                 Category</span></a>
                         <!--end:Menu link-->
                     </div>
                     <!--end:Menu item-->
                     <!--begin:Menu item-->
                     <div class="menu-item">
                         <!--begin:Menu link--><a class="menu-link" href="apps/ecommerce/catalog/edit-category.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Edit
                                 Category</span></a>
                         <!--end:Menu link-->
                     </div>
                     <!--end:Menu item-->
                 </div>
                 <!--end:Menu sub-->
             </div>
             <!--end:Menu item-->
             <!--begin:Menu item-->
             <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                 <!--begin:Menu link--><span class="menu-link"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Sales</span><span class="menu-arrow"></span></span>
                 <!--end:Menu link-->
                 <!--begin:Menu sub-->
                 <div class="menu-sub menu-sub-accordion">
                     <!--begin:Menu item-->
                     <div class="menu-item">
                         <!--begin:Menu link--><a class="menu-link" href="apps/ecommerce/sales/listing.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Orders
                                 Listing</span></a>
                         <!--end:Menu link-->
                     </div>
                     <!--end:Menu item-->
                     <!--begin:Menu item-->
                     <div class="menu-item">
                         <!--begin:Menu link--><a class="menu-link" href="apps/ecommerce/sales/details.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Order
                                 Details</span></a>
                         <!--end:Menu link-->
                     </div>
                     <!--end:Menu item-->
                     <!--begin:Menu item-->
                     <div class="menu-item">
                         <!--begin:Menu link--><a class="menu-link" href="apps/ecommerce/sales/add-order.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Add Order</span></a>
                         <!--end:Menu link-->
                     </div>
                     <!--end:Menu item-->
                     <!--begin:Menu item-->
                     <div class="menu-item">
                         <!--begin:Menu link--><a class="menu-link" href="apps/ecommerce/sales/edit-order.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Edit Order</span></a>
                         <!--end:Menu link-->
                     </div>
                     <!--end:Menu item-->
                 </div>
                 <!--end:Menu sub-->
             </div>
             <!--end:Menu item-->
             <!--begin:Menu item-->
             <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                 <!--begin:Menu link--><span class="menu-link"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Customers</span><span class="menu-arrow"></span></span>
                 <!--end:Menu link-->
                 <!--begin:Menu sub-->
                 <div class="menu-sub menu-sub-accordion">
                     <!--begin:Menu item-->
                     <div class="menu-item">
                         <!--begin:Menu link--><a class="menu-link" href="apps/ecommerce/customers/listing.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Customer
                                 Listing</span></a>
                         <!--end:Menu link-->
                     </div>
                     <!--end:Menu item-->
                     <!--begin:Menu item-->
                     <div class="menu-item">
                         <!--begin:Menu link--><a class="menu-link" href="apps/ecommerce/customers/details.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Customer
                                 Details</span></a>
                         <!--end:Menu link-->
                     </div>
                     <!--end:Menu item-->
                 </div>
                 <!--end:Menu sub-->
             </div>
             <!--end:Menu item-->
             <!--begin:Menu item-->
             <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                 <!--begin:Menu link--><span class="menu-link"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Reports</span><span class="menu-arrow"></span></span>
                 <!--end:Menu link-->
                 <!--begin:Menu sub-->
                 <div class="menu-sub menu-sub-accordion">
                     <!--begin:Menu item-->
                     <div class="menu-item">
                         <!--begin:Menu link--><a class="menu-link" href="apps/ecommerce/reports/view.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Products
                                 Viewed</span></a>
                         <!--end:Menu link-->
                     </div>
                     <!--end:Menu item-->
                     <!--begin:Menu item-->
                     <div class="menu-item">
                         <!--begin:Menu link--><a class="menu-link" href="apps/ecommerce/reports/sales.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Sales</span></a>
                         <!--end:Menu link-->
                     </div>
                     <!--end:Menu item-->
                     <!--begin:Menu item-->
                     <div class="menu-item">
                         <!--begin:Menu link--><a class="menu-link" href="apps/ecommerce/reports/returns.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Returns</span></a>
                         <!--end:Menu link-->
                     </div>
                     <!--end:Menu item-->
                     <!--begin:Menu item-->
                     <div class="menu-item">
                         <!--begin:Menu link--><a class="menu-link" href="apps/ecommerce/reports/customer-orders.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Customer
                                 Orders</span></a>
                         <!--end:Menu link-->
                     </div>
                     <!--end:Menu item-->
                     <!--begin:Menu item-->
                     <div class="menu-item">
                         <!--begin:Menu link--><a class="menu-link" href="apps/ecommerce/reports/shipping.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Shipping</span></a>
                         <!--end:Menu link-->
                     </div>
                     <!--end:Menu item-->
                 </div>
                 <!--end:Menu sub-->
             </div>
             <!--end:Menu item-->
             <!--begin:Menu item-->
             <div class="menu-item">
                 <!--begin:Menu link--><a class="menu-link" href="apps/ecommerce/settings.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Settings</span></a>
                 <!--end:Menu link-->
             </div>
             <!--end:Menu item-->
         </div>
         <!--end:Menu sub-->
     </div>
     <!--end:Menu item-->
     <!--begin:Menu item-->
     <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
         <!--begin:Menu link--><span class="menu-link"><span class="menu-icon"><i class="ki-duotone ki-abstract-28 fs-1"><i class="path1"></i><i class="path2"></i></i></span><span class="menu-title">User
                 Management</span><span class="menu-arrow"></span></span>
         <!--end:Menu link-->
         <!--begin:Menu sub-->
         <div class="menu-sub menu-sub-accordion">
             <!--begin:Menu item-->
             <div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
                 <!--begin:Menu link--><span class="menu-link"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Users</span><span class="menu-arrow"></span></span>
                 <!--end:Menu link-->
                 <!--begin:Menu sub-->
                 <div class="menu-sub menu-sub-accordion">
                     <!--begin:Menu item-->
                     <div class="menu-item">
                         <!--begin:Menu link--><a class="menu-link" href="apps/user-management/users/list.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Users List</span></a>
                         <!--end:Menu link-->
                     </div>
                     <!--end:Menu item-->
                     <!--begin:Menu item-->
                     <div class="menu-item">
                         <!--begin:Menu link--><a class="menu-link" href="apps/user-management/users/view.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">View User</span></a>
                         <!--end:Menu link-->
                     </div>
                     <!--end:Menu item-->
                 </div>
                 <!--end:Menu sub-->
             </div>
             <!--end:Menu item-->
             <!--begin:Menu item-->
             <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                 <!--begin:Menu link--><span class="menu-link"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Roles</span><span class="menu-arrow"></span></span>
                 <!--end:Menu link-->
                 <!--begin:Menu sub-->
                 <div class="menu-sub menu-sub-accordion">
                     <!--begin:Menu item-->
                     <div class="menu-item">
                         <!--begin:Menu link--><a class="menu-link" href="apps/user-management/roles/list.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Roles List</span></a>
                         <!--end:Menu link-->
                     </div>
                     <!--end:Menu item-->
                     <!--begin:Menu item-->
                     <div class="menu-item">
                         <!--begin:Menu link--><a class="menu-link" href="apps/user-management/roles/view.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">View Role</span></a>
                         <!--end:Menu link-->
                     </div>
                     <!--end:Menu item-->
                 </div>
                 <!--end:Menu sub-->
             </div>
             <!--end:Menu item-->
             <!--begin:Menu item-->
             <div class="menu-item">
                 <!--begin:Menu link--><a class="menu-link" href="apps/user-management/permissions.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Permissions</span></a>
                 <!--end:Menu link-->
             </div>
             <!--end:Menu item-->
         </div>
         <!--end:Menu sub-->
     </div>
     <!--end:Menu item-->
     <!--begin:Menu item-->
     <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
         <!--begin:Menu link--><span class="menu-link"><span class="menu-icon"><i class="ki-duotone ki-abstract-9 fs-1"><i class="path1"></i><i class="path2"></i></i></span><span class="menu-title">Subscription</span><span class="menu-arrow"></span></span>
         <!--end:Menu link-->
         <!--begin:Menu sub-->
         <div class="menu-sub menu-sub-accordion">
             <!--begin:Menu item-->
             <div class="menu-item">
                 <!--begin:Menu link--><a class="menu-link" href="apps/subscriptions/getting-started.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Getting Started</span></a>
                 <!--end:Menu link-->
             </div>
             <!--end:Menu item-->
             <!--begin:Menu item-->
             <div class="menu-item">
                 <!--begin:Menu link--><a class="menu-link" href="apps/subscriptions/list.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Subscription List</span></a>
                 <!--end:Menu link-->
             </div>
             <!--end:Menu item-->
             <!--begin:Menu item-->
             <div class="menu-item">
                 <!--begin:Menu link--><a class="menu-link" href="apps/subscriptions/add.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Add Subscription</span></a>
                 <!--end:Menu link-->
             </div>
             <!--end:Menu item-->
             <!--begin:Menu item-->
             <div class="menu-item">
                 <!--begin:Menu link--><a class="menu-link" href="apps/subscriptions/view.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">View Subscription</span></a>
                 <!--end:Menu link-->
             </div>
             <!--end:Menu item-->
         </div>
         <!--end:Menu sub-->
     </div>
     <!--end:Menu item-->
     <!--begin:Menu item-->
     <div class="menu-item pt-7">
         <!--begin:Menu content-->
         <div class="menu-content"><span class="menu-heading fw-bold text-uppercase fs-5">Resources</span></div>
         <!--end:Menu content-->
     </div>
     <!--end:Menu item-->
     <!--begin:Menu item-->
     <div class="menu-item">
         <!--begin:Menu link--><a class="menu-link" href="https://preview.keenthemes.com/html/open-html-pro/docs/base/utilities" target="_blank" title="Check out over 200 in-house components, plugins and ready for use solutions" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right"><span class="menu-icon"><i class="ki-duotone ki-element-8 fs-1"><i class="path1"></i><i class="path2"></i></i></span><span class="menu-title">Components</span></a>
         <!--end:Menu link-->
     </div>
     <!--end:Menu item-->
     <!--begin:Menu item-->
     <div class="menu-item">
         <!--begin:Menu link--><a class="menu-link" href="https://preview.keenthemes.com/html/open-html-pro/docs" target="_blank" title="Check out the complete documentation" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right"><span class="menu-icon"><i class="ki-duotone ki-abstract-14 fs-1"><i class="path1"></i><i class="path2"></i></i></span><span class="menu-title">Documentation</span></a>
         <!--end:Menu link-->
     </div>
     <!--end:Menu item-->
     <!--begin:Menu item-->
     <div class="menu-item">
         <!--begin:Menu link--><a class="menu-link" href="layout-builder.html" title="Build your layout, preview and export HTML for server side integration" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right"><span class="menu-icon"><i class="ki-duotone ki-switch fs-1"><i class="path1"></i><i class="path2"></i></i></span><span class="menu-title">Layout
                 Builder</span></a>
         <!--end:Menu link-->
     </div>
     <!--end:Menu item-->
     <!--begin:Menu item-->
     <div class="menu-item">
         <!--begin:Menu link--><a class="menu-link" href="https://preview.keenthemes.com/html/open-html-pro/docs/getting-started/changelog" target="_blank"><span class="menu-icon"><i class="ki-duotone ki-arrows-loop fs-1"><i class="path1"></i><i class="path2"></i></i></span><span class="menu-title">Changelog
                 v1.0.0</span></a>
         <!--end:Menu link-->
     </div>
     <!--end:Menu item-->
 </div>
