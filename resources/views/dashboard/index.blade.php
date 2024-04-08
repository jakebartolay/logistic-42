@php
    $configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Home')

@section('content')

    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-navbar-full layout-horizontal layout-without-menu">
        <div class="layout-container">
            <!-- Layout container -->
            <div class="layout-page">
                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Menu -->
                    <aside id="layout-menu" class="layout-menu-horizontal menu-horizontal menu bg-menu-theme flex-grow-0">
                        <div class="container-xxl d-flex h-100">
                            <ul class="menu-inner py-1">
                                <!-- Page -->
                                <li class="menu-item active">
                                    <a href="index.html" class="menu-link">
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
                        <h4 class="py-3 mb-4">Order Overview</h4>

                        <div class="row">
                            <!-- Vehicles overview -->
                            <div class="col-xxl-6 mb-4 order-5 order-xxl-0">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-title mb-0">
                                            <h5 class="m-0">Vehicles overview</h5>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="d-none d-lg-flex vehicles-progress-labels mb-4">
                                            <div class="vehicles-progress-label on-the-way-text" style="width: 39.7%">
                                                On the way</div>
                                            <div class="vehicles-progress-label unloading-text" style="width: 28.3%">
                                                Unloading</div>
                                            <div class="vehicles-progress-label loading-text" style="width: 17.4%">
                                                Loading</div>
                                            <div class="vehicles-progress-label waiting-text text-nowrap"
                                                style="width: 14.6%">Waiting</div>
                                        </div>
                                        <div class="vehicles-overview-progress progress rounded-2 my-4"
                                            style="height: 46px">
                                            <div class="progress-bar fw-medium text-start bg-body text-dark px-3 rounded-0"
                                                role="progressbar" style="width: 39.7%" aria-valuenow="39.7"
                                                aria-valuemin="0" aria-valuemax="100">
                                                39.7%
                                            </div>
                                            <div class="progress-bar fw-medium text-start bg-primary px-3"
                                                role="progressbar" style="width: 28.3%" aria-valuenow="28.3"
                                                aria-valuemin="0" aria-valuemax="100">
                                                28.3%
                                            </div>
                                            <div class="progress-bar fw-medium text-start text-bg-info px-3"
                                                role="progressbar" style="width: 17.4%" aria-valuenow="17.4"
                                                aria-valuemin="0" aria-valuemax="100">
                                                17.4%
                                            </div>
                                            <div class="progress-bar fw-medium text-start bg-gray-900 px-2 rounded-0 px-lg-2 px-xxl-3"
                                                role="progressbar" style="width: 14.6%" aria-valuenow="14.6"
                                                aria-valuemin="0" aria-valuemax="100">
                                                14.6%
                                            </div>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table card-table">
                                                <tbody class="table-border-bottom-0">
                                                    <tr>
                                                        <td class="w-50 ps-0">
                                                            <div class="d-flex justify-content-start align-items-center">
                                                                <div class="me-2">
                                                                    <i class="ti ti-truck mt-n1"></i>
                                                                </div>
                                                                <h6 class="mb-0 fw-normal">On the way</h6>
                                                            </div>
                                                        </td>
                                                        <td class="text-end pe-0 text-nowrap">
                                                            <h6 class="mb-0">2hr 10min</h6>
                                                        </td>
                                                        <td class="text-end pe-0">
                                                            <span class="fw-medium">39.7%</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="w-50 ps-0">
                                                            <div class="d-flex justify-content-start align-items-center">
                                                                <div class="me-2">
                                                                    <i class="ti ti-circle-arrow-down mt-n1"></i>
                                                                </div>
                                                                <h6 class="mb-0 fw-normal">Unloading</h6>
                                                            </div>
                                                        </td>
                                                        <td class="text-end pe-0 text-nowrap">
                                                            <h6 class="mb-0">3hr 15min</h6>
                                                        </td>
                                                        <td class="text-end pe-0">
                                                            <span class="fw-medium">28.3%</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="w-50 ps-0">
                                                            <div class="d-flex justify-content-start align-items-center">
                                                                <div class="me-2">
                                                                    <i class="ti ti-circle-arrow-up mt-n1"></i>
                                                                </div>
                                                                <h6 class="mb-0 fw-normal">Loading</h6>
                                                            </div>
                                                        </td>
                                                        <td class="text-end pe-0 text-nowrap">
                                                            <h6 class="mb-0">1hr 24min</h6>
                                                        </td>
                                                        <td class="text-end pe-0">
                                                            <span class="fw-medium">21.4%</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="w-50 ps-0">
                                                            <div class="d-flex justify-content-start align-items-center">
                                                                <div class="me-2">
                                                                    <i class="ti ti-clock mt-n1"></i>
                                                                </div>
                                                                <h6 class="mb-0 fw-normal">Waiting</h6>
                                                            </div>
                                                        </td>
                                                        <td class="text-end pe-0 text-nowrap">
                                                            <h6 class="mb-0">5hr 19min</h6>
                                                        </td>
                                                        <td class="text-end pe-0">
                                                            <span class="fw-medium">10.6%</span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/ Vehicles overview -->
                            <!-- Footer -->
                            <footer class="content-footer footer bg-footer-theme">
                                <div class="container-xxl">
                                    <div
                                        class="footer-container d-flex align-items-center justify-content-between py-2 flex-md-row flex-column">
                                        <div>
                                            ©
                                            <script>
                                                document.write(new Date().getFullYear());
                                            </script>
                                            , made with ❤️ by
                                            <a href="https://pixinvent.com" target="_blank"
                                                class="footer-link text-primary fw-medium">Pixinvent</a>
                                        </div>
                                        <div class="d-none d-lg-inline-block">
                                            <a href="https://demos.pixinvent.com/vuexy-html-admin-template/documentation/"
                                                target="_blank" class="footer-link me-4">Documentation</a>
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
            <script src="/html-version/Bootstrap5/vuexy-bootstrap-html-admin-template/assets/vendor/libs/node-waves/node-waves.js">
            </script>
            <script
                src="/html-version/Bootstrap5/vuexy-bootstrap-html-admin-template/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js">
            </script>
            <script src="/html-version/Bootstrap5/vuexy-bootstrap-html-admin-template/assets/vendor/libs/hammer/hammer.js"></script>

            <script src="/html-version/Bootstrap5/vuexy-bootstrap-html-admin-template/assets/vendor/js/menu.js"></script>

            <!-- endbuild -->

            <!-- Vendors JS -->

            <!-- Main JS -->
            <script src="/html-version/Bootstrap5/vuexy-bootstrap-html-admin-template/assets/js/main.js"></script>

            <!-- Page JS -->

            <script>
                $(document).ready(function() {
                    $.ajax({
                        url: 'connection.php', // URL to your PHP file
                        type: 'GET',
                        success: function(response) {
                            console.log(response); // Log the response
                        },
                        error: function(xhr, status, error) {
                            console.error(status, error); // Log any errors
                        }
                    });
                });
            </script>


        @endsection
