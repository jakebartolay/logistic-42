<!doctype html>

<html
  lang="en"
  class="light-style layout-menu-fixed layout-compact"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="/html-version/Bootstrap5/vuexy-bootstrap-html-admin-template/assets/"
  data-template="horizontal-menu-template-starter">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Invoice</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="/html-version/Bootstrap5/vuexy-bootstrap-html-admin-template/assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&ampdisplay=swap"
      rel="stylesheet" />

    <!-- LARAVEL CSS -->
    <link href="/html-version/Bootstrap5/vuexy-bootstrap-html-admin-template/assets/vendor/fonts/tabler-icons.css" rel="stylesheet"/>
    <link href="/html-version/Bootstrap5/vuexy-bootstrap-html-admin-template/html-starter/horizontal-menu-template/style.css" rel="stylesheet">
    <link href="/html-version/Bootstrap5/vuexy-bootstrap-html-admin-template/assets/vendor/css/rtl/core.css" rel="stylesheet" class="template-customizer-core-css" rel="stylesheet"/>
    <link href="/html-version/Bootstrap5/vuexy-bootstrap-html-admin-template/assets/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" rel="stylesheet"/>
    <link href="/html-version/Bootstrap5/vuexy-bootstrap-html-admin-template/assets/css/demo.css" rel="stylesheet"/>
    <link href="/html-version/Bootstrap5/vuexy-bootstrap-html-admin-template/assets/vendor/libs/node-waves/node-waves.css" rel="stylesheet"/>
    <link href="/html-version/Bootstrap5/vuexy-bootstrap-html-admin-template/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet"/>
    <link rel="stylesheet" href="/html-version/Bootstrap5/vuexy-bootstrap-html-admin-template/assets/vendor/fonts/fontawesome.css" />
    
    <!-- Helpers -->
    <script src="/html-version/Bootstrap5/vuexy-bootstrap-html-admin-template/assets/vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="/html-version/Bootstrap5/vuexy-bootstrap-html-admin-template/assets/vendor/js/template-customizer.js"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="/html-version/Bootstrap5/vuexy-bootstrap-html-admin-template/assets/js/config.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-navbar-full layout-horizontal layout-without-menu">
      <div class="layout-container">
        <!-- Navbar -->

        <nav class="layout-navbar navbar navbar-expand-xl align-items-center bg-navbar-theme" id="layout-navbar">
          <div class="container-xxl">
            <div class="navbar-brand app-brand demo d-none d-xl-flex py-0 me-4">
              <a href="/" class="app-brand-link gap-2">
                <span class="app-brand-logo demo">
                  <svg width="32" height="22" viewBox="0 0 32 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M0.00172773 0V6.85398C0.00172773 6.85398 -0.133178 9.01207 1.98092 10.8388L13.6912 21.9964L19.7809 21.9181L18.8042 9.88248L16.4951 7.17289L9.23799 0H0.00172773Z"
                      fill="#7367F0" />
                    <path
                      opacity="0.06"
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M7.69824 16.4364L12.5199 3.23696L16.5541 7.25596L7.69824 16.4364Z"
                      fill="#161616" />
                    <path
                      opacity="0.06"
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M8.07751 15.9175L13.9419 4.63989L16.5849 7.28475L8.07751 15.9175Z"
                      fill="#161616" />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M7.77295 16.3566L23.6563 0H32V6.88383C32 6.88383 31.8262 9.17836 30.6591 10.4057L19.7824 22H13.6938L7.77295 16.3566Z"
                      fill="#7367F0" />
                  </svg>
                </span>
                <span class="app-brand-text demo menu-text fw-bold">Vuexy</span>
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

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <div class="navbar-nav align-items-center">
                <div class="nav-item dropdown-style-switcher dropdown me-2 me-xl-0">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <i class="ti ti-md"></i>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-start dropdown-styles">
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
                </div>
              </div>

              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- NOTIFICATIONS -->
                <li class="nav-item dropdown-notifications navbar-dropdown dropdown me-3 me-xl-1">
                  <a
                    class="nav-link dropdown-toggle hide-arrow"
                    href="javascript:void(0);"
                    data-bs-toggle="dropdown"
                    data-bs-auto-close="outside"
                    aria-expanded="false">
                    <i class="ti ti-bell ti-md"></i>
                    <span class="badge bg-danger rounded-pill badge-notifications">5</span>
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
                                <img src="/html-version/Bootstrap5/vuexy-bootstrap-html-admin-template/assets/img/avatars/1.png" alt class="h-auto rounded-circle" />
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
                                <img src="/html-version/Bootstrap5/vuexy-bootstrap-html-admin-template/assets/img/avatars/2.png" alt class="h-auto rounded-circle" />
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
                                <img src="/html-version/Bootstrap5/vuexy-bootstrap-html-admin-template/assets/img/avatars/9.png" alt class="h-auto rounded-circle" />
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
                                <img src="/html-version/Bootstrap5/vuexy-bootstrap-html-admin-template/assets/img/avatars/5.png" alt class="h-auto rounded-circle" />
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
                                <img src="/html-version/Bootstrap5/vuexy-bootstrap-html-admin-template/assets/img/avatars/6.png" alt class="h-auto rounded-circle" />
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
                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="/html-version/Bootstrap5/vuexy-bootstrap-html-admin-template/assets/img/avatars/1.png" alt class="h-auto rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="#">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img src="/html-version/Bootstrap5/vuexy-bootstrap-html-admin-template/assets/img/avatars/1.png" alt class="h-auto rounded-circle" />
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
                      <a class="dropdown-item" href="#">
                        <i class="ti ti-user-check me-2 ti-sm"></i>
                        <span class="align-middle">My Profile</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <i class="ti ti-settings me-2 ti-sm"></i>
                        <span class="align-middle">Settings</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="{{ url('invoice') }}">
                        <i class="ti ti-receipt me-2 ti-sm"></i>
                        <span class="align-middle">Invoice</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <span class="d-flex align-items-center align-middle">
                          <i class="flex-shrink-0 ti ti-credit-card me-2 ti-sm"></i>
                          <span class="flex-grow-1 align-middle">Billing</span>
                          <span class="flex-shrink-0 badge badge-center rounded-pill bg-label-danger w-px-20 h-px-20"
                            >2</span
                          >
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <i class="ti ti-logout me-2 ti-sm"></i>
                        <span class="align-middle">Log Out</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!--/ User -->
              </ul>
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
                <ul class="menu-inner py-1">
                  <!-- Page -->
                  <li class="menu-item">
                    <a href="{{ url('/') }}" class="menu-link">
                      <i class="menu-icon tf-icons ti ti-smart-home"></i>
                      <div data-i18n="HOME">HOME</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="{{ url('/page2') }}" class="menu-link">
                      <i class="ti ti-loader ti-spin"></i>
                      <div data-i18n="ORDERS">ORDERS</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="{{ url('/page3') }}" class="menu-link">
                      <i class="ti ti-arrow-big-right ti-fade-right"></i>
                      <div data-i18n="INBOUND">INBOUND</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="{{ url('/page4') }}" class="menu-link">
                      <i class="ti ti-arrow-big-left ti-fade-left"></i>
                      <div data-i18n="OUTBOUND">OUTBOUND</div>
                    </a>
                  </li>
                </ul>
              </div>
            </aside>
              <!-- / Menu -->






             <!-- Content -->

             <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row invoice-add">
                <!-- Invoice Add-->
                <div class="col-lg-9 col-12 mb-lg-0 mb-4">
                  <div class="card invoice-preview-card">
                    <div class="card-body">
                      <div class="row m-sm-4 m-0">
                        <div class="col-md-7 mb-md-0 mb-4 ps-0">
                          <div class="d-flex svg-illustration mb-4 gap-2 align-items-center">
                            <div class="app-brand-logo demo">
                              <svg
                                width="32"
                                height="22"
                                viewBox="0 0 32 22"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                  fill-rule="evenodd"
                                  clip-rule="evenodd"
                                  d="M0.00172773 0V6.85398C0.00172773 6.85398 -0.133178 9.01207 1.98092 10.8388L13.6912 21.9964L19.7809 21.9181L18.8042 9.88248L16.4951 7.17289L9.23799 0H0.00172773Z"
                                  fill="#7367F0" />
                                <path
                                  opacity="0.06"
                                  fill-rule="evenodd"
                                  clip-rule="evenodd"
                                  d="M7.69824 16.4364L12.5199 3.23696L16.5541 7.25596L7.69824 16.4364Z"
                                  fill="#161616" />
                                <path
                                  opacity="0.06"
                                  fill-rule="evenodd"
                                  clip-rule="evenodd"
                                  d="M8.07751 15.9175L13.9419 4.63989L16.5849 7.28475L8.07751 15.9175Z"
                                  fill="#161616" />
                                <path
                                  fill-rule="evenodd"
                                  clip-rule="evenodd"
                                  d="M7.77295 16.3566L23.6563 0H32V6.88383C32 6.88383 31.8262 9.17836 30.6591 10.4057L19.7824 22H13.6938L7.77295 16.3566Z"
                                  fill="#7367F0" />
                              </svg>
                            </div>
 <span class="app-brand-text fw-bold fs-4"> OWMS </span>
                          </div>
                          <p class="mb-2">Office 149, 450 South Brand Brooklyn</p>
                          <p class="mb-2">San Diego County, CA 91905, USA</p>
                          <p class="mb-3">+1 (123) 456 7891, +44 (876) 543 2198</p>
                        </div>
                        <div class="col-md-5">
                          <dl class="row mb-2">
                            <dt class="col-sm-6 mb-2 mb-sm-0 text-md-end ps-0">
                              <span class="h4 text-capitalize mb-0 text-nowrap">Invoice</span>
                            </dt>

                            <dd class="col-sm-6 d-flex justify-content-md-end pe-0 ps-0 ps-sm-2">
                              
                              <div class="input-group input-group-merge disabled w-px-150">
                              
                                <span class="input-group-text">#</span>
                                
                                <input
                                  type="text"
                                  class="form-control"
                                  disabled
                                  placeholder=""
                                  value=""
                                  id="invoiceId" />
                                  
                              </div>
                              
                            </dd>
                            











                            <dt class="col-sm-6 mb-2 mb-sm-0 text-md-end ps-0">
                              <span class="fw-normal">Date:</span>
                            </dt>
                            <dd class="col-sm-6 d-flex justify-content-md-end pe-0 ps-0 ps-sm-2">
                              <input type="text" class="form-control w-px-150 invoice-date" id="receivedDate" placeholder="" />
                            </dd>
                            <dt class="col-sm-6 mb-2 mb-sm-0 text-md-end ps-0">
                              <span class="fw-normal">Due Date:</span>
                            </dt>
                            <dd class="col-sm-6 d-flex justify-content-md-end pe-0 ps-0 ps-sm-2">
                              <input type="text" class="form-control w-px-150 due-date" id="dueDate" placeholder="5 DAYS" />
                            </dd>
                          </dl>
                        </div>
                      </div>

                      <hr class="my-3 mx-n4" />
                      <div class="row p-sm-4 p-0">
                        <div class="col-md-6 col-sm-5 col-12 mb-sm-0 mb-4">
                          <h6 class="mb-4">Invoice To:</h6>
                          <p class="mb-1" id="customerName"></p>
                          <p class="mb-1" id="shippingAddress"></p>
                          <p class="mb-1"id = "contact">718-986-6062</p>
                          <p class="mb-1"></p>
                          <p class="mb-0"></p>
                        </div>
                        <div class="col-md-6 col-sm-7">
                          <h6 class="mb-4">Bill To:</h6>
                          <table >
                            <tbody>
                              <tr>
                                <td class="pe-4">Total Due:</td>
                                <td><span class="fw-medium" id = "amount">$12,110.55</span></td>
                              </tr>
                              <tr>
                                <td class="pe-4">Bank name:</td>
                                <td>American Bank</td>
                              </tr>
                              <tr>
                                <td class="pe-4">Country:</td>
                                <td>United States</td>
                              </tr>
                              <tr>
                                <td class="pe-4">IBAN:</td>
                                <td>ETD95476213874685</td>
                              </tr>
                              <tr>
                                <td class="pe-4">SWIFT code:</td>
                                <td>BR91905</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>

                      <hr class="my-3 mx-n4" />

                      <form class="source-item pt-4 px-0 px-sm-4">
                        <div class="mb-3" data-repeater-list="group-a">
                          <div class="repeater-wrapper pt-0 pt-md-4" data-repeater-item>
                            <div class="d-flex border rounded position-relative pe-0">
                              <div class="row w-100 p-3">
                                <div class="col-md-6 col-12 mb-md-0 mb-3">
                                  <p class="mb-2 repeater-title">Item</p>
                                  <select class="form-select item-details mb-3">
                                    <option id ="productName">App Design</option>
                                  </select>
                                  <textarea class="form-control" rows="2">
