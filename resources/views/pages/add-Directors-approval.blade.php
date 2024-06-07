<!DOCTYPE html>


<html
  lang="en"
  class="light-style layout-menu-fixed layout-compact"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="./assets/"
  data-template="horizontal-menu-template">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Directors-approval</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="./assets/img/favicon/logo.png" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&ampdisplay=swap"
      rel="stylesheet" />

    <!-- Icons -->
    <link rel="stylesheet" href="./assets/vendor/fonts/fontawesome.css" />
    <link rel="stylesheet" href="./assets/vendor/fonts/tabler-icons.css" />
    <link rel="stylesheet" href="./assets/vendor/fonts/flag-icons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="./assets/vendor/css/rtl/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="./assets/css/demo.css" />
    <link rel="stylesheet" href="./assets/vendor/libs/select2/select2.css">
    <!-- Vendors CSS -->
    <link rel="stylesheet" href="./assets/vendor/libs/node-waves/node-waves.css" />
    <link rel="stylesheet" href="./assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="./assets/vendor/libs/typeahead-js/typeahead.css" />
    <link rel="stylesheet" href="./assets/vendor/libs/apex-charts/apex-charts.css" />
    <link rel="stylesheet" href="./assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css" />

    <link rel="stylesheet" href="./assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css" />
    <link rel="stylesheet" href="./assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css" />

   
   
    <link rel="stylesheet" href="./assets/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="./assets/css/style.css" />
    <!-- Helpers -->
    <script src="./assets/vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="./assets/vendor/js/template-customizer.js"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="./assets/js/config.js"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-navbar-full layout-horizontal layout-without-menu">
      <div class="layout-container">
        <!-- Navbar -->
        <nav class="layout-navbar navbar navbar-expand-xl align-items-center bg-navbar-theme" id="layout-navbar">
          <div class="container-xxl">
            <div class="navbar-brand app-brand demo d-none d-xl-flex  py-0 me-4">
              <a href="/" class="app-brand-link gap-2">
                <span class="app-brand-logo demo">
                  <img src="./assets/img/favicon/logo.png"width="150" height="50"  alt="logo-brand">
            
                </span>
              </a>

              <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-xl-none">
                <i class="ti ti-x ti-sm align-middle"></i>
              </a>
              
            </div>

            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="ti ti-menu-2 ti-sm"></i>
              </a>
            </div>
            
           
            <div class="navbar-nav-right d-flex align-items-center flex-wrap" id="navbar-collapse">
              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!----->
              <!-- chat -->
              <li class="nav-item   me-2 me-xl-0">
                <a class="nav-link  hide-arrow" href="Chat" title="chat">
                  <i class="menu-icon tf-icons ti ti-messages"></i>
                </a>
                
              </li>
              <!--/ chat -->
            <!---->
                <!-- Language -->
                <li class="nav-item dropdown-language dropdown me-2 me-xl-0">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <i class="ti ti-language rounded-circle ti-md"></i>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="javascript:void(0);" data-language="en">
                        <span class="align-middle">English</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="javascript:void(0);" data-language="ar">
                        <span class="align-middle">Arabic</span>
                      </a>
                    </li>
                  
                   
                  </ul>
                </li>
                <!--/ Language -->

                <!-- Search -->
                <li class="nav-item navbar-search-wrapper me-2 me-xl-0">
                  <a class="nav-link search-toggler" href="javascript:void(0);">
                    <i class="ti ti-search ti-md"></i>
                  </a>
                </li>
                <!-- /Search -->

                <!-- Style Switcher -->
                <li class="nav-item dropdown-style-switcher dropdown me-2 me-xl-0">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <i class="ti ti-md"></i>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-styles">
                    <li>
                      <a class="dropdown-item" href="javascript:void(0);" data-theme="light">
                        <span class="align-middle"><i class="ti ti-sun me-2"></i>Light</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="javascript:void(0);" data-theme="dark">
                        <span class="align-middle"><i class="ti ti-moon me-2"></i>Dark</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="javascript:void(0);" data-theme="system">
                        <span class="align-middle"><i class="ti ti-device-desktop me-2"></i>System</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!-- / Style Switcher-->

                <!-- Quick links  -->
                <li class="nav-item dropdown-shortcuts navbar-dropdown dropdown me-2 me-xl-0">
                  <a
                    class="nav-link dropdown-toggle hide-arrow"
                    href="javascript:void(0);"
                    data-bs-toggle="dropdown"
                    data-bs-auto-close="outside"
                    aria-expanded="false">
                    <i class="ti ti-layout-grid-add ti-md"></i>
                  </a>
                  <div class="dropdown-menu dropdown-menu-end py-0">
                    <div class="dropdown-menu-header border-bottom">
                      <div class="dropdown-header d-flex align-items-center py-3">
                        <h5 class="text-body mb-0 me-auto">Shortcuts</h5>
                        <a
                          href="javascript:void(0)"
                          class="dropdown-shortcuts-add text-body"
                          data-bs-toggle="tooltip"
                          data-bs-placement="top"
                          title="Add shortcuts"
                          ><i class="ti ti-sm ti-apps"></i
                        ></a>
                      </div>
                    </div>
                    <div class="dropdown-shortcuts-list scrollable-container">
                      <div class="row row-bordered overflow-visible g-0">
                        <div class="dropdown-shortcuts-item col">
                          <span class="dropdown-shortcuts-icon rounded-circle mb-2">
                            <i class="ti ti-calendar fs-4"></i>
                          </span>
                          <a href="app-calendar" class="stretched-link">Calendar</a>
                          <small class="text-muted mb-0">Appointments</small>
                        </div>
                        <div class="dropdown-shortcuts-item col">
                          <span class="dropdown-shortcuts-icon rounded-circle mb-2">
                            <i class="ti ti-file-invoice fs-4"></i>
                          </span>
                          <a href="app-invoice-list" class="stretched-link">Invoice App</a>
                          <small class="text-muted mb-0">Manage Accounts</small>
                        </div>
                      </div>
                      <div class="row row-bordered overflow-visible g-0">
                        <div class="dropdown-shortcuts-item col">
                          <span class="dropdown-shortcuts-icon rounded-circle mb-2">
                            <i class="ti ti-users fs-4"></i>
                          </span>
                          <a href="app-user-list" class="stretched-link">User App</a>
                          <small class="text-muted mb-0">Manage Users</small>
                        </div>
                        <div class="dropdown-shortcuts-item col">
                          <span class="dropdown-shortcuts-icon rounded-circle mb-2">
                            <i class="ti ti-lock fs-4"></i>
                          </span>
                          <a href="app-access-roles" class="stretched-link">Role Management</a>
                          <small class="text-muted mb-0">Permission</small>
                        </div>
                      </div>
                      <div class="row row-bordered overflow-visible g-0">
                        <div class="dropdown-shortcuts-item col">
                          <span class="dropdown-shortcuts-icon rounded-circle mb-2">
                            <i class="ti ti-chart-bar fs-4"></i>
                          </span>
                          <a href="/" class="stretched-link">Dashboard</a>
                          <small class="text-muted mb-0">User Profile</small>
                        </div>
                        <div class="dropdown-shortcuts-item col">
                          <span class="dropdown-shortcuts-icon rounded-circle mb-2">
                            <i class="ti ti-settings fs-4"></i>
                          </span>
                          <a href="pages-account-settings-account" class="stretched-link">Setting</a>
                          <small class="text-muted mb-0">Account Settings</small>
                        </div>
                      </div>
                      <div class="row row-bordered overflow-visible g-0">
                        <div class="dropdown-shortcuts-item col">
                          <span class="dropdown-shortcuts-icon rounded-circle mb-2">
                            <i class="ti ti-help fs-4"></i>
                          </span>
                          <a href="pages-faq" class="stretched-link">FAQs</a>
                          <small class="text-muted mb-0">FAQs & Articles</small>
                        </div>
                        <div class="dropdown-shortcuts-item col">
                          <span class="dropdown-shortcuts-icon rounded-circle mb-2">
                            <i class="ti ti-square fs-4"></i>
                          </span>
                          <a href="modal-examples" class="stretched-link">Modals</a>
                          <small class="text-muted mb-0">Useful Popups</small>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <!-- Quick links -->

                <!-- Notification -->
                <li class="nav-item dropdown-notifications navbar-dropdown dropdown me-3 me-xl-1">
                  <a
                    class="nav-link dropdown-toggle hide-arrow"
                    href="javascript:void(0);"
                    data-bs-toggle="dropdown"
                    data-bs-auto-close="outside"
                    aria-expanded="false">
                    <i class="ti ti-bell ti-md"></i>
                    <span class="badge bg-danger rounded-pill badge-notifications text-bg-danger">5</span>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end py-0">
                    <li class="dropdown-menu-header border-bottom">
                      <div class="dropdown-header d-flex align-items-center py-3">
                        <h5 class="text-body mb-0 me-auto">Notification</h5>
                        <a
                          href="javascript:void(0)"
                          class="dropdown-notifications-all text-body"
                          data-bs-toggle="tooltip"
                          data-bs-placement="top"
                          title="Mark all as read"
                          ><i class="ti ti-mail-opened fs-4"></i
                        ></a>
                      </div>
                    </li>
                    <li class="dropdown-notifications-list scrollable-container">
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item list-group-item-action dropdown-notifications-item">
                          <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                              <div class="avatar">
                                <img src="./assets/img/avatars/1.png" alt class="h-auto rounded-circle" />
                              </div>
                            </div>
                            <div class="flex-grow-1">
                              <h6 class="mb-1">Congratulation Lettie 🎉</h6>
                              <p class="mb-0">Won the monthly best seller gold badge</p>
                              <small class="text-muted">1h ago</small>
                            </div>
                            <div class="flex-shrink-0 dropdown-notifications-actions">
                              <a href="javascript:void(0)" class="dropdown-notifications-read"
                                ><span class="badge badge-dot"></span
                              ></a>
                              <a href="javascript:void(0)" class="dropdown-notifications-archive"
                                ><span class="ti ti-x"></span
                              ></a>
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item list-group-item-action dropdown-notifications-item">
                          <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                              <div class="avatar">
                                <span class="avatar-initial rounded-circle bg-label-danger">CF</span>
                              </div>
                            </div>
                            <div class="flex-grow-1">
                              <h6 class="mb-1">Charles Franklin</h6>
                              <p class="mb-0">Accepted your connection</p>
                              <small class="text-muted">12hr ago</small>
                            </div>
                            <div class="flex-shrink-0 dropdown-notifications-actions">
                              <a href="javascript:void(0)" class="dropdown-notifications-read"
                                ><span class="badge badge-dot"></span
                              ></a>
                              <a href="javascript:void(0)" class="dropdown-notifications-archive"
                                ><span class="ti ti-x"></span
                              ></a>
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                          <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                              <div class="avatar">
                                <img src="./assets/img/avatars/2.png" alt class="h-auto rounded-circle" />
                              </div>
                            </div>
                            <div class="flex-grow-1">
                              <h6 class="mb-1">New Message ✉️</h6>
                              <p class="mb-0">You have new message from Natalie</p>
                              <small class="text-muted">1h ago</small>
                            </div>
                            <div class="flex-shrink-0 dropdown-notifications-actions">
                              <a href="javascript:void(0)" class="dropdown-notifications-read"
                                ><span class="badge badge-dot"></span
                              ></a>
                              <a href="javascript:void(0)" class="dropdown-notifications-archive"
                                ><span class="ti ti-x"></span
                              ></a>
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item list-group-item-action dropdown-notifications-item">
                          <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                              <div class="avatar">
                                <span class="avatar-initial rounded-circle bg-label-success"
                                  ><i class="ti ti-shopping-cart"></i
                                ></span>
                              </div>
                            </div>
                            <div class="flex-grow-1">
                              <h6 class="mb-1">Whoo! You have new order 🛒</h6>
                              <p class="mb-0">ACME Inc. made new order $1,154</p>
                              <small class="text-muted">1 day ago</small>
                            </div>
                            <div class="flex-shrink-0 dropdown-notifications-actions">
                              <a href="javascript:void(0)" class="dropdown-notifications-read"
                                ><span class="badge badge-dot"></span
                              ></a>
                              <a href="javascript:void(0)" class="dropdown-notifications-archive"
                                ><span class="ti ti-x"></span
                              ></a>
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                          <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                              <div class="avatar">
                                <img src="./assets/img/avatars/9.png" alt class="h-auto rounded-circle" />
                              </div>
                            </div>
                            <div class="flex-grow-1">
                              <h6 class="mb-1">Application has been approved 🚀</h6>
                              <p class="mb-0">Your ABC project application has been approved.</p>
                              <small class="text-muted">2 days ago</small>
                            </div>
                            <div class="flex-shrink-0 dropdown-notifications-actions">
                              <a href="javascript:void(0)" class="dropdown-notifications-read"
                                ><span class="badge badge-dot"></span
                              ></a>
                              <a href="javascript:void(0)" class="dropdown-notifications-archive"
                                ><span class="ti ti-x"></span
                              ></a>
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                          <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                              <div class="avatar">
                                <span class="avatar-initial rounded-circle bg-label-success"
                                  ><i class="ti ti-chart-pie"></i
                                ></span>
                              </div>
                            </div>
                            <div class="flex-grow-1">
                              <h6 class="mb-1">Monthly report is generated</h6>
                              <p class="mb-0">July monthly financial report is generated</p>
                              <small class="text-muted">3 days ago</small>
                            </div>
                            <div class="flex-shrink-0 dropdown-notifications-actions">
                              <a href="javascript:void(0)" class="dropdown-notifications-read"
                                ><span class="badge badge-dot"></span
                              ></a>
                              <a href="javascript:void(0)" class="dropdown-notifications-archive"
                                ><span class="ti ti-x"></span
                              ></a>
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                          <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                              <div class="avatar">
                                <img src="./assets/img/avatars/5.png" alt class="h-auto rounded-circle" />
                              </div>
                            </div>
                            <div class="flex-grow-1">
                              <h6 class="mb-1">Send connection request</h6>
                              <p class="mb-0">Peter sent you connection request</p>
                              <small class="text-muted">4 days ago</small>
                            </div>
                            <div class="flex-shrink-0 dropdown-notifications-actions">
                              <a href="javascript:void(0)" class="dropdown-notifications-read"
                                ><span class="badge badge-dot"></span
                              ></a>
                              <a href="javascript:void(0)" class="dropdown-notifications-archive"
                                ><span class="ti ti-x"></span
                              ></a>
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item list-group-item-action dropdown-notifications-item">
                          <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                              <div class="avatar">
                                <img src="./assets/img/avatars/6.png" alt class="h-auto rounded-circle" />
                              </div>
                            </div>
                            <div class="flex-grow-1">
                              <h6 class="mb-1">New message from Jane</h6>
                              <p class="mb-0">Your have new message from Jane</p>
                              <small class="text-muted">5 days ago</small>
                            </div>
                            <div class="flex-shrink-0 dropdown-notifications-actions">
                              <a href="javascript:void(0)" class="dropdown-notifications-read"
                                ><span class="badge badge-dot"></span
                              ></a>
                              <a href="javascript:void(0)" class="dropdown-notifications-archive"
                                ><span class="ti ti-x"></span
                              ></a>
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                          <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                              <div class="avatar">
                                <span class="avatar-initial rounded-circle bg-label-warning"
                                  ><i class="ti ti-alert-triangle"></i
                                ></span>
                              </div>
                            </div>
                            <div class="flex-grow-1">
                              <h6 class="mb-1">CPU is running high</h6>
                              <p class="mb-0">CPU Utilization Percent is currently at 88.63%,</p>
                              <small class="text-muted">5 days ago</small>
                            </div>
                            <div class="flex-shrink-0 dropdown-notifications-actions">
                              <a href="javascript:void(0)" class="dropdown-notifications-read"
                                ><span class="badge badge-dot"></span
                              ></a>
                              <a href="javascript:void(0)" class="dropdown-notifications-archive"
                                ><span class="ti ti-x"></span
                              ></a>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </li>
                    <li class="dropdown-menu-footer border-top">
                      <a
                        href="javascript:void(0);"
                        class="dropdown-item d-flex justify-content-center text-primary p-2 h-px-40 mb-1 align-items-center">
                        View all notifications
                      </a>
                    </li>
                  </ul>
                </li>
                <!--/ Notification -->

                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="./assets/img/avatars/1.png" alt class="h-auto rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="pages-account-settings-account">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img src="./assets/img/avatars/1.png" alt class="h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <span class="fw-medium d-block">John Doe</span>
                            <small class="text-muted">Admin</small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="pages-profile-user">
                        <i class="ti ti-user-check me-2 ti-sm"></i>
                        <span class="align-middle">My Profile</span>
                      </a>
                    </li>
                 
                    <li>
                      <a class="dropdown-item" href="Personal-tasks">
                        <i class="ti ti-settings me-2 ti-sm"></i>
                        <span class="align-middle" data-i18n="tasks">المهام الشخصية</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="Chat">
                        <i class="ti ti-settings me-2 ti-sm"></i>
                        <span class="align-middle"data-i18n="Chat">الدردشة</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="auth-login-cover" target="_blank">
                        <i class="ti ti-logout me-2 ti-sm"></i>
                        <span class="align-middle">Log Out</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>

            <!-- Search Small Screens -->
            <div class="navbar-search-wrapper search-input-wrapper container-xxl d-none">
              <input
                type="text"
                class="form-control search-input border-0"
                placeholder="Search..."
                aria-label="Search..." />
              <i class="ti ti-x ti-sm search-toggler cursor-pointer"></i>
            </div>
            
          </div>
        </nav>
        <!-- / Navbar -->
        <!-- Layout container -->
            <div class="layout-page">
             <!-- Content wrapper -->
               <div class="content-wrapper">
                  <!-- Menu -->
                    <aside id="layout-menu" class="layout-menu-horizontal menu-horizontal menu bg-menu-theme flex-grow-0">
                      <div class="container-xxl d-flex h-100">
                        <ul class="menu-inner">
                          <!-- Dashboards -->
                          <li class="menu-item">
                            <a href="/" class="menu-link ">
                              <i class="menu-icon tf-icons ti ti-smart-home"></i>
                              <div data-i18n="Dashboards">Dashboards</div>
                            </a>
                          
                          </li>

                          <!-- Apps -->
                          <li class="menu-item">
                            <a href="javascript:void(0)" class="menu-link menu-toggle">
                              <i class="menu-icon tf-icons ti ti-apps"></i>
                              <div data-i18n="Apps">الإدارة</div>
                            </a>

                            <ul class="menu-sub">
                              <li class="menu-item">
                                <a href="hardware" class="menu-link">
                                  <i class="menu-icon tf-icons ti ti-menu-2"></i>
                                  <div data-i18n="hardware"> المعدات</div>
                                </a>
                         
                              </li>
                              <li class="menu-item">
                                <a href="car" class="menu-link">
                                  <i class="menu-icon tf-icons ti ti-menu-2"></i>
                                  <div data-i18n="car"> الشاحنات</div>
                                </a>
                               
                              </li>
                              <li class="menu-item">
                                <a href="Programming-permissions" class="menu-link" target="_blank">
                                  <i class="menu-icon tf-icons ti ti-layout-distribute-vertical"></i>
                                  <div data-i18n="Programming-permissions">  برمجة الصلاحيات</div>
                                </a>
                              </li>
                              <li class="menu-item">
                                <a href="Causes-malfunctions" class="menu-link">
                                  <i class="menu-icon tf-icons ti ti-maximize"></i>
                                  <div data-i18n="Causes-malfunctions"> أسباب الأعطال</div>
                                </a>
                              </li>
                              <li class="menu-item">
                                <a href="Reasons-visiting" class="menu-link">
                                  <i class="menu-icon tf-icons ti ti-arrows-maximize"></i>
                                  <div data-i18n="Reasons-visiting">أسباب الزيارة </div>
                                </a>
                              </li>
                              <li class="menu-item">
                                <a href="employees" class="menu-link">
                                  <i class="menu-icon tf-icons ti ti-square"></i>
                                  <div data-i18n="employees">الموظفين </div>
                                </a>
                              </li>
                              <li class="menu-item">
                                <a href="Work-sites" class="menu-link">
                                  <i class="menu-icon tf-icons ti ti-square"></i>
                                  <div data-i18n="Work sites">مواقع العمل  </div>
                                </a>
                              </li>
                              <li class="menu-item">
                                <a href="GeneralSettings" class="menu-link">
                                  <i class="menu-icon tf-icons ti ti-arrows-maximize"></i>
                                  <div data-i18n="General Settings">الاعدادات العامة </div>
                                </a>
                              </li>
                                <li class="menu-item">
                                  <a href="Backup" class="menu-link">
                                    <i class="menu-icon tf-icons ti ti-arrows-maximize"></i>
                                    <div data-i18n="Backup">  نسخة احتياطي  </div>
                                  </a>
                                </li>
                            </ul>
                          </li>
                          <!--employees-->
                          <li class="menu-item">
                            <a class="menu-link menu-toggle" href="javascript:void(0)">
                              <i class="menu-icon tf-icons ti ti-users-group"></i>
                              <div data-i18n="employees">الموظفين</div>
                            </a>
                            <ul class="menu-sub">
                              <li class="menu-item">
                                <a href="Externalvisits" class="menu-link">
                                  <i class="menu-icon tf-icons ti ti-menu-2"></i>
                                  <div data-i18n="External visits">  الزيارات الخارجية</div>
                                </a>
                              </li>
                              <li class="menu-item">
                                <a href="Internal-visits" class="menu-link">
                                  <i class="menu-icon tf-icons ti ti-menu-2"></i>
                                  <div data-i18n="Internalvisits">  الزيارات الداخلية</div>
                                </a>
                              </li>
                              <li class="menu-item">
                                <a href="Chat" class="menu-link">
                                  <i class="menu-icon tf-icons ti ti-messages"></i>
                                  <div data-i18n="Chat">   الدردشة</div>
                                </a>
                              </li>
                              <li class="menu-item">
                                <a href="Personal-tasks" class="menu-link">
                                  <i class="menu-icon tf-icons ti ti-menu-2"></i>
                                  <div data-i18n="Personal tasks">   المهام الشخصية</div>
                                </a>
                              </li>
                              <li class="menu-item">
                                <a href="mission" class="menu-link">
                                  <i class="menu-icon tf-icons ti ti-menu-2"></i>
                                  <div data-i18n="mission">   المهام</div>
                                </a>
                              </li>
                             
                            </ul>
                          </li>
                          <!-- Maintenance -->
                            <!-- Maintenance -->
                    <li class="menu-item active">
                      <a href="javascript:void(0)" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons ti ti-settings"></i>
                        <div data-i18n="Maintenance">الصيانة </div>
                      </a>
                      <ul class="menu-sub">
                        <li class="menu-item">
                          <a href="Maintenance-request" class="menu-link">
                            <i class="menu-icon tf-icons ti ti-toggle-left"></i>
                            <div data-i18n="Maintenance-request">     طلب صيانة</div>
                          </a>
                          
                        </li>
                        <li class="menu-item">
                          <a href="javascript:void(0)" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons ti ti-settings"></i>
                            <div data-i18n="Forms-Maintenance"> نماذج الفحص </div>
                          </a>
                          <ul class="menu-sub">
                                    
                            <li class="menu-item ">
                              <a href="Examination-definitions" class="menu-link">
                                <div data-i18n="Examination-definitions"> تعريفات الفحص</div>
                              </a>
                              
                            </li>
                            <li class="menu-item">
                              <a href="Periodic-inspection" class="menu-link">
                                <div data-i18n="Periodic-inspection">    نموذج  الفحص الدورى</div>
                              </a>
                              
                            </li>
                           
                        </ul>
                        </li>
                        <li class="menu-item">
                          <a href="Add-Review-Maintenance" class="menu-link">
                            <i class="menu-icon tf-icons ti ti-settings"></i>
                            <div data-i18n="Maintenance-checklist">  قائمة-مراجعه الصيانة </div>
                          </a>
                        
                        </li>
                        <li class="menu-item">
                          <a href="Request-spare-part" class="menu-link">
                            <i class="menu-icon tf-icons ti ti-settings"></i>
                            <div data-i18n="Request-spare-part"> طلب قطعة غيار  </div>
                          </a>
                        </li>
                      
                        
                        <li class="menu-item active">
                          <a href="Directors-approval" class="menu-link">
                            <i class="menu-icon tf-icons ti ti-user-check"></i>
                            <div data-i18n="Director's-approval"> موافقة المدير </div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="Oil-change" class="menu-link">
                            <i class="menu-icon tf-icons ti ti-arrows-maximize"></i>
                            <div data-i18n="Oil change"> غيار الزيت</div>
                          </a>
                        </li>
                      </ul>
                    </li>

                          <!-- Reports -->
                          <li class="menu-item">
                            <a href="javascript:void(0)" class="menu-link menu-toggle">
                              <i class="menu-icon tf-icons ti ti-file-description"></i>
                              <div data-i18n="Reports">التقارير </div>
                            </a>
                            <ul class="menu-sub">
                              <li class="menu-item">
                                <a href="mission-Reports" target="_blank" class="menu-link">
                                  <i class="menu-icon tf-icons ti ti-lifebuoy"></i>
                                  <div data-i18n="mission"> المهام</div>
                                </a>
                              </li>
                              <li class="menu-item">
                                <a
                                  href="task-report"
                                  target="_blank"
                                  class="menu-link">
                                  <i class="menu-icon tf-icons ti ti-file-description"></i>
                                  <div data-i18n="Daily-task-report"> تقرير المهام اليومي</div>
                                </a>
                              </li>
                              <li class="menu-item">
                                <a
                                  href="Attendance-departure-report"
                                  target="_blank"
                                  class="menu-link">
                                  <i class="menu-icon tf-icons ti ti-file-description"></i>
                                  <div data-i18n="Attendance-departure-report"> تقرير الحضور والانصراف</div>
                                </a>
                              </li>
                              <li class="menu-item">
                                <a
                                  href="Repetitive-asks"
                                  target="_blank"
                                  class="menu-link">
                                  <i class="menu-icon tf-icons ti ti-file-description"></i>
                                  <div data-i18n="Repetitive-tasks">   المهام المتكررة</div>
                                </a>
                              </li>
                              <li class="menu-item">
                                <a
                                  href="Malfunctions-tasks"
                                  target="_blank"
                                  class="menu-link">
                                  <i class="menu-icon tf-icons ti ti-file-description"></i>
                                  <div data-i18n="Malfunctions-tasks">    تقرير الأعطال</div>
                                </a>
                              </li>
                            </ul>
                          </li>
                          <!-- Ratings-->
                        <li class="menu-item">
                          <a href="javascript:void(0)" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons ti ti-list-check"></i>
                            <div data-i18n="Ratings">التقييمات</div>
                          </a>
                          <ul class="menu-sub">
                            
                            <li class="menu-item">
                              <a href="javascript:void(0)" class="menu-link menu-toggle">
                                <i class="menu-icon tf-icons ti ti-help"></i>
                                <div data-i18n="Evaluations-questions">اسئلة التقييمات</div>
                              </a>
                              <ul class="menu-sub">
                                <li class="menu-item">
                                  <a href="question" class="menu-link">
                                    <div data-i18n="question"> سؤال </div>
                                  </a>
                                </li>
                                <li class="menu-item">
                                  <a href="Logo" class="menu-link">
                                    <div data-i18n="logo"> الشعار </div>
                                  </a>
                                </li>
                                <li class="menu-item">
                                  <a href="name-multiple-selection" class="menu-link">
                                    <div data-i18n="name-multiple-selection"> اسم لختيار المتعدد</div>
                                  </a>
                                </li>
                              </ul>
                              </li>
                            
                              <li class="menu-item ">
                                <a href="javascript:void(0)" class="menu-link menu-toggle">
                                  <i class="menu-icon tf-icons ti ti-list-check"></i>
                                  <div data-i18n="create-Evaluations">انشاء تقييم</div>
                                </a>
                                <ul  class="menu-sub">
                                  <li class="menu-item">
                                    <a href="create-Evaluations" class="menu-link">
                                      <div data-i18n="create-Evaluations"> اضافه تقييم</div>
                                    </a>
                                    </li>
                                    <li class="menu-item">
                                      <a href="all-Evaluations" class="menu-link">
                                        <div data-i18n="all-Evaluations">  كل التقييمات </div>
                                      </a>
                                      </li>
                                </ul>
                              </li>
                          </ul>
                        </li>

                        </ul>
                      </div>
                    </aside>
                  <!-- / Menu -->
                 <!-- Content -->
                <div class="container-xxl flex-grow-1 container-p-y">
                   <div class="card comonent-hader-top">
                      <div class="card-body py-2 px-md-4 px-2 card-widget-separator">
                     
                       <!---->
                       <div class="row mx-0 d-flex flex-wrap  justify-content-between  mb-3 align-items-center pt-4">
                        <div class="col col-md-8 col-12  mb-md-4 mb-2 ">
                          <strong class="py-md-3 px-md-3 text-title-hadeer text-tilte-b"><span class="text-muted fw-medium">  موافقة المدير</span>  </strong>


                        </div>
                        <div class="col text-end">
                          <a href="Directors-approval" class="btn btn-primary waves-effect waves-light btn-add"> مشاهدة الكل</a>
        
                        </div>
                      </div>
                       <!---->
                      </div>
                    
                   </div>
                   <div class="card comonent-hader-top p-md-5 p-2 mt-4">
                    <form class="row component-form align-items-center">
                      <div class="mb-3 col-md-5 col-xl-6 col-12 mb-0">
                        <label class="form-label" for="form-repeater-aco-e"> العميل<span class="start-form">*</span></label>
                        <div class="input-groupe">
                          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add-Client"data-dismiss="modal">
                            <i class="fa-solid fa-plus"></i>
                          </button>
                        <select id="form-repeater-aco-e" class="form-select select2">
                          <option value="all">اختر عميل</option>
                          <option value="Developer">Developer</option>
                          <option value="Tester">Tester</option>
                          <option value="Manager">Manager</option>
                        </select>
                        </div>
                      </div>
                      <div class="mb-3 col-md-5 col-xl-6 col-12 mb-0">
                        <label class="form-label" for="form-add-side"> الجهه<span class="start-form">*</span></label>
                        <div class="input-groupe">
                          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add-side"data-dismiss="modal">
                            <i class="fa-solid fa-plus"></i>
                          </button>
                        <select id="form-add-side" class="form-select select2">
                          <option value="all">اختر الجهة</option>
                          <option value="Developer">Developer</option>
                          <option value="Tester">Tester</option>
                          <option value="Manager">Manager</option>
                        </select>
                        </div>
                      </div>
                      <div class="mb-3 col-md-5 col-xl-6 col-12 mb-3">
                        <label class="form-label" for="form-repeater-1-1">   التاريخ<span class="start-form">*</span></label>
                        <input type="date" id="form-repeater-1-1" class="form-control" placeholder="  التاريخ" />
                      </div>
                     <div class="mb-3 col-md-5 col-xl-6 col-12 mb-3">
                      <label class="form-label" > الموافقة<span class="start-form">*</span></label>
                       <div class="d-flex">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                          <label class="form-check-label" for="flexRadioDefault1">
                            نعم
                          </label>
                        </div>
                        <div class="form-check mx-4">
                          <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                          <label class="form-check-label" for="flexRadioDefault2">
                            لا
                          </label>
                        </div>
                       </div>
                      
                     </div>
                     <div class="col-12 col-lg-8">
                      <button type="submit" class="btn btn-primary  waves-effect waves-light">حفظ</button>
                      <button type="reset" class="btn btn-outline-secondary waves-effect mx-md-2 mx-1">مسح المحتوى </button>
  
                     </div>
                    </form>
                   </div>
                </div>
              </div>

            </div>
          
            <!--/ Content -->
          
              <!-- Modal   اضافه العميل-->
                <div class="modal fade" id="add-Client" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel">   اضافة العميل </h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <form class="row component-form align-items-end mx-0">
  
                        <div class="col-12 col-lg-12  mb-3">
                          <label class="form-label" for="basic-name-hardware">   اسم العميل   (عربى)</label>
                          <input type="text" class="form-control" id="basic-name-hardware">
  
                        </div>
                        <div class="col-12 col-lg-12  mb-3">
                          <label class="form-label" for="basic-name-hardware-e">    اسم العميل  (انجيلزي)</label>
                          <input type="text" class="form-control" id="basic-name-hardware-e">
  
                        </div>
                        <div class="col-12 col-lg-8">
                          <button type="submit" class="btn btn-primary  waves-effect waves-light">حفظ</button>
                        </div>
                      </form>
                  </div>
                </div>
              </div> 
                </div>
                 <!-- Modal   اضافه الجهه-->
                 <div class="modal fade" id="add-side" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">   اضافة الجهه </h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <form class="row component-form align-items-end mx-0">
    
                          <div class="col-12 col-lg-12  mb-3">
                            <label class="form-label" for="basic-name-hardware">   اسم الجهه   (عربى)</label>
                            <input type="text" class="form-control" id="basic-name-hardware">
    
                          </div>
                          <div class="col-12 col-lg-12  mb-3">
                            <label class="form-label" for="basic-name-hardware-e">    اسم الجهه  (انجيلزي)</label>
                            <input type="text" class="form-control" id="basic-name-hardware-e">
    
                          </div>
                          <div class="col-12 col-lg-8">
                            <button type="submit" class="btn btn-primary  waves-effect waves-light">حفظ</button>
                          </div>
                        </form>
                    </div>
                  </div>
                </div> 
                  </div>
            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl">
                <div
                  class="footer-container d-flex align-items-center justify-content-center py-2 flex-md-row flex-column">
                  <div>
                    ©
                    <script>
                      document.write(new Date().getFullYear());
                    </script>
                    , made with ❤️ by Raito <a href="#" target="_blank" class="fw-medium">Raito</a>
                  </div>
            
                </div>
              </div>
            </footer>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!--/ Content wrapper -->
        </div>

        <!--/ Layout container -->
      </div>
    </div>
  <!--color-->
  
  <div class="compoent-color position-fixed">
    <div class="back">
         <div class="dropdown">

              <button class="btn  btn-btn d-flex mx-0 justify-content-between dropbtn" type="button" onclick="myFunction()" id="myDIV" >
                   
                   <span class="span-i">
                        <img src="./assets/img/icons/color-wheel.png" alt="platte">

                   </span>
              </button>
             
         </div>
         <div  id="myDropdown" class="dropdown-content dropdown-menu">
          <div class="d-flex align-items-center flex-wrap">

              <div id="theme-picker-section" class="example-section"@change="updateTheme">      
            
                <input type="radio" name="theme" value="blue" checked="true">
                <input type="radio" name="theme" value="grey">
                <input type="radio" name="theme" value="green">
                <input type="radio" name="theme" value="Brown">
                <input type="radio" name="theme" value="orange">
                <input type="radio" name="theme" value="red">
              
              </div>
          </div>
         </div>
    </div>
    
