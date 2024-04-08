<!doctype html>

<html
  lang="en"
  class="light-style layout-wide"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="/html-version/Bootstrap5/vuexy-bootstrap-html-admin-template/assets/"
  data-template="horizontal-menu-template">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Invoice (Print version) - Pages | Vuexy - Bootstrap Admin Template</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="/html-version/Bootstrap5/vuexy-bootstrap-html-admin-template/assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&ampdisplay=swap"
      rel="stylesheet" />

    <!-- Icons -->
    <link rel="stylesheet" href="/html-version/Bootstrap5/vuexy-bootstrap-html-admin-template/assets/vendor/fonts/fontawesome.css" />
    <link rel="stylesheet" href="/html-version/Bootstrap5/vuexy-bootstrap-html-admin-template/assets/vendor/fonts/tabler-icons.css" />
    <link rel="stylesheet" href="/html-version/Bootstrap5/vuexy-bootstrap-html-admin-template/assets/vendor/fonts/flag-icons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="/html-version/Bootstrap5/vuexy-bootstrap-html-admin-template/assets/vendor/css/rtl/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="/html-version/Bootstrap5/vuexy-bootstrap-html-admin-template/assets/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="/html-version/Bootstrap5/vuexy-bootstrap-html-admin-template/assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="/html-version/Bootstrap5/vuexy-bootstrap-html-admin-template/assets/vendor/libs/node-waves/node-waves.css" />
    <link rel="stylesheet" href="/html-version/Bootstrap5/vuexy-bootstrap-html-admin-template/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="/html-version/Bootstrap5/vuexy-bootstrap-html-admin-template/assets/vendor/libs/typeahead-js/typeahead.css" />

    <!-- Page CSS -->

    <link rel="stylesheet" href="/html-version/Bootstrap5/vuexy-bootstrap-html-admin-template/assets/vendor/css/pages/app-invoice-print.css" />

    <!-- Helpers -->
    <script src="/html-version/Bootstrap5/vuexy-bootstrap-html-admin-template/assets/vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="/html-version/Bootstrap5/vuexy-bootstrap-html-admin-template/assets/vendor/js/template-customizer.js"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="/html-version/Bootstrap5/vuexy-bootstrap-html-admin-template/assets/js/config.js"></script>
  </head>

  <body>
    <!-- Content -->

    <div class="invoice-print p-5">
      <div class="d-flex justify-content-between flex-row">
        <div class="mb-4">
          <div class="d-flex svg-illustration mb-3 gap-2">
            <div class="app-brand-logo demo">
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
            </div>
            <span class="app-brand-text fw-bold"> Vuexy </span>
          </div>
          <p class="mb-1">Office 149, 450 South Brand Brooklyn</p>
          <p class="mb-1">San Diego County, CA 91905, USA</p>
          <p class="mb-0">+1 (123) 456 7891, +44 (876) 543 2198</p>
        </div>
        <div>
          <h4 class="fw-medium" >INVOICE #{{ $outboundData->order_id_outbound }}</h4>
          <div class="mb-2">
            <span class="text-muted">Date Issues:</span>
            <span class="fw-medium">{{ $outboundData->shipping_date }}</span>
          </div>
          <div>
            <span class="text-muted">Date Due:</span>
            <span class="fw-medium">5</span>
          </div>
        </div>
      </div>

      <hr />

      <div class="row d-flex justify-content-between mb-4">
        <div class="col-sm-6 w-50">
          <h6>Invoice To:</h6>
          
          <p class="mb-1">{{ $outboundData->client_name_outbound }}</p>
          <p class="mb-1">{{ $outboundData->shipping_address_outbound }}</p>
          
          <p class="mb-1">{{ $outboundData->contact_number_outbound }}</p>

        </div>
        <div class="col-sm-6 w-50">
          <h6>Bill To:</h6>
          <table>
            <tbody>
              <tr>
                <td class="pe-3">Total Due:</td>
                <td class="fw-medium" id="amount">{{ $outboundData->product_amount_outbound }}</td>
              </tr>
              <tr>
                <td class="pe-3">Bank name:</td>
                <td>American Bank</td>
              </tr>
              <tr>
                <td class="pe-3">Country:</td>
                <td>United States</td>
              </tr>
              <tr>
                <td class="pe-3">IBAN:</td>
                <td>ETD95476213874685</td>
              </tr>
              <tr>
                <td class="pe-3">SWIFT code:</td>
                <td>BR91905</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <div class="table-responsive">
        <table class="table m-0">
          <thead class="table-light">
            <tr>
              <th>Product ID</th>
              <th>Item Name</th>
              <th>Qty</th>
              <th>Price</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>{{ $outboundData->order_id_outbound }}</td>
              <td>{{ $outboundData->product_name_outbound }}</td>
              <td>1</td>
              <td>{{ $outboundData->product_amount_outbound }}</td>
            </tr>

            <tr>
              <td colspan="3" class="align-top px-4 py-3">
                <p class="mb-2">
                  <span class="me-1 fw-medium">Salesperson:</span>
                  <span>Alfie Solomons</span>
                </p>
                <span>Thanks for your business</span>
              </td>
              <td class="text-end px-4 py-3">
                <p class="mb-2">Subtotal:</p>
                <p class="mb-2">Discount:</p>
                <p class="mb-2">Tax:</p>
                <p class="mb-0">Total:</p>
              </td>
              <td class="px-4 py-3">
                <p class="fw-medium mb-2">{{ $outboundData->product_amount_outbound }}</p>
                <p class="fw-medium mb-2">$0.00</p>
                <p class="fw-medium mb-2">$0.00</p>
                <p class="fw-medium mb-0">{{ $outboundData->product_amount_outbound }}</p>
              </td>
            </tr>
          </tbody>
        </table>
      </div>

      <div class="row">
        <div class="col-12">
          <span class="fw-medium">Note:</span>
          <span
            >It was a pleasure working with you and your team. We hope you will keep us in mind for future freelance
            projects. Thank You!</span
          >
        </div>
      </div>
    </div>

    <!-- / Content -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->

    <script src="/html-version/Bootstrap5/vuexy-bootstrap-html-admin-template/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="/html-version/Bootstrap5/vuexy-bootstrap-html-admin-template/assets/vendor/libs/popper/popper.js"></script>
    <script src="/html-version/Bootstrap5/vuexy-bootstrap-html-admin-template/assets/vendor/js/bootstrap.js"></script>
    <script src="/html-version/Bootstrap5/vuexy-bootstrap-html-admin-template/assets/vendor/libs/node-waves/node-waves.js"></script>
    <script src="/html-version/Bootstrap5/vuexy-bootstrap-html-admin-template/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="/html-version/Bootstrap5/vuexy-bootstrap-html-admin-template/assets/vendor/libs/hammer/hammer.js"></script>
    <script src="/html-version/Bootstrap5/vuexy-bootstrap-html-admin-template/assets/vendor/libs/i18n/i18n.js"></script>
    <script src="/html-version/Bootstrap5/vuexy-bootstrap-html-admin-template/assets/vendor/libs/typeahead-js/typeahead.js"></script>
    <script src="/html-version/Bootstrap5/vuexy-bootstrap-html-admin-template/assets/vendor/js/menu.js"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="/html-version/Bootstrap5/vuexy-bootstrap-html-admin-template/assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="/html-version/Bootstrap5/vuexy-bootstrap-html-admin-template/assets/js/app-invoice-print.js"></script>

    <script>
    // Retrieve the outbound data from the query parameters
    const outboundData = {!! json_encode($outboundData) !!};
    console.log(outboundData); // Log the retrieved outbound data

    const invoiceId = document.getElementById('invoiceId');
    invoiceId.textContent = outboundData.order_id_outbound;

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












  </body>














</html>
