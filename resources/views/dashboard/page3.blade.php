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

    <title>Inbound</title>

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

  <style>
    /* Original CSS for action_button */
    .action_button {
      width: 140px;
        background-color: #9a60cc;
        
        font-family: Tahoma;
        padding: 0.5em;
        font-size: 0.9em;
        color: white;
        border: none;
        border-radius: 0.5em;
        cursor: pointer; /* Add cursor pointer for hover effect */
        transition: background-color 0.1s, color 0.2s;
    }

    /* New CSS for grayed-out button */
    .action_button.disabled {
        color:black;
        background-color: #ccc; /* Gray background color */
        opacity: 0.6;
        cursor: default;
    }

    /* Hover effect for enabled buttons */
    .action_button:not(.disabled):hover {
        background-color: #3d02f0; /* Change color on hover for enabled buttons */

    }
</style>




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
                  <li class="menu-item active">
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
              <h4 class="py-3 mb-2"><span class="text-muted fw-light">LOGISTICS /</span> Order Details</h4>

              <!-- Order List Widget -->

              <div class="card mb-4">
                <div class="card-widget-separator-wrapper">
                  <div class="card-body card-widget-separator">
                    <div class="row gy-4 gy-sm-1">
                      <div class="col-sm-6 col-lg-3">
                        <div
                          class="d-flex justify-content-between align-items-start card-widget-1 border-end pb-3 pb-sm-0">
                          <div>
                            <h4 class="mb-2" id="pending-count">{{ $preparingCountInbound }}</h4>
                            <p class="mb-0 fw-medium">Preparing</p>
                          </div>
                          <span class="avatar me-sm-4">
                            <span class="avatar-initial bg-label-secondary rounded">
                              <i class="ti-md ti ti-calendar-stats text-body"></i>
                            </span>
                          </span>
                        </div>
                        <hr class="d-none d-sm-block d-lg-none me-4" />
                      </div>
                      <div class="col-sm-6 col-lg-3">
                        <div
                          class="d-flex justify-content-between align-items-start card-widget-2 border-end pb-3 pb-sm-0">
                          <div>
                            <h4 class="mb-2" id="completed-count">{{ $inTransitCountInbound }}</h4>
                            <p class="mb-0 fw-medium">In Transit</p>
                          </div>
                          <span class="avatar p-2 me-lg-4">
                            <span class="avatar-initial bg-label-secondary rounded"
                              ><i class="ti-md ti ti-checks text-body"></i
                            ></span>
                          </span>
                        </div>
                        <hr class="d-none d-sm-block d-lg-none" />
                      </div>
                      <div class="col-sm-6 col-lg-3">
                        <div
                          class="d-flex justify-content-between align-items-start border-end pb-3 pb-sm-0 card-widget-3">
                          <div>
                            <h4 class="mb-2" id="refunded-count">{{ $refundedCountInbound }}</h4>
                            <p class="mb-0 fw-medium">Return Products / Refunded</p>
                          </div>
                          <span class="avatar p-2 me-sm-4">
                            <span class="avatar-initial bg-label-secondary rounded"
                              ><i class="ti-md ti ti-wallet text-body"></i
                            ></span>
                          </span>
                        </div>
                      </div>
                      <div class="col-sm-6 col-lg-3">
                        <div class="d-flex justify-content-between align-items-start">
                          <div>
                            <h4 class="mb-2" id="failed-count">{{ $failedCountInbound }}</h4>
                            <p class="mb-0 fw-medium">Failed</p>
                          </div>
                          <span class="avatar p-2">
                            <span class="avatar-initial bg-label-secondary rounded"
                              ><i class="ti-md ti ti-alert-octagon text-body"></i
                            ></span>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
  


          <!-- Order List Table -->
          <div class="card">
              <div class="card-datatable table-responsive">
              <table class="datatables-order table border-top">
    <thead>
        <tr>
            <th><strong>ORDER ID</strong></th>
            <th><strong>CLIENT</strong></th>
            <th><strong>CONTACT NUMBER</strong></th>
            <th><strong>SHIPPING ADDRESS</strong></th>
            <th><strong>PAYMENT METHOD</strong></th>
            <th><strong>STATUS</strong></th>
            <th><strong>ACTIONS</strong></th>
        </tr>
    </thead>
    <tbody>
        @foreach($inboundOrders as $order)
        <tr>
            <td>{{ $order->order_id_inbound }}</td>
            <td>{{ $order->client_name_inbound }}</td>
            <td>{{ $order->contact_number_inbound }}</td>
            <td>{{ $order->shipping_address_inbound }}</td>
            <td>{{ $order->payment_method_inbound }}</td>
            <td>{{ $order->status_inbound }}</td>
            <td>
            <button class="action_button{{ ($order->status_inbound === 'Preparing' || $order->status_inbound === 'Product Received' || $order->status_inbound === 'Failed') ? ' disabled' : '' }}" 
        {{ ($order->status_inbound === 'Preparing' || $order->status_inbound === 'Product Received' || $order->status_inbound === 'Failed') ? 'disabled' : "onclick=markProductReceived('$order->order_id_inbound')" }}>
    <strong>{{ $order->status_inbound === 'Preparing' ? 'Preparing' : ($order->status_inbound === 'Failed' ? 'Failed' : 'Product Received') }}</strong>