The most developer friendly & highly customizable HTML5 Admin</textarea
                                  >
                                </div>
                                <div class="col-md-3 col-12 mb-md-0 mb-3">
                                  <p class="mb-2 repeater-title">Cost</p>
                                  <input
                                    type="text"
                                    class="form-control invoice-item-price mb-3"
                                    id = "amount2"
                                    value=""
                                    placeholder=""
                                    min="12" />
                                  <div>
                                    <span>Discount:</span>
                                    <span class="discount me-2">0%</span>
                                    <span
                                      class="tax-1 me-2"
                                      data-bs-toggle="tooltip"
                                      data-bs-placement="top"
                                      title="Tax 1"
                                      >0%</span
                                    >
                                    <span class="tax-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Tax 2"
                                      >0%</span
                                    >
                                  </div>
                                </div>
                                <div class="col-md-2 col-12 mb-md-0 mb-3">
                                  <p class="mb-2 repeater-title">Qty</p>
                                  <input
                                    type="text"
                                    class="form-control invoice-item-qty"
                                    value="1"
                                    placeholder="1"
                                    min="1"
                                    max="50" />
                                </div>
                                <div class="col-md-1 col-12 pe-0">
                                  <p class="mb-2 repeater-title">Price</p>
                                  <p class="mb-0" id="amount"></p>
                                </div>
                              </div>
                              <div
                                class="d-flex flex-column align-items-center justify-content-between border-start p-2">
                                <i class="ti ti-x cursor-pointer" data-repeater-delete></i>
                                <div class="dropdown">
                                  <i
                                    class="ti ti-settings ti-xs cursor-pointer more-options-dropdown"
                                    role="button"
                                    id="dropdownMenuButton"
                                    data-bs-toggle="dropdown"
                                    data-bs-auto-close="outside"
                                    aria-expanded="false">
                                  </i>
                                  <div
                                    class="dropdown-menu dropdown-menu-end w-px-300 p-3"
                                    aria-labelledby="dropdownMenuButton">
                                    <div class="row g-3">
                                      <div class="col-12">
                                        <label for="discountInput" class="form-label">Discount(%)</label>
                                        <input
                                          type="number"
                                          class="form-control"
                                          id="discountInput"
                                          min="0"
                                          max="100" />
                                      </div>
                                      <div class="col-md-6">
                                        <label for="taxInput1" class="form-label">Tax 1</label>
                                        <select name="tax-1-input" id="taxInput1" class="form-select tax-select">
                                          <option value="0%" selected>0%</option>
                                          <option value="1%">1%</option>
                                          <option value="10%">10%</option>
                                          <option value="18%">18%</option>
                                          <option value="40%">40%</option>
                                        </select>
                                      </div>
                                      <div class="col-md-6">
                                        <label for="taxInput2" class="form-label">Tax 2</label>
                                        <select name="tax-2-input" id="taxInput2" class="form-select tax-select">
                                          <option value="0%" selected>0%</option>
                                          <option value="1%">1%</option>
                                          <option value="10%">10%</option>
                                          <option value="18%">18%</option>
                                          <option value="40%">40%</option>
                                        </select>
                                      </div>
                                    </div>
                                    <div class="dropdown-divider my-3"></div>
                                    <button type="button" class="btn btn-label-primary btn-apply-changes">Apply</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row pb-4">
                          <div class="col-12">
                            <button type="button" class="btn btn-primary" data-repeater-create>Add Item</button>
                          </div>
                        </div>
                      </form>

                      <hr class="my-3 mx-n4" />

                      <div class="row p-0 p-sm-4">
                        <div class="col-md-6 mb-md-0 mb-3">
                          <div class="d-flex align-items-center mb-3">
                            <label for="salesperson" class="form-label me-4 fw-medium">Salesperson:</label>
                            <input
                              type="text"
                              class="form-control ms-3"
                              id="salesperson"
                              placeholder="Edward Crowley"
                              value="Edward Crowley" />
                          </div>
                          <input
                            type="text"
                            class="form-control"
                            id="invoiceMsg"
                            placeholder="Thanks for your business"
                            value="Thanks for your business" />
                        </div>
                        <div class="col-md-6 d-flex justify-content-end">
                          <div class="invoice-calculations">
                            <div class="d-flex justify-content-between mb-2">
                              <span class="w-px-100">Subtotal:</span>
                              <span class="fw-medium">{{ $outboundData->product_amount_outbound }}</span>
                            </div>
                            <div class="d-flex justify-content-between mb-2">
                              <span class="w-px-100">Discount:</span>
                              <span class="fw-medium">00.00</span>
                            </div>
                            <div class="d-flex justify-content-between mb-2">
                              <span class="w-px-100">Tax:</span>
                              <span class="fw-medium">00.00</span>
                            </div>
                            <hr />
                            <div class="d-flex justify-content-between">
                              <span class="w-px-100">Total:</span>
                              <span class="fw-medium" id="amount">{{ $outboundData->product_amount_outbound }}</span>
                        </div>
                      </div>