</div>
    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>

    <!-- Drag Target Area To SlideIn Menu On Small Screens -->
    <div class="drag-target"></div>

    <!--/ Layout wrapper -->
    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->

    <script src="./assets/vendor/libs/jquery/jquery.js"></script>
    <script src="./assets/vendor/libs/popper/popper.js"></script>
    <script src="./assets/vendor/js/bootstrap.js"></script>
    <script src="./assets/vendor/libs/node-waves/node-waves.js"></script>
    <script src="./assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="./assets/vendor/libs/hammer/hammer.js"></script>
    <script src="./assets/vendor/libs/i18n/i18n.js"></script>
    <script src="./assets/vendor/libs/typeahead-js/typeahead.js"></script>
    <script src="./assets/vendor/js/menu.js"></script>
   
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="./assets/vendor/js/dropdown-hover.js"></script>
    <script src="./assets/vendor/js/mega-dropdown.js"></script>
    <script src="./assets/vendor/libs/select2/select2.js"></script>
    <script src="./assets/vendor/libs/bootstrap-select/bootstrap-select.js"></script>
    <!-- Vendors JS -->
    <script src="./assets/vendor/libs/apex-charts/apexcharts.js"></script>
    <script src="./assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>


    
    <!-- Main JS -->
    <script src="./assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="./assets/js/forms-selects.js"></script>
    <script src="./assets/js/ui-navbar.js"></script>
     <!-- Page JS -->
     <script src="./assets/js/charts-apex.js"></script>
     <script src="./assets/js/cards-advance.js"></script>

     <script src="./assets/vendor/js/chart.js"></script>
     <script src="./assets/js/dashboards-crm.js"></script>
     <script src="./assets/js/tables-datatables-basic.js"></script>

  </body>
</html>