</button>


            </td>
        </tr>
        @endforeach
    </tbody>
</table>

              </div>
                <br><br><center><div id="pagination">
                    <!-- Previous button -->
                    @if ($inboundOrders->previousPageUrl())
                        <a href="{{ $inboundOrders->previousPageUrl() }}" id="prev-page">&lt; &nbsp;&nbsp;</a>
                    @endif
                    
                    <!-- Current page number -->
                    <span id="current-page">{{ $inboundOrders->currentPage() }}</span>
                    
                    <!-- Next button -->
                    @if ($inboundOrders->nextPageUrl())
                        <a href="{{ $inboundOrders->nextPageUrl() }}" id="next-page">&nbsp;&nbsp; &gt;</a>
                    @endif
                </div></center>




              <!--/ Content -->
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
<!--/ Content wrapper -->
</div>
<!--/ Layout container -->
</div>
</div>  
      
<!-- Overlay -->
<div class="layout-overlay layout-menu-toggle"></div>

    <!-- Drag Target Area To SlideIn Menu On Small Screens -->
    <div class="drag-target"></div>

    <!--/ Layout wrapper -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->

    <script src="/html-version/Bootstrap5/vuexy-bootstrap-html-admin-template/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="/html-version/Bootstrap5/vuexy-bootstrap-html-admin-template/assets/vendor/libs/popper/popper.js"></script>
    <script src="/html-version/Bootstrap5/vuexy-bootstrap-html-admin-template/assets/vendor/js/bootstrap.js"></script>
    <script src="/html-version/Bootstrap5/vuexy-bootstrap-html-admin-template/assets/vendor/libs/node-waves/node-waves.js"></script>
    <script src="/html-version/Bootstrap5/vuexy-bootstrap-html-admin-template/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="/html-version/Bootstrap5/vuexy-bootstrap-html-admin-template/assets/vendor/libs/hammer/hammer.js"></script>
    <script src="/html-version/Bootstrap5/vuexy-bootstrap-html-admin-template/assets/vendor/js/menu.js"></script>
    <script src="/html-version/Bootstrap5/vuexy-bootstrap-html-admin-template/assets/js/main.js"></script>

<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
    // JavaScript function to mark the order as received
    function markProductReceived(orderId) {
        // Display a confirmation dialog
        if (confirm('Are you sure you want to mark this order as received?')) {
            // If the user confirms, send an AJAX request to the markProductReceived endpoint
            axios.post('{{ route("markProductReceived") }}', {
                orderId: orderId,
                _token: '{{ csrf_token() }}' // Include CSRF token for Laravel protection
            })
            .then(function(response) {
                // Handle success response
                console.log(response.data.message);
                // Optionally, update the UI to reflect the change in status
            })
            .catch(function(error) {
                // Handle error response
                console.error(error);
            });
        }
    }
</script>











  </body>
</html>