</div>
                      <hr class="my-3 mx-n4" />

                      <div class="row px-0 px-sm-4">
                        <div class="col-12">
                          <div class="mb-3">
                            <label for="note" class="form-label fw-medium">Note:</label>
                            <textarea class="form-control" rows="2" id="note">
It was a pleasure working with you and your team. We hope you will keep us in mind for future freelance projects. Thank You!</textarea
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /Invoice Edit-->

                <!-- Invoice Actions -->
                <div class="col-lg-3 col-12 invoice-actions">
                  <div class="card mb-4">
                    <div class="card-body">
                      <button
                        class="btn btn-primary d-grid w-100"
                        data-bs-toggle="offcanvas"
                        data-bs-target="#sendInvoiceOffcanvas">
                        <span class="d-flex align-items-center justify-content-center text-nowrap"
                          ><i class="ti ti-send ti-xs me-2"></i>Send Invoice</span
                        >
                      </button>
                      <div class="d-flex my-2">
                        <a href="./page-3.html" class="btn btn-label-secondary w-100 me-2">Preview</a>
                        <button type="button" class="btn btn-label-secondary w-100">Save</button>
                      </div>
                      <button class="btn btn-label-secondary d-grid w-100 mb-2">Download</button>








                      <button
                        class="btn btn-label-secondary d-grid w-100 mb-2"
                        target="_blank"
                      
                        id="printButton"
                        >
                        Print
                      </button>









                      <button
                        class="btn btn-primary d-grid w-100"
                        data-bs-toggle="offcanvas"
                        data-bs-target="#addPaymentOffcanvas">
                        <span class="d-flex align-items-center justify-content-center text-nowrap"
                          ><i class="ti ti-currency-dollar ti-xs me-2"></i>Add Payment</span>
                      </button>
                    </div>
                  </div>
                  <div>
                    <p class="mb-2">Accept payments via</p>
                    <select class="form-select mb-4">
                      <option value="Bank Account">Bank Account</option>
                      <option value="Paypal">Paypal</option>
                      <option value="Card">Credit/Debit Card</option>
                      <option value="UPI Transfer">UPI Transfer</option>
                    </select>
                    <div class="d-flex justify-content-between mb-2">
                      <label for="payment-terms" class="mb-0">Payment Terms</label>
                      <label class="switch switch-primary me-0">
                        <input type="checkbox" class="switch-input" id="payment-terms" checked />
                        <span class="switch-toggle-slider">
                          <span class="switch-on"></span>
                          <span class="switch-off"></span>
                        </span>
                        <span class="switch-label"></span>
                      </label>
                    </div>
                    <div class="d-flex justify-content-between mb-2">
                      <label for="client-notes" class="mb-0">Client Notes</label>
                      <label class="switch switch-primary me-0">
                        <input type="checkbox" class="switch-input" id="client-notes" />
                        <span class="switch-toggle-slider">
                          <span class="switch-on"></span>
                          <span class="switch-off"></span>
                        </span>
                        <span class="switch-label"></span>
                      </label>
                    </div>
                    <div class="d-flex justify-content-between">
                      <label for="payment-stub" class="mb-0">Payment Stub</label>
                      <label class="switch switch-primary me-0">
                        <input type="checkbox" class="switch-input" id="payment-stub" />
                        <span class="switch-toggle-slider">
                          <span class="switch-on"></span>
                          <span class="switch-off"></span>
                        </span>
                        <span class="switch-label"></span>
                      </label>
                    </div>
                  </div>
                </div>
                <!-- /Invoice Actions -->
              </div>

              <!-- Offcanvas -->
              <!-- Send Invoice Sidebar -->
              <div class="offcanvas offcanvas-end" id="sendInvoiceOffcanvas" aria-hidden="true">
                <div class="offcanvas-header my-1">
                  <h5 class="offcanvas-title">Send Invoice</h5>
                  <button
                    type="button"
                    class="btn-close text-reset"
                    data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
                </div>
                <div class="offcanvas-body pt-0 flex-grow-1">
                  <form>
                    <div class="mb-3">
                      <label for="invoice-from" class="form-label">From</label>
                      <input
                        type="text"
                        class="form-control"
                        id="invoice-from"
                        value="shelbyComapny@email.com"
                        placeholder="company@email.com" />
                    </div>
                    <div class="mb-3">
                      <label for="invoice-to" class="form-label">To</label>
                      <input
                        type="text"
                        class="form-control"
                        id="customerName"
                        value="qConsolidated@email.com"
                        placeholder="company@email.com" />
                    </div>
                    <div class="mb-3">
                      <label for="invoice-subject" class="form-label">Subject</label>
                      <input
                        type="text"
                        class="form-control"
                        id="productName"
                        value="Invoice of purchased Admin Templates"
                        placeholder="Invoice regarding goods" />
                    </div>
                    <div class="mb-3">
                      <label for="invoice-message" class="form-label">Message</label>
                      <textarea class="form-control" name="invoice-message" id="invoice-message" cols="3" rows="8">
