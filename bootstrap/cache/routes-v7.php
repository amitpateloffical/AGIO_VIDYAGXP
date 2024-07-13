<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/_debugbar/open' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.openhandler',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_debugbar/assets/stylesheets' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.assets.css',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_debugbar/assets/javascript' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.assets.js',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/activate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'activate',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/activate_system_submit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'activate_system_submit',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sanctum/csrf-cookie' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YnvFUEbiigBgNzFF',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/health-check' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.healthCheck',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/execute-solution' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.executeSolution',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/update-config' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.updateConfig',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.login',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.login.post',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.logout',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/password/reset' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.password.reset',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.password.',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/password/code-verify' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.password.code.verify',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/password/verify-code' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.password.verify.code',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.dashboard',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.profile',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.profile.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.password',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.password.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/banned' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.banned',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/request-report' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.request.report',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/report-store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.request.report.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/staff' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.staff.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/roles' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.roles.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/roles/add' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.roles.add',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/category' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.product.category.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/category/import' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.product.category.import',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/brand' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.product.brand.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/brand/import' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.product.brand.import',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/unit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.product.unit.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/unit/import' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.product.unit.import',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/product/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.product.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/product/alert' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.product.alert',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/product/pdf' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.product.pdf',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/product/csv' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.product.csv',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/product/import' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.product.import',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/warehouse/all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.warehouse.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/warehouse/import' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.warehouse.import',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/purchase/all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.purchase.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/purchase/pdf' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.purchase.pdf',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/purchase/csv' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.purchase.csv',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/purchase/add-new' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.purchase.new',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/purchase/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.purchase.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/purchase/product-search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.purchase.product.search',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/purchase/invoice-check' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.purchase.invoice.check',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/purchase-return/all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.purchase.return.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/purchase-return/pdf' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.purchase.return.pdf',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/purchase-return/csv' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.purchase.return.csv',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/purchase-return/search-product' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.purchase.return.search.product',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/purchase-return/check-invoice' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.purchase.return.check.invoice',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/sale/all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.sale.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/sale/pdf' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.sale.pdf',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/sale/csv' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.sale.csv',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/sale/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.sale.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/sale/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.sale.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/sale/search-product' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.sale.search.product',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/sale/search-customer' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.sale.search.customer',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/sale/last-invoice' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.sale.last.invoice',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/sale-return/all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.sale.return.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/sale-return/pdf' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.sale.return.pdf',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/sale-return/csv' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.sale.return.csv',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/sale-return/search-product' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.sale.return.search.product',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/sale-return/search-customer' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.sale.return.search.customer',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/adjustment/all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.adjustment.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/adjustment/pdf' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.adjustment.pdf',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/adjustment/csv' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.adjustment.csv',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/adjustment/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.adjustment.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/adjustment/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.adjustment.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/adjustment/search-product' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.adjustment.search.product',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/supplier/all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.supplier.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/supplier/pdf' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.supplier.pdf',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/supplier/csv' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.supplier.csv',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/supplier/import' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.supplier.import',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/customer/all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.customer.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/customer/pdf' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.customer.pdf',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/customer/csv' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.customer.csv',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/customer/import' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.customer.import',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/customer/send-notification' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.customer.notification.all',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.customer.notification.all.send',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/transfer/all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.transfer.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/transfer/pdf' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.transfer.pdf',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/transfer/csv' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.transfer.csv',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/transfer/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.transfer.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/transfer/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.transfer.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/transfer/search-product' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.transfer.search.product',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/expense-type' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.expense.type.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/expense-type/import' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.expense.type.import',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/expense/pdf' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.expense.pdf',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/expense/csv' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.expense.csv',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/general-setting' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/setting/system-configuration' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.system.configuration',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/setting/system-configuration/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.system.configuration.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/setting/logo-icon' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.logo.icon',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.logo.icon.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/reports/payment/supplier' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.report.payment.supplier',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/reports/payment/supplier/pdf' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.report.payment.supplier.pdf',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/reports/payment/supplier/csv' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.report.payment.supplier.csv',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/reports/payment/customer' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.report.payment.customer',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/reports/payment/customer/pdf' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.report.payment.customer.pdf',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/reports/payment/customer/csv' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.report.payment.customer.csv',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/reports/stock/index' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.report.stock.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/reports/stock/pdf' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.report.stock.pdf',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/reports/stock/csv' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.report.stock.csv',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/all-products' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.product.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/reports/data-entry/product' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.report.data.entry.product',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/reports/data-entry/customer' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.report.data.entry.customer',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/reports/data-entry/supplier' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.report.data.entry.supplier',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/reports/data-entry/purchase' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.report.data.entry.purchase',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/reports/data-entry/purchase-return' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.report.data.entry.purchase.return',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/reports/data-entry/sale' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.report.data.entry.sale',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/reports/data-entry/sale-return' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.report.data.entry.sale.return',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/reports/data-entry/adjustment' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.report.data.entry.adjustment',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/reports/data-entry/transfer' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.report.data.entry.transfer',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/reports/data-entry/expense' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.report.data.entry.expense',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/reports/data-entry/supplier-payment' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.report.data.entry.supplier.payment',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/reports/data-entry/customer-payment' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.report.data.entry.customer.payment',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/notification/global' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.notification.global',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/notification/global/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.notification.global.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/notification/templates' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.notification.templates',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/notification/email/setting' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.notification.email',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.notification.email.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/notification/email/test' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.notification.email.test',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/notification/sms/setting' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.notification.sms',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.notification.sms.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/notification/sms/test' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.notification.sms.test',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/system/info' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.system.info',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/system/server-info' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.system.server.info',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/system/optimize' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.system.optimize',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/system/optimize-clear' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.system.optimize.clear',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/system/system-update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.system.update',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/system/update-upload' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.system.update.upload',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/test' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ExPrNwid6a3wtfxU',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/clear' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Tn5rS7anLHVcqKcB',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'home',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/_debugbar/c(?|lockwork/([^/]++)(*:39)|ache/([^/]++)(?:/([^/]++))?(*:73))|/admin/(?|p(?|assword/reset/(?|([^/]++)(*:120)|change(*:134))|roduct/(?|all(?:/([^/]++))?(*:170)|edit/([^/]++)(*:191)|store(?:/([^/]++))?(*:218))|urchase(?|/(?|edit/([^/]++)(*:254)|pdf/([^/]++)(*:274)|update/([^/]++)(*:297))|\\-return/(?|new/([^/]++)(*:330)|store/([^/]++)(*:352)|edit/([^/]++)(*:373)|update/([^/]++)(*:396)|pdf/([^/]++)(*:416))))|download\\-attachments/([^/]++)(*:457)|s(?|taff/s(?|ave(?:/([^/]++))?(*:495)|witch\\-status/([^/]++)(*:525))|ale(?|/(?|edit/([^/]++)(*:557)|update/([^/]++)(*:580)|pdf/([^/]++)(*:600))|\\-return/(?|new/([^/]++)(*:633)|store/([^/]++)(*:655)|edit/([^/]++)(*:676)|update/([^/]++)(*:699)|pdf/([^/]++)(*:719)))|upplier/(?|store(?:/([^/]++))?(*:759)|payment/(?|index/([^/]++)(*:792)|all\\-payment/([^/]++)(*:821)|store(?:/([^/]++))?(*:848)|receive\\-payment/([^/]++)(*:881)|pdf/([^/]++)(*:901))))|roles/(?|edit/([^/]++)(*:934)|save(?:/([^/]++))?(*:960))|c(?|ategory/(?|delete/([^/]++)(*:999)|store(?:/([^/]++))?(*:1026))|ustomer/(?|s(?|tore(?:/([^/]++))?(*:1069)|end\\-notification/([^/]++)(?|(*:1107)))|notification\\-log/([^/]++)(*:1144)|email/detail/([^/]++)(*:1174)|payment/(?|all\\-payment/([^/]++)(*:1215)|index/([^/]++)(*:1238)|store(?:/([^/]++))?(*:1266)|p(?|ayable/([^/]++)(*:1294)|df/([^/]++)(*:1314)))))|brand/(?|delete/([^/]++)(*:1351)|store(?:/([^/]++))?(*:1379))|unit/(?|delete/([^/]++)(*:1412)|store(?:/([^/]++))?(*:1440))|warehouse/store(?:/([^/]++))?(*:1479)|adjustment/(?|details/([^/]++)(*:1518)|edit/([^/]++)(*:1540)|update/([^/]++)(*:1564))|transfer/(?|edit/([^/]++)(*:1599)|pdf/([^/]++)(*:1620)|update/([^/]++)(*:1644))|expense(?|\\-type/(?|delete/([^/]++)(*:1689)|store(?:/([^/]++))?(*:1717))|(?:/([^/]++))?(*:1741)|/(?|store(?:/([^/]++))?(*:1773)|import(*:1788)))|notification/template/(?|edit/([^/]++)(*:1837)|update/([^/]++)(*:1861)))|/placeholder\\-image/([^/]++)(*:1900))/?$}sDu',
    ),
    3 => 
    array (
      39 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.clockwork',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      73 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.cache.delete',
            'tags' => NULL,
          ),
          1 => 
          array (
            0 => 'key',
            1 => 'tags',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      120 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.password.reset.form',
          ),
          1 => 
          array (
            0 => 'token',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      134 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.password.change',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      170 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.product.index',
            'scope' => NULL,
          ),
          1 => 
          array (
            0 => 'scope',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      191 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.product.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      218 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.product.store',
            'id' => NULL,
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      254 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.purchase.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      274 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.purchase.invoice.pdf',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      297 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.purchase.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      330 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.purchase.return.items',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      352 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.purchase.return.store',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      373 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.purchase.return.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      396 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.purchase.return.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      416 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.purchase.return.invoice.pdf',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      457 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.download.attachment',
          ),
          1 => 
          array (
            0 => 'file_hash',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      495 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.staff.save',
            'id' => NULL,
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      525 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.staff.status',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      557 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.sale.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      580 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.sale.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      600 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.sale.invoice.pdf',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      633 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.sale.return.items',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      655 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.sale.return.store',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      676 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.sale.return.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      699 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.sale.return.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      719 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.sale.return.invoice.pdf',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      759 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.supplier.store',
            'id' => NULL,
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      792 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.supplier.payment.index',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      821 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.supplier.payment.clear',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      848 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.supplier.payment.store',
            'id' => NULL,
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      881 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.supplier.payment.receive.store',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      901 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.supplier.payment.pdf',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      934 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.roles.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      960 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.roles.save',
            'id' => NULL,
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      999 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.product.category.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1026 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.product.category.store',
            'id' => NULL,
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1069 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.customer.store',
            'id' => NULL,
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1107 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.customer.notification.single',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.customer.',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1144 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.customer.notification.log',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1174 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.customer.email.details',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1215 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.customer.payment.clear',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1238 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.customer.payment.index',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1266 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.customer.payment.store',
            'id' => NULL,
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1294 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.customer.payment.payable.store',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1314 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.customer.payment.pdf',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1351 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.product.brand.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1379 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.product.brand.store',
            'id' => NULL,
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1412 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.product.unit.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1440 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.product.unit.store',
            'id' => NULL,
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1479 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.warehouse.store',
            'id' => NULL,
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1518 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.adjustment.details.pdf',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1540 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.adjustment.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1564 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.adjustment.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1599 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.transfer.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1620 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.transfer.details.pdf',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1644 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.transfer.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1689 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.expense.type.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1717 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.expense.type.store',
            'id' => NULL,
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1741 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.expense.index',
            'id' => NULL,
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1773 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.expense.store',
            'id' => NULL,
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1788 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.expense.import',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1837 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.notification.template.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1861 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.notification.template.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1900 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'placeholder.image',
          ),
          1 => 
          array (
            0 => 'size',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'debugbar.openhandler' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/open',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@handle',
        'as' => 'debugbar.openhandler',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@handle',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.clockwork' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/clockwork/{id}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@clockwork',
        'as' => 'debugbar.clockwork',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@clockwork',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.assets.css' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/assets/stylesheets',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@css',
        'as' => 'debugbar.assets.css',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@css',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.assets.js' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/assets/javascript',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@js',
        'as' => 'debugbar.assets.js',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@js',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.cache.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => '_debugbar/cache/{key}/{tags?}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\CacheController@delete',
        'as' => 'debugbar.cache.delete',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\CacheController@delete',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'activate' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'activate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'tbgbpber',
        ),
        'uses' => 'Laramin\\Utility\\Controller\\UtilityController@laraminStart',
        'controller' => 'Laramin\\Utility\\Controller\\UtilityController@laraminStart',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'activate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'activate_system_submit' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'activate_system_submit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'tbgbpber',
        ),
        'uses' => 'Laramin\\Utility\\Controller\\UtilityController@laraminSubmit',
        'controller' => 'Laramin\\Utility\\Controller\\UtilityController@laraminSubmit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'activate_system_submit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YnvFUEbiigBgNzFF' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sanctum/csrf-cookie',
      'action' => 
      array (
        'uses' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'controller' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'namespace' => NULL,
        'prefix' => 'sanctum',
        'where' => 
        array (
        ),
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'generated::YnvFUEbiigBgNzFF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.healthCheck' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_ignition/health-check',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController',
        'as' => 'ignition.healthCheck',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.executeSolution' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/execute-solution',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController',
        'as' => 'ignition.executeSolution',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.updateConfig' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/update-config',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController',
        'as' => 'ignition.updateConfig',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Auth\\LoginController@showLoginForm',
        'controller' => 'App\\Http\\Controllers\\Admin\\Auth\\LoginController@showLoginForm',
        'as' => 'admin.login',
        'namespace' => 'App\\Http\\Controllers\\Admin\\Auth',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.login.post' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Auth\\LoginController@login',
        'controller' => 'App\\Http\\Controllers\\Admin\\Auth\\LoginController@login',
        'as' => 'admin.login.post',
        'namespace' => 'App\\Http\\Controllers\\Admin\\Auth',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.logout' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Auth\\LoginController@logout',
        'controller' => 'App\\Http\\Controllers\\Admin\\Auth\\LoginController@logout',
        'as' => 'admin.logout',
        'namespace' => 'App\\Http\\Controllers\\Admin\\Auth',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.password.reset' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/password/reset',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Auth\\ForgotPasswordController@showLinkRequestForm',
        'controller' => 'App\\Http\\Controllers\\Admin\\Auth\\ForgotPasswordController@showLinkRequestForm',
        'as' => 'admin.password.reset',
        'namespace' => 'App\\Http\\Controllers\\Admin\\Auth',
        'prefix' => 'admin/password',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.password.' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/password/reset',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Auth\\ForgotPasswordController@sendResetCodeEmail',
        'controller' => 'App\\Http\\Controllers\\Admin\\Auth\\ForgotPasswordController@sendResetCodeEmail',
        'as' => 'admin.password.',
        'namespace' => 'App\\Http\\Controllers\\Admin\\Auth',
        'prefix' => 'admin/password',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.password.code.verify' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/password/code-verify',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Auth\\ForgotPasswordController@codeVerify',
        'controller' => 'App\\Http\\Controllers\\Admin\\Auth\\ForgotPasswordController@codeVerify',
        'as' => 'admin.password.code.verify',
        'namespace' => 'App\\Http\\Controllers\\Admin\\Auth',
        'prefix' => 'admin/password',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.password.verify.code' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/password/verify-code',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Auth\\ForgotPasswordController@verifyCode',
        'controller' => 'App\\Http\\Controllers\\Admin\\Auth\\ForgotPasswordController@verifyCode',
        'as' => 'admin.password.verify.code',
        'namespace' => 'App\\Http\\Controllers\\Admin\\Auth',
        'prefix' => 'admin/password',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.password.reset.form' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/password/reset/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Auth\\ResetPasswordController@showResetForm',
        'controller' => 'App\\Http\\Controllers\\Admin\\Auth\\ResetPasswordController@showResetForm',
        'as' => 'admin.password.reset.form',
        'namespace' => 'App\\Http\\Controllers\\Admin\\Auth',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.password.change' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/password/reset/change',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Auth\\ResetPasswordController@reset',
        'controller' => 'App\\Http\\Controllers\\Admin\\Auth\\ResetPasswordController@reset',
        'as' => 'admin.password.change',
        'namespace' => 'App\\Http\\Controllers\\Admin\\Auth',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.dashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminController@dashboard',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminController@dashboard',
        'as' => 'admin.dashboard',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.profile' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminController@profile',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminController@profile',
        'as' => 'admin.profile',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.profile.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminController@profileUpdate',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminController@profileUpdate',
        'as' => 'admin.profile.update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.password' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminController@password',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminController@password',
        'as' => 'admin.password',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.password.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminController@passwordUpdate',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminController@passwordUpdate',
        'as' => 'admin.password.update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.banned' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/banned',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminController@banned',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminController@banned',
        'as' => 'admin.banned',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.request.report' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/request-report',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminController@requestReport',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminController@requestReport',
        'as' => 'admin.request.report',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.request.report.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/report-store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminController@reportSubmit',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminController@reportSubmit',
        'as' => 'admin.request.report.store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.download.attachment' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/download-attachments/{file_hash}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminController@downloadAttachment',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminController@downloadAttachment',
        'as' => 'admin.download.attachment',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.staff.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/staff',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\StaffController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\StaffController@index',
        'as' => 'admin.staff.index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/staff',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.staff.save' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/staff/save/{id?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\StaffController@save',
        'controller' => 'App\\Http\\Controllers\\Admin\\StaffController@save',
        'as' => 'admin.staff.save',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/staff',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.staff.status' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/staff/switch-status/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\StaffController@status',
        'controller' => 'App\\Http\\Controllers\\Admin\\StaffController@status',
        'as' => 'admin.staff.status',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/staff',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.roles.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/roles',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\RolesController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\RolesController@index',
        'as' => 'admin.roles.index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/roles',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.roles.add' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/roles/add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\RolesController@add',
        'controller' => 'App\\Http\\Controllers\\Admin\\RolesController@add',
        'as' => 'admin.roles.add',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/roles',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.roles.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/roles/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\RolesController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\RolesController@edit',
        'as' => 'admin.roles.edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/roles',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.roles.save' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/roles/save/{id?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\RolesController@save',
        'controller' => 'App\\Http\\Controllers\\Admin\\RolesController@save',
        'as' => 'admin.roles.save',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/roles',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.product.category.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryController@index',
        'as' => 'admin.product.category.index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/category',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.product.category.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/category/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryController@remove',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryController@remove',
        'as' => 'admin.product.category.delete',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/category',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.product.category.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/category/store/{id?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryController@store',
        'as' => 'admin.product.category.store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/category',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.product.category.import' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/category/import',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryController@import',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryController@import',
        'as' => 'admin.product.category.import',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/category',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.product.brand.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/brand',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BrandController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\BrandController@index',
        'as' => 'admin.product.brand.index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/brand',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.product.brand.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/brand/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BrandController@remove',
        'controller' => 'App\\Http\\Controllers\\Admin\\BrandController@remove',
        'as' => 'admin.product.brand.delete',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/brand',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.product.brand.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/brand/store/{id?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BrandController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\BrandController@store',
        'as' => 'admin.product.brand.store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/brand',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.product.brand.import' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/brand/import',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BrandController@import',
        'controller' => 'App\\Http\\Controllers\\Admin\\BrandController@import',
        'as' => 'admin.product.brand.import',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/brand',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.product.unit.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/unit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UnitController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\UnitController@index',
        'as' => 'admin.product.unit.index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/unit',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.product.unit.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/unit/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UnitController@remove',
        'controller' => 'App\\Http\\Controllers\\Admin\\UnitController@remove',
        'as' => 'admin.product.unit.delete',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/unit',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.product.unit.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/unit/store/{id?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UnitController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\UnitController@store',
        'as' => 'admin.product.unit.store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/unit',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.product.unit.import' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/unit/import',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UnitController@import',
        'controller' => 'App\\Http\\Controllers\\Admin\\UnitController@import',
        'as' => 'admin.product.unit.import',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/unit',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.product.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/product/all/{scope?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ProductController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\ProductController@index',
        'as' => 'admin.product.index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/product',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.product.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/product/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ProductController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\ProductController@create',
        'as' => 'admin.product.create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/product',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.product.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/product/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ProductController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\ProductController@edit',
        'as' => 'admin.product.edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/product',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.product.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/product/store/{id?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ProductController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\ProductController@store',
        'as' => 'admin.product.store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/product',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.product.alert' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/product/alert',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ProductController@alert',
        'controller' => 'App\\Http\\Controllers\\Admin\\ProductController@alert',
        'as' => 'admin.product.alert',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/product',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.product.pdf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/product/pdf',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ProductController@productPDF',
        'controller' => 'App\\Http\\Controllers\\Admin\\ProductController@productPDF',
        'as' => 'admin.product.pdf',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/product',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.product.csv' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/product/csv',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ProductController@productCSV',
        'controller' => 'App\\Http\\Controllers\\Admin\\ProductController@productCSV',
        'as' => 'admin.product.csv',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/product',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.product.import' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/product/import',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ProductController@import',
        'controller' => 'App\\Http\\Controllers\\Admin\\ProductController@import',
        'as' => 'admin.product.import',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/product',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.warehouse.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/warehouse/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\WarehouseController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\WarehouseController@index',
        'as' => 'admin.warehouse.index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/warehouse',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.warehouse.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/warehouse/store/{id?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\WarehouseController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\WarehouseController@store',
        'as' => 'admin.warehouse.store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/warehouse',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.warehouse.import' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/warehouse/import',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\WarehouseController@import',
        'controller' => 'App\\Http\\Controllers\\Admin\\WarehouseController@import',
        'as' => 'admin.warehouse.import',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/warehouse',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.purchase.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/purchase/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PurchaseController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\PurchaseController@index',
        'as' => 'admin.purchase.index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/purchase',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.purchase.pdf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/purchase/pdf',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PurchaseController@purchasePDF',
        'controller' => 'App\\Http\\Controllers\\Admin\\PurchaseController@purchasePDF',
        'as' => 'admin.purchase.pdf',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/purchase',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.purchase.csv' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/purchase/csv',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PurchaseController@purchaseCSV',
        'controller' => 'App\\Http\\Controllers\\Admin\\PurchaseController@purchaseCSV',
        'as' => 'admin.purchase.csv',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/purchase',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.purchase.new' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/purchase/add-new',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PurchaseController@addNew',
        'controller' => 'App\\Http\\Controllers\\Admin\\PurchaseController@addNew',
        'as' => 'admin.purchase.new',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/purchase',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.purchase.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/purchase/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PurchaseController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\PurchaseController@edit',
        'as' => 'admin.purchase.edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/purchase',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.purchase.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/purchase/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PurchaseController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\PurchaseController@store',
        'as' => 'admin.purchase.store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/purchase',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.purchase.invoice.pdf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/purchase/pdf/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PurchaseController@downloadDetails',
        'controller' => 'App\\Http\\Controllers\\Admin\\PurchaseController@downloadDetails',
        'as' => 'admin.purchase.invoice.pdf',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/purchase',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.purchase.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/purchase/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PurchaseController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\PurchaseController@update',
        'as' => 'admin.purchase.update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/purchase',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.purchase.product.search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/purchase/product-search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PurchaseController@productSearch',
        'controller' => 'App\\Http\\Controllers\\Admin\\PurchaseController@productSearch',
        'as' => 'admin.purchase.product.search',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/purchase',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.purchase.invoice.check' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/purchase/invoice-check',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PurchaseController@invoiceCheck',
        'controller' => 'App\\Http\\Controllers\\Admin\\PurchaseController@invoiceCheck',
        'as' => 'admin.purchase.invoice.check',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/purchase',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.purchase.return.items' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/purchase-return/new/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PurchaseReturnController@newReturn',
        'controller' => 'App\\Http\\Controllers\\Admin\\PurchaseReturnController@newReturn',
        'as' => 'admin.purchase.return.items',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/purchase-return',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.purchase.return.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/purchase-return/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PurchaseReturnController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\PurchaseReturnController@index',
        'as' => 'admin.purchase.return.index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/purchase-return',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.purchase.return.pdf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/purchase-return/pdf',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PurchaseReturnController@purchaseReturnPDF',
        'controller' => 'App\\Http\\Controllers\\Admin\\PurchaseReturnController@purchaseReturnPDF',
        'as' => 'admin.purchase.return.pdf',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/purchase-return',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.purchase.return.csv' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/purchase-return/csv',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PurchaseReturnController@purchaseReturnCSV',
        'controller' => 'App\\Http\\Controllers\\Admin\\PurchaseReturnController@purchaseReturnCSV',
        'as' => 'admin.purchase.return.csv',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/purchase-return',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.purchase.return.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/purchase-return/store/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PurchaseReturnController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\PurchaseReturnController@store',
        'as' => 'admin.purchase.return.store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/purchase-return',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.purchase.return.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/purchase-return/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PurchaseReturnController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\PurchaseReturnController@edit',
        'as' => 'admin.purchase.return.edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/purchase-return',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.purchase.return.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/purchase-return/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PurchaseReturnController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\PurchaseReturnController@update',
        'as' => 'admin.purchase.return.update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/purchase-return',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.purchase.return.invoice.pdf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/purchase-return/pdf/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PurchaseReturnController@downloadDetails',
        'controller' => 'App\\Http\\Controllers\\Admin\\PurchaseReturnController@downloadDetails',
        'as' => 'admin.purchase.return.invoice.pdf',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/purchase-return',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.purchase.return.search.product' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/purchase-return/search-product',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PurchaseReturnController@searchProduct',
        'controller' => 'App\\Http\\Controllers\\Admin\\PurchaseReturnController@searchProduct',
        'as' => 'admin.purchase.return.search.product',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/purchase-return',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.purchase.return.check.invoice' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/purchase-return/check-invoice',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PurchaseReturnController@checkInvoice',
        'controller' => 'App\\Http\\Controllers\\Admin\\PurchaseReturnController@checkInvoice',
        'as' => 'admin.purchase.return.check.invoice',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/purchase-return',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.sale.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/sale/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SaleController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\SaleController@index',
        'as' => 'admin.sale.index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/sale',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.sale.pdf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/sale/pdf',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SaleController@salePDF',
        'controller' => 'App\\Http\\Controllers\\Admin\\SaleController@salePDF',
        'as' => 'admin.sale.pdf',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/sale',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.sale.csv' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/sale/csv',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SaleController@saleCSV',
        'controller' => 'App\\Http\\Controllers\\Admin\\SaleController@saleCSV',
        'as' => 'admin.sale.csv',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/sale',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.sale.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/sale/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SaleController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\SaleController@create',
        'as' => 'admin.sale.create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/sale',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.sale.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/sale/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SaleController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\SaleController@store',
        'as' => 'admin.sale.store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/sale',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.sale.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/sale/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SaleController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\SaleController@edit',
        'as' => 'admin.sale.edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/sale',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.sale.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/sale/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SaleController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\SaleController@update',
        'as' => 'admin.sale.update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/sale',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.sale.invoice.pdf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/sale/pdf/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SaleController@downloadInvoice',
        'controller' => 'App\\Http\\Controllers\\Admin\\SaleController@downloadInvoice',
        'as' => 'admin.sale.invoice.pdf',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/sale',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.sale.search.product' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/sale/search-product',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SaleController@searchProduct',
        'controller' => 'App\\Http\\Controllers\\Admin\\SaleController@searchProduct',
        'as' => 'admin.sale.search.product',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/sale',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.sale.search.customer' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/sale/search-customer',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SaleController@searchCustomer',
        'controller' => 'App\\Http\\Controllers\\Admin\\SaleController@searchCustomer',
        'as' => 'admin.sale.search.customer',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/sale',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.sale.last.invoice' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/sale/last-invoice',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SaleController@lastInvoice',
        'controller' => 'App\\Http\\Controllers\\Admin\\SaleController@lastInvoice',
        'as' => 'admin.sale.last.invoice',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/sale',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.sale.return.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/sale-return/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SaleReturnController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\SaleReturnController@index',
        'as' => 'admin.sale.return.index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/sale-return',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.sale.return.pdf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/sale-return/pdf',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SaleReturnController@saleReturnPDF',
        'controller' => 'App\\Http\\Controllers\\Admin\\SaleReturnController@saleReturnPDF',
        'as' => 'admin.sale.return.pdf',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/sale-return',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.sale.return.csv' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/sale-return/csv',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SaleReturnController@saleReturnCSV',
        'controller' => 'App\\Http\\Controllers\\Admin\\SaleReturnController@saleReturnCSV',
        'as' => 'admin.sale.return.csv',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/sale-return',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.sale.return.items' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/sale-return/new/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SaleReturnController@newReturn',
        'controller' => 'App\\Http\\Controllers\\Admin\\SaleReturnController@newReturn',
        'as' => 'admin.sale.return.items',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/sale-return',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.sale.return.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/sale-return/store/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SaleReturnController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\SaleReturnController@store',
        'as' => 'admin.sale.return.store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/sale-return',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.sale.return.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/sale-return/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SaleReturnController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\SaleReturnController@edit',
        'as' => 'admin.sale.return.edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/sale-return',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.sale.return.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/sale-return/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SaleReturnController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\SaleReturnController@update',
        'as' => 'admin.sale.return.update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/sale-return',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.sale.return.invoice.pdf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/sale-return/pdf/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SaleReturnController@downloadInvoice',
        'controller' => 'App\\Http\\Controllers\\Admin\\SaleReturnController@downloadInvoice',
        'as' => 'admin.sale.return.invoice.pdf',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/sale-return',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.sale.return.search.product' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/sale-return/search-product',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SaleReturnController@searchProduct',
        'controller' => 'App\\Http\\Controllers\\Admin\\SaleReturnController@searchProduct',
        'as' => 'admin.sale.return.search.product',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/sale-return',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.sale.return.search.customer' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/sale-return/search-customer',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SaleReturnController@searchCustomer',
        'controller' => 'App\\Http\\Controllers\\Admin\\SaleReturnController@searchCustomer',
        'as' => 'admin.sale.return.search.customer',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/sale-return',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.adjustment.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/adjustment/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdjustmentController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdjustmentController@index',
        'as' => 'admin.adjustment.index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/adjustment',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.adjustment.pdf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/adjustment/pdf',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdjustmentController@adjustmentPDF',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdjustmentController@adjustmentPDF',
        'as' => 'admin.adjustment.pdf',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/adjustment',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.adjustment.csv' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/adjustment/csv',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdjustmentController@adjustmentCSV',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdjustmentController@adjustmentCSV',
        'as' => 'admin.adjustment.csv',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/adjustment',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.adjustment.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/adjustment/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdjustmentController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdjustmentController@create',
        'as' => 'admin.adjustment.create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/adjustment',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.adjustment.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/adjustment/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdjustmentController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdjustmentController@store',
        'as' => 'admin.adjustment.store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/adjustment',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.adjustment.details.pdf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/adjustment/details/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdjustmentController@detailsPDF',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdjustmentController@detailsPDF',
        'as' => 'admin.adjustment.details.pdf',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/adjustment',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.adjustment.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/adjustment/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdjustmentController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdjustmentController@edit',
        'as' => 'admin.adjustment.edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/adjustment',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.adjustment.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/adjustment/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdjustmentController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdjustmentController@update',
        'as' => 'admin.adjustment.update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/adjustment',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.adjustment.search.product' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/adjustment/search-product',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdjustmentController@searchProduct',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdjustmentController@searchProduct',
        'as' => 'admin.adjustment.search.product',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/adjustment',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.supplier.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/supplier/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SupplierController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\SupplierController@index',
        'as' => 'admin.supplier.index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/supplier',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.supplier.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/supplier/store/{id?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SupplierController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\SupplierController@store',
        'as' => 'admin.supplier.store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/supplier',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.supplier.pdf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/supplier/pdf',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SupplierController@supplierPDF',
        'controller' => 'App\\Http\\Controllers\\Admin\\SupplierController@supplierPDF',
        'as' => 'admin.supplier.pdf',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/supplier',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.supplier.csv' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/supplier/csv',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SupplierController@supplierCSV',
        'controller' => 'App\\Http\\Controllers\\Admin\\SupplierController@supplierCSV',
        'as' => 'admin.supplier.csv',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/supplier',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.supplier.import' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/supplier/import',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SupplierController@import',
        'controller' => 'App\\Http\\Controllers\\Admin\\SupplierController@import',
        'as' => 'admin.supplier.import',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/supplier',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.customer.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/customer/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CustomerController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\CustomerController@index',
        'as' => 'admin.customer.index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/customer',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.customer.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/customer/store/{id?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CustomerController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\CustomerController@store',
        'as' => 'admin.customer.store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/customer',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.customer.pdf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/customer/pdf',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CustomerController@customerPDF',
        'controller' => 'App\\Http\\Controllers\\Admin\\CustomerController@customerPDF',
        'as' => 'admin.customer.pdf',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/customer',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.customer.csv' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/customer/csv',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CustomerController@customerCSV',
        'controller' => 'App\\Http\\Controllers\\Admin\\CustomerController@customerCSV',
        'as' => 'admin.customer.csv',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/customer',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.customer.import' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/customer/import',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CustomerController@import',
        'controller' => 'App\\Http\\Controllers\\Admin\\CustomerController@import',
        'as' => 'admin.customer.import',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/customer',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.customer.notification.log' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/customer/notification-log/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CustomerController@notificationLog',
        'controller' => 'App\\Http\\Controllers\\Admin\\CustomerController@notificationLog',
        'as' => 'admin.customer.notification.log',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/customer',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.customer.notification.single' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/customer/send-notification/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CustomerController@showNotificationSingleForm',
        'controller' => 'App\\Http\\Controllers\\Admin\\CustomerController@showNotificationSingleForm',
        'as' => 'admin.customer.notification.single',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/customer',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.customer.' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/customer/send-notification/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CustomerController@sendNotificationSingle',
        'controller' => 'App\\Http\\Controllers\\Admin\\CustomerController@sendNotificationSingle',
        'as' => 'admin.customer.',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/customer',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.customer.notification.all' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/customer/send-notification',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CustomerController@showNotificationAllForm',
        'controller' => 'App\\Http\\Controllers\\Admin\\CustomerController@showNotificationAllForm',
        'as' => 'admin.customer.notification.all',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/customer',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.customer.notification.all.send' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/customer/send-notification',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CustomerController@sendNotificationAll',
        'controller' => 'App\\Http\\Controllers\\Admin\\CustomerController@sendNotificationAll',
        'as' => 'admin.customer.notification.all.send',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/customer',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.customer.email.details' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/customer/email/detail/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CustomerController@emailDetails',
        'controller' => 'App\\Http\\Controllers\\Admin\\CustomerController@emailDetails',
        'as' => 'admin.customer.email.details',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/customer',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.supplier.payment.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/supplier/payment/index/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SupplierPaymentController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\SupplierPaymentController@index',
        'as' => 'admin.supplier.payment.index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/supplier/payment',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.supplier.payment.clear' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/supplier/payment/all-payment/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SupplierPaymentController@clearPayment',
        'controller' => 'App\\Http\\Controllers\\Admin\\SupplierPaymentController@clearPayment',
        'as' => 'admin.supplier.payment.clear',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/supplier/payment',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.supplier.payment.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/supplier/payment/store/{id?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SupplierPaymentController@purchasePayment',
        'controller' => 'App\\Http\\Controllers\\Admin\\SupplierPaymentController@purchasePayment',
        'as' => 'admin.supplier.payment.store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/supplier/payment',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.supplier.payment.receive.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/supplier/payment/receive-payment/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SupplierPaymentController@purchaseReturnPayment',
        'controller' => 'App\\Http\\Controllers\\Admin\\SupplierPaymentController@purchaseReturnPayment',
        'as' => 'admin.supplier.payment.receive.store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/supplier/payment',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.supplier.payment.pdf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/supplier/payment/pdf/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SupplierPaymentController@customerPayPDF',
        'controller' => 'App\\Http\\Controllers\\Admin\\SupplierPaymentController@customerPayPDF',
        'as' => 'admin.supplier.payment.pdf',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/supplier/payment',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.customer.payment.clear' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/customer/payment/all-payment/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CustomerPaymentController@clearPayment',
        'controller' => 'App\\Http\\Controllers\\Admin\\CustomerPaymentController@clearPayment',
        'as' => 'admin.customer.payment.clear',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/customer/payment',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.customer.payment.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/customer/payment/index/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CustomerPaymentController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\CustomerPaymentController@index',
        'as' => 'admin.customer.payment.index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/customer/payment',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.customer.payment.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/customer/payment/store/{id?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CustomerPaymentController@salePayment',
        'controller' => 'App\\Http\\Controllers\\Admin\\CustomerPaymentController@salePayment',
        'as' => 'admin.customer.payment.store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/customer/payment',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.customer.payment.payable.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/customer/payment/payable/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CustomerPaymentController@storeCustomerPayablePayment',
        'controller' => 'App\\Http\\Controllers\\Admin\\CustomerPaymentController@storeCustomerPayablePayment',
        'as' => 'admin.customer.payment.payable.store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/customer/payment',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.customer.payment.pdf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/customer/payment/pdf/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CustomerPaymentController@customerPayPDF',
        'controller' => 'App\\Http\\Controllers\\Admin\\CustomerPaymentController@customerPayPDF',
        'as' => 'admin.customer.payment.pdf',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/customer/payment',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.transfer.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/transfer/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\TransferController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\TransferController@index',
        'as' => 'admin.transfer.index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/transfer',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.transfer.pdf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/transfer/pdf',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\TransferController@transferPDF',
        'controller' => 'App\\Http\\Controllers\\Admin\\TransferController@transferPDF',
        'as' => 'admin.transfer.pdf',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/transfer',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.transfer.csv' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/transfer/csv',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\TransferController@transferCSV',
        'controller' => 'App\\Http\\Controllers\\Admin\\TransferController@transferCSV',
        'as' => 'admin.transfer.csv',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/transfer',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.transfer.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/transfer/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\TransferController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\TransferController@create',
        'as' => 'admin.transfer.create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/transfer',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.transfer.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/transfer/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\TransferController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\TransferController@edit',
        'as' => 'admin.transfer.edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/transfer',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.transfer.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/transfer/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\TransferController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\TransferController@store',
        'as' => 'admin.transfer.store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/transfer',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.transfer.details.pdf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/transfer/pdf/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\TransferController@detailsPDF',
        'controller' => 'App\\Http\\Controllers\\Admin\\TransferController@detailsPDF',
        'as' => 'admin.transfer.details.pdf',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/transfer',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.transfer.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/transfer/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\TransferController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\TransferController@update',
        'as' => 'admin.transfer.update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/transfer',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.transfer.search.product' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/transfer/search-product',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\TransferController@searchProduct',
        'controller' => 'App\\Http\\Controllers\\Admin\\TransferController@searchProduct',
        'as' => 'admin.transfer.search.product',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/transfer',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.expense.type.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/expense-type',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ExpenseTypeController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\ExpenseTypeController@index',
        'as' => 'admin.expense.type.index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/expense-type',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.expense.type.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/expense-type/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ExpenseTypeController@remove',
        'controller' => 'App\\Http\\Controllers\\Admin\\ExpenseTypeController@remove',
        'as' => 'admin.expense.type.delete',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/expense-type',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.expense.type.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/expense-type/store/{id?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ExpenseTypeController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\ExpenseTypeController@store',
        'as' => 'admin.expense.type.store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/expense-type',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.expense.type.import' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/expense-type/import',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ExpenseTypeController@import',
        'controller' => 'App\\Http\\Controllers\\Admin\\ExpenseTypeController@import',
        'as' => 'admin.expense.type.import',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/expense-type',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.expense.pdf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/expense/pdf',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ExpenseController@expensePDF',
        'controller' => 'App\\Http\\Controllers\\Admin\\ExpenseController@expensePDF',
        'as' => 'admin.expense.pdf',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/expense',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.expense.csv' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/expense/csv',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ExpenseController@expenseCSV',
        'controller' => 'App\\Http\\Controllers\\Admin\\ExpenseController@expenseCSV',
        'as' => 'admin.expense.csv',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/expense',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.expense.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/expense/{id?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ExpenseController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\ExpenseController@index',
        'as' => 'admin.expense.index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/expense',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.expense.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/expense/store/{id?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ExpenseController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\ExpenseController@store',
        'as' => 'admin.expense.store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/expense',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.expense.import' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/expense/import',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ExpenseController@import',
        'controller' => 'App\\Http\\Controllers\\Admin\\ExpenseController@import',
        'as' => 'admin.expense.import',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/expense',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/general-setting',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingController@index',
        'as' => 'admin.setting.index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/general-setting',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingController@update',
        'as' => 'admin.setting.update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.system.configuration' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/setting/system-configuration',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingController@systemConfiguration',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingController@systemConfiguration',
        'as' => 'admin.setting.system.configuration',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.system.configuration.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/setting/system-configuration/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingController@systemConfigurationSubmit',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingController@systemConfigurationSubmit',
        'as' => 'admin.setting.system.configuration.store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.logo.icon' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/setting/logo-icon',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingController@logoIcon',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingController@logoIcon',
        'as' => 'admin.setting.logo.icon',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.logo.icon.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/setting/logo-icon',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingController@logoIconUpdate',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingController@logoIconUpdate',
        'as' => 'admin.setting.logo.icon.store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.report.payment.supplier' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/reports/payment/supplier',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PaymentReportController@supplierPaymentLogs',
        'controller' => 'App\\Http\\Controllers\\Admin\\PaymentReportController@supplierPaymentLogs',
        'as' => 'admin.report.payment.supplier',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/reports/payment',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.report.payment.supplier.pdf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/reports/payment/supplier/pdf',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PaymentReportController@supplierPaymentPDF',
        'controller' => 'App\\Http\\Controllers\\Admin\\PaymentReportController@supplierPaymentPDF',
        'as' => 'admin.report.payment.supplier.pdf',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/reports/payment',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.report.payment.supplier.csv' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/reports/payment/supplier/csv',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PaymentReportController@supplierPaymentCSV',
        'controller' => 'App\\Http\\Controllers\\Admin\\PaymentReportController@supplierPaymentCSV',
        'as' => 'admin.report.payment.supplier.csv',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/reports/payment',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.report.payment.customer' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/reports/payment/customer',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PaymentReportController@customerPaymentLogs',
        'controller' => 'App\\Http\\Controllers\\Admin\\PaymentReportController@customerPaymentLogs',
        'as' => 'admin.report.payment.customer',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/reports/payment',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.report.payment.customer.pdf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/reports/payment/customer/pdf',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PaymentReportController@customerPaymentPDF',
        'controller' => 'App\\Http\\Controllers\\Admin\\PaymentReportController@customerPaymentPDF',
        'as' => 'admin.report.payment.customer.pdf',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/reports/payment',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.report.payment.customer.csv' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/reports/payment/customer/csv',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PaymentReportController@customerPaymentCSV',
        'controller' => 'App\\Http\\Controllers\\Admin\\PaymentReportController@customerPaymentCSV',
        'as' => 'admin.report.payment.customer.csv',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/reports/payment',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.report.stock.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/reports/stock/index',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\StockReportController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\StockReportController@index',
        'as' => 'admin.report.stock.index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/reports/stock',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.report.stock.pdf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/reports/stock/pdf',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\StockReportController@stockPDF',
        'controller' => 'App\\Http\\Controllers\\Admin\\StockReportController@stockPDF',
        'as' => 'admin.report.stock.pdf',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/reports/stock',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.report.stock.csv' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/reports/stock/csv',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\StockReportController@stockCSV',
        'controller' => 'App\\Http\\Controllers\\Admin\\StockReportController@stockCSV',
        'as' => 'admin.report.stock.csv',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/reports/stock',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.product.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/all-products',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ProductController@allProducts',
        'controller' => 'App\\Http\\Controllers\\Admin\\ProductController@allProducts',
        'as' => 'admin.product.list',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.report.data.entry.product' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/reports/data-entry/product',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DataEntryReportController@product',
        'controller' => 'App\\Http\\Controllers\\Admin\\DataEntryReportController@product',
        'as' => 'admin.report.data.entry.product',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/reports/data-entry',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.report.data.entry.customer' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/reports/data-entry/customer',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DataEntryReportController@customer',
        'controller' => 'App\\Http\\Controllers\\Admin\\DataEntryReportController@customer',
        'as' => 'admin.report.data.entry.customer',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/reports/data-entry',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.report.data.entry.supplier' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/reports/data-entry/supplier',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DataEntryReportController@supplier',
        'controller' => 'App\\Http\\Controllers\\Admin\\DataEntryReportController@supplier',
        'as' => 'admin.report.data.entry.supplier',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/reports/data-entry',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.report.data.entry.purchase' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/reports/data-entry/purchase',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DataEntryReportController@purchase',
        'controller' => 'App\\Http\\Controllers\\Admin\\DataEntryReportController@purchase',
        'as' => 'admin.report.data.entry.purchase',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/reports/data-entry',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.report.data.entry.purchase.return' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/reports/data-entry/purchase-return',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DataEntryReportController@purchaseReturn',
        'controller' => 'App\\Http\\Controllers\\Admin\\DataEntryReportController@purchaseReturn',
        'as' => 'admin.report.data.entry.purchase.return',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/reports/data-entry',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.report.data.entry.sale' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/reports/data-entry/sale',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DataEntryReportController@sale',
        'controller' => 'App\\Http\\Controllers\\Admin\\DataEntryReportController@sale',
        'as' => 'admin.report.data.entry.sale',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/reports/data-entry',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.report.data.entry.sale.return' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/reports/data-entry/sale-return',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DataEntryReportController@saleReturn',
        'controller' => 'App\\Http\\Controllers\\Admin\\DataEntryReportController@saleReturn',
        'as' => 'admin.report.data.entry.sale.return',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/reports/data-entry',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.report.data.entry.adjustment' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/reports/data-entry/adjustment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DataEntryReportController@adjustment',
        'controller' => 'App\\Http\\Controllers\\Admin\\DataEntryReportController@adjustment',
        'as' => 'admin.report.data.entry.adjustment',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/reports/data-entry',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.report.data.entry.transfer' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/reports/data-entry/transfer',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DataEntryReportController@transfer',
        'controller' => 'App\\Http\\Controllers\\Admin\\DataEntryReportController@transfer',
        'as' => 'admin.report.data.entry.transfer',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/reports/data-entry',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.report.data.entry.expense' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/reports/data-entry/expense',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DataEntryReportController@expense',
        'controller' => 'App\\Http\\Controllers\\Admin\\DataEntryReportController@expense',
        'as' => 'admin.report.data.entry.expense',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/reports/data-entry',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.report.data.entry.supplier.payment' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/reports/data-entry/supplier-payment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DataEntryReportController@supplierPayment',
        'controller' => 'App\\Http\\Controllers\\Admin\\DataEntryReportController@supplierPayment',
        'as' => 'admin.report.data.entry.supplier.payment',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/reports/data-entry',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.report.data.entry.customer.payment' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/reports/data-entry/customer-payment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DataEntryReportController@customerPayment',
        'controller' => 'App\\Http\\Controllers\\Admin\\DataEntryReportController@customerPayment',
        'as' => 'admin.report.data.entry.customer.payment',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/reports/data-entry',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.notification.global' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/notification/global',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\NotificationController@global',
        'controller' => 'App\\Http\\Controllers\\Admin\\NotificationController@global',
        'as' => 'admin.setting.notification.global',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/notification',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.notification.global.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/notification/global/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\NotificationController@globalUpdate',
        'controller' => 'App\\Http\\Controllers\\Admin\\NotificationController@globalUpdate',
        'as' => 'admin.setting.notification.global.update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/notification',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.notification.templates' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/notification/templates',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\NotificationController@templates',
        'controller' => 'App\\Http\\Controllers\\Admin\\NotificationController@templates',
        'as' => 'admin.setting.notification.templates',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/notification',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.notification.template.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/notification/template/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\NotificationController@templateEdit',
        'controller' => 'App\\Http\\Controllers\\Admin\\NotificationController@templateEdit',
        'as' => 'admin.setting.notification.template.edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/notification',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.notification.template.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/notification/template/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\NotificationController@templateUpdate',
        'controller' => 'App\\Http\\Controllers\\Admin\\NotificationController@templateUpdate',
        'as' => 'admin.setting.notification.template.update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/notification',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.notification.email' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/notification/email/setting',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\NotificationController@emailSetting',
        'controller' => 'App\\Http\\Controllers\\Admin\\NotificationController@emailSetting',
        'as' => 'admin.setting.notification.email',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/notification',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.notification.email.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/notification/email/setting',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\NotificationController@emailSettingUpdate',
        'controller' => 'App\\Http\\Controllers\\Admin\\NotificationController@emailSettingUpdate',
        'as' => 'admin.setting.notification.email.update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/notification',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.notification.email.test' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/notification/email/test',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\NotificationController@emailTest',
        'controller' => 'App\\Http\\Controllers\\Admin\\NotificationController@emailTest',
        'as' => 'admin.setting.notification.email.test',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/notification',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.notification.sms' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/notification/sms/setting',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\NotificationController@smsSetting',
        'controller' => 'App\\Http\\Controllers\\Admin\\NotificationController@smsSetting',
        'as' => 'admin.setting.notification.sms',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/notification',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.notification.sms.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/notification/sms/setting',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\NotificationController@smsSettingUpdate',
        'controller' => 'App\\Http\\Controllers\\Admin\\NotificationController@smsSettingUpdate',
        'as' => 'admin.setting.notification.sms.update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/notification',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.notification.sms.test' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/notification/sms/test',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\NotificationController@smsTest',
        'controller' => 'App\\Http\\Controllers\\Admin\\NotificationController@smsTest',
        'as' => 'admin.setting.notification.sms.test',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/notification',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.system.info' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/system/info',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SystemController@systemInfo',
        'controller' => 'App\\Http\\Controllers\\Admin\\SystemController@systemInfo',
        'as' => 'admin.system.info',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/system',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.system.server.info' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/system/server-info',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SystemController@systemServerInfo',
        'controller' => 'App\\Http\\Controllers\\Admin\\SystemController@systemServerInfo',
        'as' => 'admin.system.server.info',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/system',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.system.optimize' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/system/optimize',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SystemController@optimize',
        'controller' => 'App\\Http\\Controllers\\Admin\\SystemController@optimize',
        'as' => 'admin.system.optimize',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/system',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.system.optimize.clear' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/system/optimize-clear',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SystemController@optimizeClear',
        'controller' => 'App\\Http\\Controllers\\Admin\\SystemController@optimizeClear',
        'as' => 'admin.system.optimize.clear',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/system',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.system.update' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/system/system-update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SystemController@systemUpdate',
        'controller' => 'App\\Http\\Controllers\\Admin\\SystemController@systemUpdate',
        'as' => 'admin.system.update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/system',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.system.update.upload' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/system/update-upload',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'admin',
          3 => 'adminPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SystemController@updateUpload',
        'controller' => 'App\\Http\\Controllers\\Admin\\SystemController@updateUpload',
        'as' => 'admin.system.update.upload',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/system',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ExPrNwid6a3wtfxU' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'test',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'maintenance',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:605:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:386:"function ($lastNumber = \'S-0\') {
    $prefix         = \'S-\';
    $number         = \\str_replace($prefix, \'\', $lastNumber) + 1;
    $lengthOfNumber = \\strlen($number);
    $numberOfZeros  = 6 - $lengthOfNumber;
    $totalLength    = $numberOfZeros + $lengthOfNumber;
    $invoiceNumber  = \\str_pad($number, $totalLength, \'0\', STR_PAD_LEFT);
    return $prefix  = \'S-\' . $invoiceNumber;
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000070b0000000000000000";}";s:4:"hash";s:44:"ElosJJxQEl607enGs7g4E9qLFl0+NJFOxqsFbMAUdH0=";}}',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::ExPrNwid6a3wtfxU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Tn5rS7anLHVcqKcB' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'clear',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'maintenance',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:298:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:80:"function () {
    \\Illuminate\\Support\\Facades\\Artisan::call(\'optimize:clear\');
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000070d0000000000000000";}";s:4:"hash";s:44:"Qs1Q4ruEHiZddCnqF2zmSZQ/jTgfFWK/U4nDb3raxGI=";}}',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::Tn5rS7anLHVcqKcB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'placeholder.image' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'placeholder-image/{size}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\SiteController@placeholderImage',
        'controller' => 'App\\Http\\Controllers\\SiteController@placeholderImage',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'placeholder.image',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'home' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'checkProject',
          1 => 'web',
          2 => 'maintenance',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:274:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:56:"function () {
    return \\to_route(\'admin.dashboard\');
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000007220000000000000000";}";s:4:"hash";s:44:"HH81mIy++tuUJ3RYNOueh0QSZ911kRTGzyS0wBISqTQ=";}}',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'home',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
  ),
)
);