Dear Queen Consolidated,
          Thank you for your business, always a pleasure to work with you!
          We have generated a new invoice in the amount of AMOUNT
          We would appreciate payment of this invoice by 05/11/2021</textarea
                      >
                    </div>
                    <div class="mb-4">
                      <span class="badge bg-label-primary">
                        <i class="ti ti-link ti-xs"></i>
                        <span class="align-middle">Invoice Attached</span>
                      </span>
                    </div>
                    <div class="mb-3 d-flex flex-wrap">
                      <button type="button" class="btn btn-primary me-3" data-bs-dismiss="offcanvas">Send</button>
                      <button type="button" class="btn btn-label-secondary" data-bs-dismiss="offcanvas">Cancel</button>
                    </div>
                  </form>
                </div>
              </div>
              <!-- /Send Invoice Sidebar -->

              <!-- Add Payment Sidebar -->
              <div class="offcanvas offcanvas-end" id="addPaymentOffcanvas" aria-hidden="true">
                <div class="offcanvas-header mb-3">
                  <h5 class="offcanvas-title">Add Payment</h5>
                  <button
                    type="button"
                    class="btn-close text-reset"
                    data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
                </div>
                <div class="offcanvas-body flex-grow-1">
                  <div class="d-flex justify-content-between bg-lighter p-2 mb-3">
                    <p class="mb-0">Invoice Balance:</p>
                    <p class="fw-medium mb-0" id="amount">{{ $outboundData->product_amount_outbound }}</p>
                  </div>
                  <form>
                    <div class="mb-3">
                      <label class="form-label" for="invoiceAmount">Payment Amount</label>
                      <div class="input-group">
                        <span class="input-group-text"></span>
                        <input
                          type="text"
                          id="invoiceAmount"
                          name="invoiceAmount"
                          class="form-control invoice-amount"
                          placeholder="100" />
                      </div>
                    </div>
                    <div class="mb-3">
                      <label class="form-label" for="payment-date">Payment Date</label>
                      <input id="payment-date" class="form-control invoice-date" type="text" />
                    </div>
                    <div class="mb-3">
                      <label class="form-label" for="payment-method">Payment Method</label>
                      <select class="form-select" id="payment-method" placeholder="{{ $outboundData->payment_method_outbound }}">
                        <option value="" selected disabled>Select payment method</option>
                        <option value="Cash"><p id="paymentMethod">Cash</p></option>
                      </select>
                    </div>
                    <div class="mb-4">
                      <label class="form-label" for="payment-note">Internal Payment Note</label>
                      <textarea class="form-control" id="payment-note" rows="2"></textarea>
                    </div>
                    <div class="mb-3 d-flex flex-wrap">
                      <button type="button" class="btn btn-primary me-3" data-bs-dismiss="offcanvas">Send</button>
                      <button type="button" class="btn btn-label-secondary" data-bs-dismiss="offcanvas">Cancel</button>
                    </div>
                  </form>
                </div>
              </div>
              <!-- /Add Payment Sidebar -->

              <!-- /Offcanvas -->
            </div>
            <!-- / Content -->
            
            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl">
                <div
                  class="footer-container d-flex align-items-center justify-content-between py-2 flex-md-row flex-column">
                  
                </div>
              </div>
            </footer>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- / Content wrapper -->
        </div>
      </div>
    </div>
  </div>
</div>
        <!--/ Layout container -->
      </div>
    </div>

    <script src="/html-version/Bootstrap5/vuexy-bootstrap-html-admin-template/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="/html-version/Bootstrap5/vuexy-bootstrap-html-admin-template/assets/vendor/libs/popper/popper.js"></script>
    <script src="/html-version/Bootstrap5/vuexy-bootstrap-html-admin-template/assets/vendor/js/bootstrap.js"></script>
    <script src="/html-version/Bootstrap5/vuexy-bootstrap-html-admin-template/assets/vendor/libs/node-waves/node-waves.js"></script>
    <script src="/html-version/Bootstrap5/vuexy-bootstrap-html-admin-template/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="/html-version/Bootstrap5/vuexy-bootstrap-html-admin-template/assets/vendor/libs/hammer/hammer.js"></script>



<script>
    // Retrieve the outbound data from the query parameters
    const outboundData = {!! json_encode($outboundData) !!};
    console.log(outboundData); // Log the retrieved outbound data

    printButton.addEventListener('click', function() {
    // Retrieve the outbound data from the query parameters
    const outboundData = {!! json_encode($outboundData) !!};

    // Encode the outbound data as a JSON string
    const jsonData = encodeURIComponent(JSON.stringify(outboundData));

    // Construct the URL for the print page with the JSON data as a query parameter
    const printPageUrl = '{{ route("invoicePrint") }}?data=' + jsonData;

    // Redirect the user to the print page
    window.location.href = printPageUrl;
});

    // Display the order ID on the page
    const invoiceId = document.getElementById('invoiceId');
    invoiceId.value = outboundData.order_id_outbound;

    const receivedDate = document.getElementById('receivedDate');
    receivedDate.placeholder = outboundData.shipping_date;

    const customerName = document.getElementById('customerName');
    customerName.textContent = outboundData.client_name_outbound;

    const shippingAddress = document.getElementById('shippingAddress');
    shippingAddress.textContent = outboundData.shipping_address_outbound;

    const contact = document.getElementById('contact');
    contact.textContent = outboundData.contact_number_outbound;

    const amount = document.getElementById('amount');
    amount.textContent = outboundData.product_amount_outbound;

    const amount2 = document.getElementById('amount2');
    amount2.value = outboundData.product_amount_outbound;

    const productName = document.getElementById('productName');
    productName.textContent = outboundData.product_name_outbound;

    const paymentMethod = document.getElementById('paymentMethod');
    paymentMethod.textContent = outboundData.paymentMethod_outbound;
</script>