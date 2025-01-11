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
      '/admin/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'brackets/admin-auth::admin/login',
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
            '_route' => 'generated::fvkBUUdY5xmhUxHT',
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
            '_route' => 'brackets/admin-auth::admin/logout',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
            'POST' => 2,
            'PUT' => 3,
            'PATCH' => 4,
            'DELETE' => 5,
            'OPTIONS' => 6,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/password-reset' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'brackets/admin-auth::admin/password/showForgotForm',
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
      '/admin/password-reset/send' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KqM7LalDHtXJNm6P',
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
            '_route' => 'brackets/admin-auth::admin',
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
      '/admin/activation' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'brackets/admin-auth::admin/activation',
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
      '/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'login',
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
            '_route' => 'generated::si9D46KlOXFjquWe',
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
      '/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'register',
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
            '_route' => 'generated::Eg0BlNgaAe1e7OSQ',
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
      '/admin/translations' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::EVkAqMTuiPG1R75N',
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
      '/admin/translations/export' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin/translations/export',
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
      '/admin/translations/import' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin/translations/import',
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
      '/admin/translations/import/conflicts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin/translations/import/conflicts',
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
      '/admin/translations/rescan' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Iv2FfCvzz5WnYwIR',
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
      '/admin/wysiwyg-media' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'brackets/admin-ui::wysiwyg-upload',
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
      '/upload' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'brackets/media::upload',
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
      '/view' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'brackets/media::view',
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
      '/_ignition/share-report' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.shareReport',
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
            '_route' => 'generated::e8470t029Z5LM8ls',
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
      '/api/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8ns3sFVNh0T5aWuO',
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
      '/clear-cache' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ve1l2BADSKnPujNw',
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
      '/key' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::P1onWtwh0kH9HmhM',
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
      '/extension' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::iWu28lDXIo7cbglN',
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
      '/optimize' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zKjmOPl4z9E0RyHZ',
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
      '/route-cache' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3sluWk5dpOoGEgmP',
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
      '/route-clear' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KWUbGNKvvN5XEBSC',
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
      '/view-clear' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::tzygoiYaWrtECRMS',
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
      '/config-cache' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::tq9bkNb2SuTahyZi',
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
            '_route' => 'generated::M3KzZeIOKsLu5mcI',
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
      '/books' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pC54XacbW2w60pOS',
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
      '/about-us' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pFmQCTRgIKNsrzcC',
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
      '/contact-us' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cK3eYbdCgDNNoH4k',
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
      '/test' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'test',
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
      '/privacy-policy' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uNdibMs6tVgFaw7j',
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
      '/terms-and-conditions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::eAxlB2tKow7vtUSi',
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
      '/cart' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::TPX3q9zEJVuuLoYs',
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
      '/authors' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::28R1CIVsk7M2cD3Q',
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
      '/items/add' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'items.',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
            'POST' => 2,
            'PUT' => 3,
            'PATCH' => 4,
            'DELETE' => 5,
            'OPTIONS' => 6,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/items/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'items.generated::fEufuGsFB8JbvLYO',
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
      '/items/quantityupdate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'items.generated::Bg2IL7bk6BElUuwg',
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
      '/login2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Byz3Bk1L3gqIHP9S',
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
      '/Register2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::i1H2YnERlbIRCMTH',
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
      '/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jtjz1EOazvQH8y87',
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
            '_route' => 'logout',
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
      '/forgot-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::78th2YuBAbxULUjZ',
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
      '/commentpost' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lSvWGxk7waAZuYPB',
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
      '/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard',
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
      '/myorders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'myorders',
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
      '/myaccount' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'myaccount',
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
      '/change-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update-password',
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
      '/update-profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update-profile',
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
      '/checkout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::966d7jhbf9ZaHb1P',
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
      '/process' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'process',
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
      '/admin/admin-users' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin/admin-users/index',
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
            '_route' => 'admin/admin-users/store',
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
      '/admin/admin-users/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin/admin-users/create',
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
            '_route' => 'admin/edit-profile',
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
            '_route' => 'admin/update-profile',
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
            '_route' => 'admin/edit-password',
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
            '_route' => 'admin/update-password',
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
      '/admin/categories' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin/categories/index',
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
            '_route' => 'admin/categories/store',
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
      '/admin/categories/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin/categories/create',
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
      '/admin/categories/bulk-destroy' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin/categories/bulk-destroy',
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
      '/admin/books' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin/books/index',
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
            '_route' => 'admin/books/store',
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
      '/admin/books/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin/books/create',
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
      '/admin/books/bulk-destroy' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin/books/bulk-destroy',
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
      '/admin/settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin/settings/index',
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
            '_route' => 'admin/settings/store',
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
      '/admin/settings/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin/settings/create',
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
      '/admin/settings/bulk-destroy' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin/settings/bulk-destroy',
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
      '/admin/authors' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin/authors/index',
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
            '_route' => 'admin/authors/store',
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
      '/admin/authors/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin/authors/create',
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
      '/admin/authors/bulk-destroy' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin/authors/bulk-destroy',
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
      '/admin/roles' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin/roles/index',
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
            '_route' => 'admin/roles/store',
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
      '/admin/roles/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin/roles/create',
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
      '/admin/roles/bulk-destroy' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin/roles/bulk-destroy',
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
      '/admin/units' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin/units/index',
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
            '_route' => 'admin/units/store',
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
      '/admin/units/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin/units/create',
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
      '/admin/units/bulk-destroy' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin/units/bulk-destroy',
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
      '/copysection' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YMaQMVj76V1KHac2',
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
      '/fetchsections' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xsEKoSLWt5K5WHNh',
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
      '/copyUnit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::f0UrZAdUnlITRzfr',
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
      '/create-quiz' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pMWh47tGoZ7Tof42',
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
      '/get-quiz' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ax8u7VskFFxRLa2X',
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
      '/switchQuestion' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MHcTxX4L1Rg0KsIf',
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
      '/quiz-result' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Mjd6g71D90V56MpF',
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
      '/wrong-questions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::waBAGIWlFeUpUDcz',
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
      '/get-mcqs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dSoQSDfwdlsno8eg',
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
      '/admin/sections' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin/sections/index',
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
            '_route' => 'admin/sections/store',
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
      '/admin/sections/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin/sections/create',
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
      '/admin/sections/bulk-destroy' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin/sections/bulk-destroy',
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
      '/admin/questions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin/questions/index',
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
            '_route' => 'admin/questions/store',
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
      '/admin/questions/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin/questions/create',
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
      '/admin/questions/bulk-destroy' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin/questions/bulk-destroy',
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
      '/admin/users' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin/users/index',
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
            '_route' => 'admin/users/store',
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
      '/admin/users/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin/users/create',
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
      '/admin/users/bulk-destroy' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin/users/bulk-destroy',
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
      '/password/reset' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.request',
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
            '_route' => 'password.update',
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
      '/password/email' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.email',
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
      '/password/confirm' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.confirm',
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
            '_route' => 'generated::9nHl5LgaM1ZbhLbo',
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
      '/home' => 
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
      '/admin/comments' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin/comments/index',
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
            '_route' => 'admin/comments/store',
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
      '/admin/comments/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin/comments/create',
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
      '/admin/comments/bulk-destroy' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin/comments/bulk-destroy',
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
      '/admin/order-hds' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin/order-hds/index',
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
            '_route' => 'admin/order-hds/store',
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
      '/admin/order-hds/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin/order-hds/create',
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
      '/admin/order-hds/bulk-destroy' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin/order-hds/bulk-destroy',
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
      '/admin/slides' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin/slides/index',
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
            '_route' => 'admin/slides/store',
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
      '/admin/slides/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin/slides/create',
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
      '/admin/slides/bulk-destroy' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin/slides/bulk-destroy',
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
      '/admin/reports/book-reports' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin/order-dts/book_reports',
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
      '/admin/reports/payment-reports' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin/order-dts/payment_reports',
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
      '/admin/reports/statistics' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin/order-dts/statistics',
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
      '/admin/tests' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin/tests/index',
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
            '_route' => 'admin/tests/store',
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
      '/admin/tests/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin/tests/create',
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
      '/admin/tests/bulk-destroy' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin/tests/bulk-destroy',
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
      '/admin/paymentDetails' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'paymentDetails',
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
      '/testapplies' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'testapplies.index',
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
            '_route' => 'testapplies.store',
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
      '/testapplies/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'testapplies.create',
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
      '/test-take' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'test-take.submit',
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
      '/get-question' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::K4UtGIzqV3OmGzzx',
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
      '/switchTestQuestion' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Dz48BXKoBfYbW9SI',
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
      '/test-result' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'test-result.submit',
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
      '/result_filter' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'result_filter',
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
      '/wrong-questions-test' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qGIS5LMWjQQxAOa8',
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
      '/admin/provinces' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin/provinces/index',
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
            '_route' => 'admin/provinces/store',
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
      '/admin/provinces/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin/provinces/create',
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
      '/admin/provinces/bulk-destroy' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin/provinces/bulk-destroy',
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
      '/admin/districts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin/districts/index',
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
            '_route' => 'admin/districts/store',
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
      '/admin/districts/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin/districts/create',
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
      '/admin/districts/bulk-destroy' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin/districts/bulk-destroy',
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
      '/admin/intro-videos' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin/intro-videos/index',
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
            '_route' => 'admin/intro-videos/store',
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
      '/admin/intro-videos/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin/intro-videos/create',
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
      '/admin/intro-videos/bulk-destroy' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin/intro-videos/bulk-destroy',
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
      '/admin/menus' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin/menus/index',
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
            '_route' => 'admin/menus/store',
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
      '/admin/menus/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin/menus/create',
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
      '/admin/menus/bulk-destroy' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin/menus/bulk-destroy',
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
      '/admin/sub-menus' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin/sub-menus/index',
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
            '_route' => 'admin/sub-menus/store',
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
      '/admin/sub-menus/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin/sub-menus/create',
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
      '/admin/sub-menus/bulk-destroy' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin/sub-menus/bulk-destroy',
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
      '/admin/drop-down-menus' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin/drop-down-menus/index',
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
            '_route' => 'admin/drop-down-menus/store',
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
      '/admin/drop-down-menus/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin/drop-down-menus/create',
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
      '/admin/drop-down-menus/bulk-destroy' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin/drop-down-menus/bulk-destroy',
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
      '/admin/zones' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin/zones/index',
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
            '_route' => 'admin/zones/store',
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
      '/admin/zones/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin/zones/create',
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
      '/admin/zones/bulk-destroy' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin/zones/bulk-destroy',
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
      '/stop-impersonating' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'stop-impersonating',
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
      0 => '{^(?|/a(?|dmin/(?|p(?|assword\\-reset/(?|([^/]++)(*:50)|reset(*:62))|rovinces/([^/]++)(?|/edit(*:95)|(*:102)))|a(?|ctivation/(?|([^/]++)(*:137)|send(*:149))|dmin\\-users/([^/]++)(?|/(?|impersonal\\-login(*:202)|edit(*:214)|resend\\-activation(*:240))|(*:249))|uthors/([^/]++)(?|/edit(*:281)|(*:289)))|t(?|ranslations/([^/]++)(*:323)|est(?|s/([^/]++)(?|/edit(*:355)|(*:363))|/application/(?|edit/([^/]++)(*:401)|destroy/([^/]++)(*:425)|update/([^/]++)(*:448))))|c(?|ategories/([^/]++)(?|/edit(*:489)|(*:497))|omments/([^/]++)(?|/edit(*:530)|(*:538)))|books/([^/]++)(?|/edit(*:570)|(*:578))|s(?|e(?|ttings/([^/]++)(?|/edit(*:618)|(*:626))|ctions/(?|([^/]++)(?|/edit(*:661)|(*:669))|copySection(*:689)))|lides/([^/]++)(?|/edit(*:721)|(*:729))|ub\\-menus/([^/]++)(?|/edit(*:764)|(*:772)))|roles/([^/]++)(?|/edit(*:804)|(*:812))|u(?|nits/([^/]++)(?|/edit(*:846)|(*:854))|sers/([^/]++)(?|/edit(*:884)|(*:892)))|questions/([^/]++)(?|/edit(*:928)|(*:936))|order\\-hds/(?|show/([^/]++)(*:972)|([^/]++)(?|/edit(*:996)|(*:1004)))|d(?|istricts/([^/]++)(?|/edit(*:1044)|(*:1053))|rop\\-down\\-menus/([^/]++)(?|/edit(*:1096)|(*:1105)))|i(?|ntro\\-videos/([^/]++)(?|/edit(*:1149)|(*:1158))|mpersonate/([^/]++)(*:1187))|menus/([^/]++)(?|/edit(*:1219)|(*:1228))|zones/([^/]++)(?|/edit(*:1260)|(*:1269)))|uthor/([^/]++)(*:1294))|/_ignition/s(?|cripts/([^/]++)(*:1334)|tyles/([^/]++)(*:1357))|/book/([^/]++)(*:1381)|/section(?|\\-details/([^/]++)(*:1419)|/([^/]++)/([^/]++)(*:1446))|/items/(?|remove(?|/([^/]++)(*:1484)|Itemfrombasket/([^/]++)(*:1516))|edit/([^/]++)(*:1539))|/order\\-details/([^/]++)(*:1573)|/result/details/([^/]++)(*:1606)|/password/reset/([^/]++)(*:1639)|/test(?|applies/(?|([^/]++)(?|(*:1678)|/edit(*:1692)|(*:1701))|print(?|(*:1719)|OurSlip(*:1735))|check(?|UserCredentials(*:1768)|_result(*:1784)))|\\-result/(?|details/([^/]++)(*:1823)|overall/([^/]++)(*:1848)))|/fetch\\-districts/([^/]++)(*:1885)|/videos/([^/]++)(*:1910))/?$}sDu',
    ),
    3 => 
    array (
      50 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'brackets/admin-auth::admin/password/showResetForm',
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
      62 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MygMhUZEhWaNorbx',
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
      95 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin/provinces/edit',
          ),
          1 => 
          array (
            0 => 'province',
          ),
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
      102 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin/provinces/update',
          ),
          1 => 
          array (
            0 => 'province',
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
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin/provinces/destroy',
          ),
          1 => 
          array (
            0 => 'province',
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
      137 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'brackets/admin-auth::admin/activation/activate',
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
      149 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OW61SS3NRZRnQfaX',
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
      202 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin/admin-users/impersonal-login',
          ),
          1 => 
          array (
            0 => 'adminUser',
          ),
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
      214 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin/admin-users/edit',
          ),
          1 => 
          array (
            0 => 'adminUser',
          ),
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
      240 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin/admin-users/resendActivationEmail',
          ),
          1 => 
          array (
            0 => 'adminUser',
          ),
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
      249 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin/admin-users/update',
          ),
          1 => 
          array (
            0 => 'adminUser',
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
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin/admin-users/destroy',
          ),
          1 => 
          array (
            0 => 'adminUser',
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
      281 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin/authors/edit',
          ),
          1 => 
          array (
            0 => 'author',
          ),
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
      289 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin/authors/update',
          ),
          1 => 
          array (
            0 => 'author',
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
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin/authors/destroy',
          ),
          1 => 
          array (
            0 => 'author',
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
      323 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zdJjTpI9TfMdCI1P',
          ),
          1 => 
          array (
            0 => 'translation',
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
      355 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin/tests/edit',
          ),
          1 => 
          array (
            0 => 'test',
          ),
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
      363 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin/tests/update',
          ),
          1 => 
          array (
            0 => 'test',
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
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin/tests/destroy',
          ),
          1 => 
          array (
            0 => 'test',
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
      401 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.test.application.edit',
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
      425 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.test.application.destroy',
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
      448 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.test.application.update',
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
      489 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin/categories/edit',
          ),
          1 => 
          array (
            0 => 'category',
          ),
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
      497 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin/categories/update',
          ),
          1 => 
          array (
            0 => 'category',
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
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin/categories/destroy',
          ),
          1 => 
          array (
            0 => 'category',
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
      530 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin/comments/edit',
          ),
          1 => 
          array (
            0 => 'comment',
          ),
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
      538 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin/comments/update',
          ),
          1 => 
          array (
            0 => 'comment',
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
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin/comments/destroy',
          ),
          1 => 
          array (
            0 => 'comment',
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
      570 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin/books/edit',
          ),
          1 => 
          array (
            0 => 'book',
          ),
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
      578 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin/books/update',
          ),
          1 => 
          array (
            0 => 'book',
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
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin/books/destroy',
          ),
          1 => 
          array (
            0 => 'book',
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
      618 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin/settings/edit',
          ),
          1 => 
          array (
            0 => 'setting',
          ),
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
      626 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin/settings/update',
          ),
          1 => 
          array (
            0 => 'setting',
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
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin/settings/destroy',
          ),
          1 => 
          array (
            0 => 'setting',
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
      661 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin/sections/edit',
          ),
          1 => 
          array (
            0 => 'section',
          ),
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
      669 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin/sections/update',
          ),
          1 => 
          array (
            0 => 'section',
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
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin/sections/destroy',
          ),
          1 => 
          array (
            0 => 'section',
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
      689 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin/sections/copySection',
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
      721 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin/slides/edit',
          ),
          1 => 
          array (
            0 => 'slide',
          ),
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
      729 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin/slides/update',
          ),
          1 => 
          array (
            0 => 'slide',
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
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin/slides/destroy',
          ),
          1 => 
          array (
            0 => 'slide',
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
      764 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin/sub-menus/edit',
          ),
          1 => 
          array (
            0 => 'subMenu',
          ),
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
      772 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin/sub-menus/update',
          ),
          1 => 
          array (
            0 => 'subMenu',
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
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin/sub-menus/destroy',
          ),
          1 => 
          array (
            0 => 'subMenu',
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
      804 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin/roles/edit',
          ),
          1 => 
          array (
            0 => 'role',
          ),
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
      812 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin/roles/update',
          ),
          1 => 
          array (
            0 => 'role',
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
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin/roles/destroy',
          ),
          1 => 
          array (
            0 => 'role',
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
      846 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin/units/edit',
          ),
          1 => 
          array (
            0 => 'unit',
          ),
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
      854 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin/units/update',
          ),
          1 => 
          array (
            0 => 'unit',
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
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin/units/destroy',
          ),
          1 => 
          array (
            0 => 'unit',
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
      884 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin/users/edit',
          ),
          1 => 
          array (
            0 => 'user',
          ),
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
      892 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin/users/update',
          ),
          1 => 
          array (
            0 => 'user',
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
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin/users/destroy',
          ),
          1 => 
          array (
            0 => 'user',
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
      928 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin/questions/edit',
          ),
          1 => 
          array (
            0 => 'question',
          ),
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
      936 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin/questions/update',
          ),
          1 => 
          array (
            0 => 'question',
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
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin/questions/destroy',
          ),
          1 => 
          array (
            0 => 'question',
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
      972 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin/order-hds/show',
          ),
          1 => 
          array (
            0 => 'orderNo',
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
      996 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin/order-hds/edit',
          ),
          1 => 
          array (
            0 => 'orderHd',
          ),
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
      1004 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin/order-hds/update',
          ),
          1 => 
          array (
            0 => 'orderHd',
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
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin/order-hds/destroy',
          ),
          1 => 
          array (
            0 => 'orderHd',
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
      1044 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin/districts/edit',
          ),
          1 => 
          array (
            0 => 'district',
          ),
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
      1053 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin/districts/update',
          ),
          1 => 
          array (
            0 => 'district',
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
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin/districts/destroy',
          ),
          1 => 
          array (
            0 => 'district',
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
      1096 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin/drop-down-menus/edit',
          ),
          1 => 
          array (
            0 => 'dropDownMenu',
          ),
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
      1105 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin/drop-down-menus/update',
          ),
          1 => 
          array (
            0 => 'dropDownMenu',
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
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin/drop-down-menus/destroy',
          ),
          1 => 
          array (
            0 => 'dropDownMenu',
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
      1149 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin/intro-videos/edit',
          ),
          1 => 
          array (
            0 => 'introVideo',
          ),
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
      1158 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin/intro-videos/update',
          ),
          1 => 
          array (
            0 => 'introVideo',
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
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin/intro-videos/destroy',
          ),
          1 => 
          array (
            0 => 'introVideo',
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
      1187 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'impersonate',
          ),
          1 => 
          array (
            0 => 'user',
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
      1219 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin/menus/edit',
          ),
          1 => 
          array (
            0 => 'menu',
          ),
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
      1228 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin/menus/update',
          ),
          1 => 
          array (
            0 => 'menu',
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
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin/menus/destroy',
          ),
          1 => 
          array (
            0 => 'menu',
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
      1260 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin/zones/edit',
          ),
          1 => 
          array (
            0 => 'zone',
          ),
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
      1269 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin/zones/update',
          ),
          1 => 
          array (
            0 => 'zone',
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
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin/zones/destroy',
          ),
          1 => 
          array (
            0 => 'zone',
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
      1294 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::patnyoaagvdy62wy',
          ),
          1 => 
          array (
            0 => 'slug',
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
      1334 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.scripts',
          ),
          1 => 
          array (
            0 => 'script',
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
      1357 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.styles',
          ),
          1 => 
          array (
            0 => 'style',
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
      1381 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Ewz9UJP7z2ivXSS6',
          ),
          1 => 
          array (
            0 => 'slug',
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
      1419 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QetCbb1WfsIZbLuG',
          ),
          1 => 
          array (
            0 => 'slug',
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
      1446 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kStrLJxh1HuzC67X',
          ),
          1 => 
          array (
            0 => 'book_slug',
            1 => 'section_slug',
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
      1484 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'items.generated::YysVxzFVaBNhInX6',
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
      1516 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'items.generated::tvKOwEBBPd3c9nbd',
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
      1539 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'items.generated::ztk8Nwk7e6YSgeBi',
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
      1573 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'myorderss',
          ),
          1 => 
          array (
            0 => 'orderNo',
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
      1606 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DLLrjKtcdoEK7ps8',
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
      1639 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.reset',
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
      1678 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'testapplies.show',
          ),
          1 => 
          array (
            0 => 'testapply',
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
      1692 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'testapplies.edit',
          ),
          1 => 
          array (
            0 => 'testapply',
          ),
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
      1701 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'testapplies.update',
          ),
          1 => 
          array (
            0 => 'testapply',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
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
            '_route' => 'testapplies.destroy',
          ),
          1 => 
          array (
            0 => 'testapply',
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
      1719 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'testapplies.print',
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
      1735 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'testapplies.printOurSlip',
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
      1768 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'testapplies.checkUserCredentials',
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
      1784 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'testapplies.check_result',
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
      1823 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::envBAtod9SHEwch8',
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
      1848 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::N4xGNGdynREGFYep',
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
      1885 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::eFRUHYzn8M0Uy1il',
          ),
          1 => 
          array (
            0 => 'district_id',
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
      1910 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::i2ejetncbM1saodM',
          ),
          1 => 
          array (
            0 => 'slug',
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
    'brackets/admin-auth::admin/login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Brackets\\AdminAuth\\Http\\Controllers\\Auth\\LoginController@showLoginForm',
        'controller' => 'Brackets\\AdminAuth\\Http\\Controllers\\Auth\\LoginController@showLoginForm',
        'namespace' => 'Brackets\\AdminAuth\\Http\\Controllers\\Auth',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'brackets/admin-auth::admin/login',
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
    'generated::fvkBUUdY5xmhUxHT' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Brackets\\AdminAuth\\Http\\Controllers\\Auth\\LoginController@login',
        'controller' => 'Brackets\\AdminAuth\\Http\\Controllers\\Auth\\LoginController@login',
        'namespace' => 'Brackets\\AdminAuth\\Http\\Controllers\\Auth',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::fvkBUUdY5xmhUxHT',
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
    'brackets/admin-auth::admin/logout' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
        2 => 'POST',
        3 => 'PUT',
        4 => 'PATCH',
        5 => 'DELETE',
        6 => 'OPTIONS',
      ),
      'uri' => 'admin/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Brackets\\AdminAuth\\Http\\Controllers\\Auth\\LoginController@logout',
        'controller' => 'Brackets\\AdminAuth\\Http\\Controllers\\Auth\\LoginController@logout',
        'namespace' => 'Brackets\\AdminAuth\\Http\\Controllers\\Auth',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'brackets/admin-auth::admin/logout',
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
    'brackets/admin-auth::admin/password/showForgotForm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/password-reset',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Brackets\\AdminAuth\\Http\\Controllers\\Auth\\ForgotPasswordController@showLinkRequestForm',
        'controller' => 'Brackets\\AdminAuth\\Http\\Controllers\\Auth\\ForgotPasswordController@showLinkRequestForm',
        'namespace' => 'Brackets\\AdminAuth\\Http\\Controllers\\Auth',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'brackets/admin-auth::admin/password/showForgotForm',
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
    'generated::KqM7LalDHtXJNm6P' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/password-reset/send',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Brackets\\AdminAuth\\Http\\Controllers\\Auth\\ForgotPasswordController@sendResetLinkEmail',
        'controller' => 'Brackets\\AdminAuth\\Http\\Controllers\\Auth\\ForgotPasswordController@sendResetLinkEmail',
        'namespace' => 'Brackets\\AdminAuth\\Http\\Controllers\\Auth',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::KqM7LalDHtXJNm6P',
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
    'brackets/admin-auth::admin/password/showResetForm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/password-reset/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Brackets\\AdminAuth\\Http\\Controllers\\Auth\\ResetPasswordController@showResetForm',
        'controller' => 'Brackets\\AdminAuth\\Http\\Controllers\\Auth\\ResetPasswordController@showResetForm',
        'namespace' => 'Brackets\\AdminAuth\\Http\\Controllers\\Auth',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'brackets/admin-auth::admin/password/showResetForm',
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
    'generated::MygMhUZEhWaNorbx' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/password-reset/reset',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Brackets\\AdminAuth\\Http\\Controllers\\Auth\\ResetPasswordController@reset',
        'controller' => 'Brackets\\AdminAuth\\Http\\Controllers\\Auth\\ResetPasswordController@reset',
        'namespace' => 'Brackets\\AdminAuth\\Http\\Controllers\\Auth',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::MygMhUZEhWaNorbx',
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
    'brackets/admin-auth::admin/activation/activate' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/activation/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Brackets\\AdminAuth\\Http\\Controllers\\Auth\\ActivationController@activate',
        'controller' => 'Brackets\\AdminAuth\\Http\\Controllers\\Auth\\ActivationController@activate',
        'namespace' => 'Brackets\\AdminAuth\\Http\\Controllers\\Auth',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'brackets/admin-auth::admin/activation/activate',
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
    'brackets/admin-auth::admin' => 
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
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
        ),
        'uses' => 'Brackets\\AdminAuth\\Http\\Controllers\\AdminHomepageController@index',
        'controller' => 'Brackets\\AdminAuth\\Http\\Controllers\\AdminHomepageController@index',
        'namespace' => 'Brackets\\AdminAuth\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'brackets/admin-auth::admin',
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
    'brackets/admin-auth::admin/activation' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/activation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Brackets\\AdminAuth\\Http\\Controllers\\Auth\\ActivationEmailController@showLinkRequestForm',
        'controller' => 'Brackets\\AdminAuth\\Http\\Controllers\\Auth\\ActivationEmailController@showLinkRequestForm',
        'namespace' => 'Brackets\\AdminAuth\\Http\\Controllers\\Auth',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'brackets/admin-auth::admin/activation',
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
    'generated::OW61SS3NRZRnQfaX' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/activation/send',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Brackets\\AdminAuth\\Http\\Controllers\\Auth\\ActivationEmailController@sendActivationEmail',
        'controller' => 'Brackets\\AdminAuth\\Http\\Controllers\\Auth\\ActivationEmailController@sendActivationEmail',
        'namespace' => 'Brackets\\AdminAuth\\Http\\Controllers\\Auth',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::OW61SS3NRZRnQfaX',
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
    'login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@showLoginForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@showLoginForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'login',
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
    'register' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\RegisterController@showRegistrationForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\RegisterController@showRegistrationForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'register',
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
    'generated::EVkAqMTuiPG1R75N' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/translations',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
        ),
        'uses' => 'Brackets\\AdminTranslations\\Http\\Controllers\\Admin\\TranslationsController@index',
        'controller' => 'Brackets\\AdminTranslations\\Http\\Controllers\\Admin\\TranslationsController@index',
        'namespace' => 'Brackets\\AdminTranslations\\Http\\Controllers\\Admin',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::EVkAqMTuiPG1R75N',
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
    'admin/translations/export' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/translations/export',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
        ),
        'uses' => 'Brackets\\AdminTranslations\\Http\\Controllers\\Admin\\TranslationsController@export',
        'controller' => 'Brackets\\AdminTranslations\\Http\\Controllers\\Admin\\TranslationsController@export',
        'namespace' => 'Brackets\\AdminTranslations\\Http\\Controllers\\Admin',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin/translations/export',
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
    'admin/translations/import' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/translations/import',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
        ),
        'uses' => 'Brackets\\AdminTranslations\\Http\\Controllers\\Admin\\TranslationsController@import',
        'controller' => 'Brackets\\AdminTranslations\\Http\\Controllers\\Admin\\TranslationsController@import',
        'namespace' => 'Brackets\\AdminTranslations\\Http\\Controllers\\Admin',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin/translations/import',
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
    'admin/translations/import/conflicts' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/translations/import/conflicts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
        ),
        'uses' => 'Brackets\\AdminTranslations\\Http\\Controllers\\Admin\\TranslationsController@importResolvedConflicts',
        'controller' => 'Brackets\\AdminTranslations\\Http\\Controllers\\Admin\\TranslationsController@importResolvedConflicts',
        'namespace' => 'Brackets\\AdminTranslations\\Http\\Controllers\\Admin',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin/translations/import/conflicts',
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
    'generated::Iv2FfCvzz5WnYwIR' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/translations/rescan',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
        ),
        'uses' => 'Brackets\\AdminTranslations\\Http\\Controllers\\Admin\\RescanTranslationsController@rescan',
        'controller' => 'Brackets\\AdminTranslations\\Http\\Controllers\\Admin\\RescanTranslationsController@rescan',
        'namespace' => 'Brackets\\AdminTranslations\\Http\\Controllers\\Admin',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::Iv2FfCvzz5WnYwIR',
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
    'generated::zdJjTpI9TfMdCI1P' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/translations/{translation}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
        ),
        'uses' => 'Brackets\\AdminTranslations\\Http\\Controllers\\Admin\\TranslationsController@update',
        'controller' => 'Brackets\\AdminTranslations\\Http\\Controllers\\Admin\\TranslationsController@update',
        'namespace' => 'Brackets\\AdminTranslations\\Http\\Controllers\\Admin',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::zdJjTpI9TfMdCI1P',
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
    'brackets/admin-ui::wysiwyg-upload' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/wysiwyg-media',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'Brackets\\AdminUI\\Http\\Controllers\\WysiwygMediaUploadController@upload',
        'controller' => 'Brackets\\AdminUI\\Http\\Controllers\\WysiwygMediaUploadController@upload',
        'namespace' => 'Brackets\\AdminUI\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'brackets/admin-ui::wysiwyg-upload',
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
    'brackets/media::upload' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'upload',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
        ),
        'uses' => 'Brackets\\Media\\Http\\Controllers\\FileUploadController@upload',
        'controller' => 'Brackets\\Media\\Http\\Controllers\\FileUploadController@upload',
        'namespace' => 'Brackets\\Media\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'brackets/media::upload',
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
    'brackets/media::view' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'view',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
          2 => 'auth:admin',
        ),
        'uses' => 'Brackets\\Media\\Http\\Controllers\\FileViewController@view',
        'controller' => 'Brackets\\Media\\Http\\Controllers\\FileViewController@view',
        'namespace' => 'Brackets\\Media\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'brackets/media::view',
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
          0 => 'Facade\\Ignition\\Http\\Middleware\\IgnitionEnabled',
        ),
        'uses' => 'Facade\\Ignition\\Http\\Controllers\\HealthCheckController@__invoke',
        'controller' => 'Facade\\Ignition\\Http\\Controllers\\HealthCheckController',
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
          0 => 'Facade\\Ignition\\Http\\Middleware\\IgnitionEnabled',
          1 => 'Facade\\Ignition\\Http\\Middleware\\IgnitionConfigValueEnabled:enableRunnableSolutions',
        ),
        'uses' => 'Facade\\Ignition\\Http\\Controllers\\ExecuteSolutionController@__invoke',
        'controller' => 'Facade\\Ignition\\Http\\Controllers\\ExecuteSolutionController',
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
    'ignition.shareReport' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/share-report',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Facade\\Ignition\\Http\\Middleware\\IgnitionEnabled',
          1 => 'Facade\\Ignition\\Http\\Middleware\\IgnitionConfigValueEnabled:enableShareButton',
        ),
        'uses' => 'Facade\\Ignition\\Http\\Controllers\\ShareReportController@__invoke',
        'controller' => 'Facade\\Ignition\\Http\\Controllers\\ShareReportController',
        'as' => 'ignition.shareReport',
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
    'ignition.scripts' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_ignition/scripts/{script}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Facade\\Ignition\\Http\\Middleware\\IgnitionEnabled',
        ),
        'uses' => 'Facade\\Ignition\\Http\\Controllers\\ScriptController@__invoke',
        'controller' => 'Facade\\Ignition\\Http\\Controllers\\ScriptController',
        'as' => 'ignition.scripts',
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
    'ignition.styles' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_ignition/styles/{style}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Facade\\Ignition\\Http\\Middleware\\IgnitionEnabled',
        ),
        'uses' => 'Facade\\Ignition\\Http\\Controllers\\StyleController@__invoke',
        'controller' => 'Facade\\Ignition\\Http\\Controllers\\StyleController',
        'as' => 'ignition.styles',
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
    'generated::e8470t029Z5LM8ls' => 
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
        'as' => 'generated::e8470t029Z5LM8ls',
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
    'generated::8ns3sFVNh0T5aWuO' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:295:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:77:"function (\\Illuminate\\Http\\Request $request) {
    return $request->user();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000051fef9d900000000263d30f5";}";s:4:"hash";s:44:"rH5mgeOYnc//ww2PqN2HgspI7W2oVUC0QbXDKR/u/Mw=";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::8ns3sFVNh0T5aWuO',
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
    'generated::ve1l2BADSKnPujNw' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'clear-cache',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:416:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:197:"function() {
    $exitCode = \\Illuminate\\Support\\Facades\\Artisan::call(\'cache:clear\');
    \\App\\Http\\Controllers\\Aritsan::call(\'optimize:clear\');
    return \'<h1>Cache facade value cleared</h1>\';
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000051fef9df00000000263d30f5";}";s:4:"hash";s:44:"heAg2pcwi/VTuOng3f4D3WXSNan/bkca4sn+jdLz9AQ=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::ve1l2BADSKnPujNw',
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
    'generated::P1onWtwh0kH9HmhM' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'key',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:358:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:139:"function() {
    $exitCode = \\Illuminate\\Support\\Facades\\Artisan::call(\'key:generate\');
    return \'<h1>key:generate value cleared</h1>\';
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000051fef9dd00000000263d30f5";}";s:4:"hash";s:44:"llC6DMaGtY7ZUV4HOaLGqx4Qb2mIv4Sy0V/7cjUyX4A=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::P1onWtwh0kH9HmhM',
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
    'generated::iWu28lDXIo7cbglN' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'extension',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:499:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:280:"function() {
    
        if (function_exists(\'finfo_open\')) {
    echo "Fileinfo extension is installed and enabled.";
} else {
    echo "Fileinfo extension is not installed or enabled.";
}
 echo "<pre>";
      print_r(get_loaded_extensions());
      echo "<pre/>";
      exit;
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000051fef9d300000000263d30f5";}";s:4:"hash";s:44:"kihQxsiidihvVRWvynOSLROaHgX4NbJbp4WJ3kRg+FE=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::iWu28lDXIo7cbglN',
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
    'generated::zKjmOPl4z9E0RyHZ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'optimize',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:325:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:106:"function() {
    $exitCode = \\Artisan::call(\'optimize\');
    return \'<h1>Reoptimized class loader</h1>\';
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000051fef9d100000000263d30f5";}";s:4:"hash";s:44:"bPr/tBsXISt5yww9WBDqHeZxkp63CERBtuHPSE2YzXY=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::zKjmOPl4z9E0RyHZ',
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
    'generated::3sluWk5dpOoGEgmP' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'route-cache',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:316:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:98:"function() {
    $exitCode = \\Artisan::call(\'route:cache\');
    return \'<h1>Routes cached</h1>\';
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000051fef9d700000000263d30f5";}";s:4:"hash";s:44:"g9yPDm/B6rsplnrZSr56H95Ip8yFf0UDGLxKvRU7z/4=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::3sluWk5dpOoGEgmP',
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
    'generated::KWUbGNKvvN5XEBSC' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'route-clear',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:323:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:104:"function() {
    $exitCode = \\Artisan::call(\'route:clear\');
    return \'<h1>Route cache cleared</h1>\';
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000051fef9d500000000263d30f5";}";s:4:"hash";s:44:"yV1iqOVfx+z7DJ9RyRN1EGBKezjni4TfUpLoSB0Sfzw=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::KWUbGNKvvN5XEBSC',
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
    'generated::tzygoiYaWrtECRMS' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'view-clear',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:321:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:102:"function() {
    $exitCode = \\Artisan::call(\'view:clear\');
    return \'<h1>View cache cleared</h1>\';
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000051fefe2b00000000263d30f5";}";s:4:"hash";s:44:"r7dDUjQvvS0X4/GNy63p5xfy0fWlcndaG+CWa0Flz5A=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::tzygoiYaWrtECRMS',
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
    'generated::tq9bkNb2SuTahyZi' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'config-cache',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:325:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:106:"function() {
    $exitCode = \\Artisan::call(\'config:cache\');
    return \'<h1>Clear Config cleared</h1>\';
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000051fefe2900000000263d30f5";}";s:4:"hash";s:44:"bvjebKx5dO5+Q3MwVHpUZ9UYiz1HU+EbUg58eDF0PCA=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::tq9bkNb2SuTahyZi',
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
    'generated::M3KzZeIOKsLu5mcI' => 
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
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\PagesController@index',
        'controller' => 'App\\Http\\Controllers\\PagesController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::M3KzZeIOKsLu5mcI',
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
    'generated::pC54XacbW2w60pOS' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'books',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\PagesController@books',
        'controller' => 'App\\Http\\Controllers\\PagesController@books',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::pC54XacbW2w60pOS',
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
    'generated::pFmQCTRgIKNsrzcC' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'about-us',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\PagesController@aboutus',
        'controller' => 'App\\Http\\Controllers\\PagesController@aboutus',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::pFmQCTRgIKNsrzcC',
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
    'generated::cK3eYbdCgDNNoH4k' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'contact-us',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\PagesController@contactus',
        'controller' => 'App\\Http\\Controllers\\PagesController@contactus',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::cK3eYbdCgDNNoH4k',
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
    'test' => 
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
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\PagesController@test',
        'controller' => 'App\\Http\\Controllers\\PagesController@test',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'test',
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
    'generated::Ewz9UJP7z2ivXSS6' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'book/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\PagesController@book',
        'controller' => 'App\\Http\\Controllers\\PagesController@book',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::Ewz9UJP7z2ivXSS6',
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
    'generated::uNdibMs6tVgFaw7j' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'privacy-policy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => '\\Illuminate\\Routing\\ViewController@__invoke',
        'controller' => '\\Illuminate\\Routing\\ViewController',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::uNdibMs6tVgFaw7j',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'view' => 'front/pages/privacy_policy',
        'data' => 
        array (
        ),
        'status' => 200,
        'headers' => 
        array (
        ),
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
    'generated::eAxlB2tKow7vtUSi' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'terms-and-conditions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => '\\Illuminate\\Routing\\ViewController@__invoke',
        'controller' => '\\Illuminate\\Routing\\ViewController',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::eAxlB2tKow7vtUSi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'view' => 'front/pages/terms_conditions',
        'data' => 
        array (
        ),
        'status' => 200,
        'headers' => 
        array (
        ),
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
    'generated::TPX3q9zEJVuuLoYs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cart',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\PagesController@cart',
        'controller' => 'App\\Http\\Controllers\\PagesController@cart',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::TPX3q9zEJVuuLoYs',
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
    'generated::QetCbb1WfsIZbLuG' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'section-details/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\PagesController@sectiondetails',
        'controller' => 'App\\Http\\Controllers\\PagesController@sectiondetails',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::QetCbb1WfsIZbLuG',
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
    'generated::kStrLJxh1HuzC67X' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'section/{book_slug}/{section_slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\PagesController@section',
        'controller' => 'App\\Http\\Controllers\\PagesController@section',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::kStrLJxh1HuzC67X',
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
    'generated::28R1CIVsk7M2cD3Q' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'authors',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\PagesController@authors',
        'controller' => 'App\\Http\\Controllers\\PagesController@authors',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::28R1CIVsk7M2cD3Q',
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
    'generated::patnyoaagvdy62wy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'author/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\PagesController@author',
        'controller' => 'App\\Http\\Controllers\\PagesController@author',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::patnyoaagvdy62wy',
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
    'items.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
        2 => 'POST',
        3 => 'PUT',
        4 => 'PATCH',
        5 => 'DELETE',
        6 => 'OPTIONS',
      ),
      'uri' => 'items/add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\OrderItemsController@addtobasket',
        'controller' => 'App\\Http\\Controllers\\OrderItemsController@addtobasket',
        'as' => 'items.',
        'namespace' => NULL,
        'prefix' => '/items',
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
    'items.generated::fEufuGsFB8JbvLYO' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'items/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\OrderItemsController@updatetobasket',
        'controller' => 'App\\Http\\Controllers\\OrderItemsController@updatetobasket',
        'as' => 'items.generated::fEufuGsFB8JbvLYO',
        'namespace' => NULL,
        'prefix' => '/items',
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
    'items.generated::YysVxzFVaBNhInX6' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'items/remove/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\OrderItemsController@removefrombasket',
        'controller' => 'App\\Http\\Controllers\\OrderItemsController@removefrombasket',
        'as' => 'items.generated::YysVxzFVaBNhInX6',
        'namespace' => NULL,
        'prefix' => '/items',
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
    'items.generated::Bg2IL7bk6BElUuwg' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'items/quantityupdate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\OrderItemsController@quantityUpdate',
        'controller' => 'App\\Http\\Controllers\\OrderItemsController@quantityUpdate',
        'as' => 'items.generated::Bg2IL7bk6BElUuwg',
        'namespace' => NULL,
        'prefix' => '/items',
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
    'items.generated::tvKOwEBBPd3c9nbd' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'items/removeItemfrombasket/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\OrderItemsController@removeItemfrombasket',
        'controller' => 'App\\Http\\Controllers\\OrderItemsController@removeItemfrombasket',
        'as' => 'items.generated::tvKOwEBBPd3c9nbd',
        'namespace' => NULL,
        'prefix' => '/items',
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
    'items.generated::ztk8Nwk7e6YSgeBi' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'items/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\OrderItemsController@editorderitem',
        'controller' => 'App\\Http\\Controllers\\OrderItemsController@editorderitem',
        'as' => 'items.generated::ztk8Nwk7e6YSgeBi',
        'namespace' => NULL,
        'prefix' => '/items',
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
    'generated::Byz3Bk1L3gqIHP9S' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'login2',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@login2',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@login2',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::Byz3Bk1L3gqIHP9S',
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
    'generated::i1H2YnERlbIRCMTH' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'Register2',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@Register2',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@Register2',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::i1H2YnERlbIRCMTH',
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
    'generated::jtjz1EOazvQH8y87' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@logout',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@logout',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::jtjz1EOazvQH8y87',
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
    'generated::78th2YuBAbxULUjZ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'forgot-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@forgotpassword',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@forgotpassword',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::78th2YuBAbxULUjZ',
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
    'generated::lSvWGxk7waAZuYPB' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'commentpost',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\PagesController@commentpost',
        'controller' => 'App\\Http\\Controllers\\PagesController@commentpost',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::lSvWGxk7waAZuYPB',
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
    'dashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\UsersController@dashbaord',
        'controller' => 'App\\Http\\Controllers\\UsersController@dashbaord',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'dashboard',
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
    'myorders' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myorders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\UsersController@myorders',
        'controller' => 'App\\Http\\Controllers\\UsersController@myorders',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'myorders',
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
    'myaccount' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myaccount',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\UsersController@myaccount',
        'controller' => 'App\\Http\\Controllers\\UsersController@myaccount',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'myaccount',
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
    'update-password' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'change-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\UsersController@updatePassword',
        'controller' => 'App\\Http\\Controllers\\UsersController@updatePassword',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'update-password',
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
    'update-profile' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'update-profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\UsersController@updateProfile',
        'controller' => 'App\\Http\\Controllers\\UsersController@updateProfile',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'update-profile',
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
    'myorderss' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'order-details/{orderNo}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\UsersController@view',
        'controller' => 'App\\Http\\Controllers\\UsersController@view',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'myorderss',
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
    'generated::966d7jhbf9ZaHb1P' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'checkout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\OrderHdsController@checkout',
        'controller' => 'App\\Http\\Controllers\\OrderHdsController@checkout',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::966d7jhbf9ZaHb1P',
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
    'process' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'process',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\OrderHdsController@processOrder',
        'controller' => 'App\\Http\\Controllers\\OrderHdsController@processOrder',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'process',
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
    'admin/admin-users/index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin-users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminUsersController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminUsersController@index',
        'as' => 'admin/admin-users/index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/admin-users',
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
    'admin/admin-users/create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin-users/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminUsersController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminUsersController@create',
        'as' => 'admin/admin-users/create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/admin-users',
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
    'admin/admin-users/store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/admin-users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminUsersController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminUsersController@store',
        'as' => 'admin/admin-users/store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/admin-users',
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
    'admin/admin-users/impersonal-login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin-users/{adminUser}/impersonal-login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminUsersController@impersonalLogin',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminUsersController@impersonalLogin',
        'as' => 'admin/admin-users/impersonal-login',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/admin-users',
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
    'admin/admin-users/edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin-users/{adminUser}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminUsersController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminUsersController@edit',
        'as' => 'admin/admin-users/edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/admin-users',
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
    'admin/admin-users/update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/admin-users/{adminUser}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminUsersController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminUsersController@update',
        'as' => 'admin/admin-users/update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/admin-users',
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
    'admin/admin-users/destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/admin-users/{adminUser}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminUsersController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminUsersController@destroy',
        'as' => 'admin/admin-users/destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/admin-users',
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
    'admin/admin-users/resendActivationEmail' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin-users/{adminUser}/resend-activation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminUsersController@resendActivationEmail',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminUsersController@resendActivationEmail',
        'as' => 'admin/admin-users/resendActivationEmail',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/admin-users',
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
    'admin/edit-profile' => 
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
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ProfileController@editProfile',
        'controller' => 'App\\Http\\Controllers\\Admin\\ProfileController@editProfile',
        'as' => 'admin/edit-profile',
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
    'admin/update-profile' => 
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
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ProfileController@updateProfile',
        'controller' => 'App\\Http\\Controllers\\Admin\\ProfileController@updateProfile',
        'as' => 'admin/update-profile',
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
    'admin/edit-password' => 
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
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ProfileController@editPassword',
        'controller' => 'App\\Http\\Controllers\\Admin\\ProfileController@editPassword',
        'as' => 'admin/edit-password',
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
    'admin/update-password' => 
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
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ProfileController@updatePassword',
        'controller' => 'App\\Http\\Controllers\\Admin\\ProfileController@updatePassword',
        'as' => 'admin/update-password',
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
    'admin/categories/index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/categories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoriesController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoriesController@index',
        'as' => 'admin/categories/index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/categories',
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
    'admin/categories/create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/categories/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoriesController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoriesController@create',
        'as' => 'admin/categories/create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/categories',
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
    'admin/categories/store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/categories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoriesController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoriesController@store',
        'as' => 'admin/categories/store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/categories',
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
    'admin/categories/edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/categories/{category}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoriesController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoriesController@edit',
        'as' => 'admin/categories/edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/categories',
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
    'admin/categories/bulk-destroy' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/categories/bulk-destroy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoriesController@bulkDestroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoriesController@bulkDestroy',
        'as' => 'admin/categories/bulk-destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/categories',
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
    'admin/categories/update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/categories/{category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoriesController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoriesController@update',
        'as' => 'admin/categories/update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/categories',
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
    'admin/categories/destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/categories/{category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoriesController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoriesController@destroy',
        'as' => 'admin/categories/destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/categories',
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
    'admin/books/index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/books',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BooksController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\BooksController@index',
        'as' => 'admin/books/index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/books',
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
    'admin/books/create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/books/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BooksController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\BooksController@create',
        'as' => 'admin/books/create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/books',
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
    'admin/books/store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/books',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BooksController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\BooksController@store',
        'as' => 'admin/books/store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/books',
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
    'admin/books/edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/books/{book}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BooksController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\BooksController@edit',
        'as' => 'admin/books/edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/books',
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
    'admin/books/bulk-destroy' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/books/bulk-destroy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BooksController@bulkDestroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\BooksController@bulkDestroy',
        'as' => 'admin/books/bulk-destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/books',
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
    'admin/books/update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/books/{book}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BooksController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\BooksController@update',
        'as' => 'admin/books/update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/books',
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
    'admin/books/destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/books/{book}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BooksController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\BooksController@destroy',
        'as' => 'admin/books/destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/books',
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
    'admin/settings/index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SettingsController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\SettingsController@index',
        'as' => 'admin/settings/index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/settings',
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
    'admin/settings/create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SettingsController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\SettingsController@create',
        'as' => 'admin/settings/create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/settings',
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
    'admin/settings/store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SettingsController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\SettingsController@store',
        'as' => 'admin/settings/store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/settings',
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
    'admin/settings/edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/{setting}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SettingsController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\SettingsController@edit',
        'as' => 'admin/settings/edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/settings',
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
    'admin/settings/bulk-destroy' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/bulk-destroy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SettingsController@bulkDestroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\SettingsController@bulkDestroy',
        'as' => 'admin/settings/bulk-destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/settings',
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
    'admin/settings/update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/{setting}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SettingsController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\SettingsController@update',
        'as' => 'admin/settings/update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/settings',
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
    'admin/settings/destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/settings/{setting}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SettingsController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\SettingsController@destroy',
        'as' => 'admin/settings/destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/settings',
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
    'admin/authors/index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/authors',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AuthorsController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\AuthorsController@index',
        'as' => 'admin/authors/index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/authors',
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
    'admin/authors/create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/authors/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AuthorsController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\AuthorsController@create',
        'as' => 'admin/authors/create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/authors',
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
    'admin/authors/store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/authors',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AuthorsController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\AuthorsController@store',
        'as' => 'admin/authors/store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/authors',
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
    'admin/authors/edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/authors/{author}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AuthorsController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\AuthorsController@edit',
        'as' => 'admin/authors/edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/authors',
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
    'admin/authors/bulk-destroy' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/authors/bulk-destroy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AuthorsController@bulkDestroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\AuthorsController@bulkDestroy',
        'as' => 'admin/authors/bulk-destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/authors',
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
    'admin/authors/update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/authors/{author}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AuthorsController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\AuthorsController@update',
        'as' => 'admin/authors/update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/authors',
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
    'admin/authors/destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/authors/{author}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AuthorsController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\AuthorsController@destroy',
        'as' => 'admin/authors/destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/authors',
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
    'admin/roles/index' => 
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
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\RolesController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\RolesController@index',
        'as' => 'admin/roles/index',
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
    'admin/roles/create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/roles/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\RolesController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\RolesController@create',
        'as' => 'admin/roles/create',
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
    'admin/roles/store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/roles',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\RolesController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\RolesController@store',
        'as' => 'admin/roles/store',
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
    'admin/roles/edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/roles/{role}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\RolesController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\RolesController@edit',
        'as' => 'admin/roles/edit',
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
    'admin/roles/bulk-destroy' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/roles/bulk-destroy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\RolesController@bulkDestroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\RolesController@bulkDestroy',
        'as' => 'admin/roles/bulk-destroy',
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
    'admin/roles/update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/roles/{role}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\RolesController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\RolesController@update',
        'as' => 'admin/roles/update',
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
    'admin/roles/destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/roles/{role}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\RolesController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\RolesController@destroy',
        'as' => 'admin/roles/destroy',
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
    'admin/units/index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/units',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UnitsController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\UnitsController@index',
        'as' => 'admin/units/index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/units',
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
    'admin/units/create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/units/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UnitsController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\UnitsController@create',
        'as' => 'admin/units/create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/units',
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
    'admin/units/store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/units',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UnitsController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\UnitsController@store',
        'as' => 'admin/units/store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/units',
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
    'admin/units/edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/units/{unit}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UnitsController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\UnitsController@edit',
        'as' => 'admin/units/edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/units',
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
    'admin/units/bulk-destroy' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/units/bulk-destroy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UnitsController@bulkDestroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\UnitsController@bulkDestroy',
        'as' => 'admin/units/bulk-destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/units',
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
    'admin/units/update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/units/{unit}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UnitsController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\UnitsController@update',
        'as' => 'admin/units/update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/units',
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
    'admin/units/destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/units/{unit}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UnitsController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\UnitsController@destroy',
        'as' => 'admin/units/destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/units',
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
    'generated::YMaQMVj76V1KHac2' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'copysection',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SectionsController@copySection',
        'controller' => 'App\\Http\\Controllers\\Admin\\SectionsController@copySection',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::YMaQMVj76V1KHac2',
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
    'generated::xsEKoSLWt5K5WHNh' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'fetchsections',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SectionsController@fetchsections',
        'controller' => 'App\\Http\\Controllers\\Admin\\SectionsController@fetchsections',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::xsEKoSLWt5K5WHNh',
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
    'generated::f0UrZAdUnlITRzfr' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'copyUnit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SectionsController@copyUnitt',
        'controller' => 'App\\Http\\Controllers\\Admin\\SectionsController@copyUnitt',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::f0UrZAdUnlITRzfr',
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
    'generated::pMWh47tGoZ7Tof42' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'create-quiz',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\QuizController@createQuiz',
        'controller' => 'App\\Http\\Controllers\\Admin\\QuizController@createQuiz',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::pMWh47tGoZ7Tof42',
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
    'generated::ax8u7VskFFxRLa2X' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'get-quiz',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\QuizController@get_quiz',
        'controller' => 'App\\Http\\Controllers\\Admin\\QuizController@get_quiz',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::ax8u7VskFFxRLa2X',
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
    'generated::MHcTxX4L1Rg0KsIf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'switchQuestion',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\QuizController@switchQuestion',
        'controller' => 'App\\Http\\Controllers\\Admin\\QuizController@switchQuestion',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::MHcTxX4L1Rg0KsIf',
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
    'generated::Mjd6g71D90V56MpF' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'quiz-result',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\QuizController@quiz_result',
        'controller' => 'App\\Http\\Controllers\\Admin\\QuizController@quiz_result',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::Mjd6g71D90V56MpF',
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
    'generated::DLLrjKtcdoEK7ps8' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'result/details/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\QuizController@resultDetails',
        'controller' => 'App\\Http\\Controllers\\Admin\\QuizController@resultDetails',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::DLLrjKtcdoEK7ps8',
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
    'generated::waBAGIWlFeUpUDcz' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'wrong-questions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\QuizController@wrong_questions',
        'controller' => 'App\\Http\\Controllers\\Admin\\QuizController@wrong_questions',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::waBAGIWlFeUpUDcz',
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
    'generated::dSoQSDfwdlsno8eg' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'get-mcqs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\QuizController@get_mcqs',
        'controller' => 'App\\Http\\Controllers\\Admin\\QuizController@get_mcqs',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::dSoQSDfwdlsno8eg',
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
    'admin/sections/index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/sections',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SectionsController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\SectionsController@index',
        'as' => 'admin/sections/index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/sections',
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
    'admin/sections/create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/sections/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SectionsController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\SectionsController@create',
        'as' => 'admin/sections/create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/sections',
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
    'admin/sections/store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/sections',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SectionsController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\SectionsController@store',
        'as' => 'admin/sections/store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/sections',
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
    'admin/sections/edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/sections/{section}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SectionsController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\SectionsController@edit',
        'as' => 'admin/sections/edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/sections',
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
    'admin/sections/bulk-destroy' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/sections/bulk-destroy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SectionsController@bulkDestroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\SectionsController@bulkDestroy',
        'as' => 'admin/sections/bulk-destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/sections',
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
    'admin/sections/update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/sections/{section}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SectionsController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\SectionsController@update',
        'as' => 'admin/sections/update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/sections',
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
    'admin/sections/destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/sections/{section}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SectionsController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\SectionsController@destroy',
        'as' => 'admin/sections/destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/sections',
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
    'admin/sections/copySection' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/sections/copySection',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:304:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:86:"function (\\Illuminate\\Http\\Request $r) {
                return "sasdf";
            }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000051fefe5a00000000263d30f5";}";s:4:"hash";s:44:"DjL4u15fQRvdOlTAL1k2n3ffiaccbha2IkD4Rk51S5Q=";}}',
        'as' => 'admin/sections/copySection',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/sections',
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
    'admin/questions/index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/questions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\QuestionsController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\QuestionsController@index',
        'as' => 'admin/questions/index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/questions',
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
    'admin/questions/create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/questions/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\QuestionsController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\QuestionsController@create',
        'as' => 'admin/questions/create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/questions',
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
    'admin/questions/store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/questions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\QuestionsController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\QuestionsController@store',
        'as' => 'admin/questions/store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/questions',
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
    'admin/questions/edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/questions/{question}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\QuestionsController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\QuestionsController@edit',
        'as' => 'admin/questions/edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/questions',
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
    'admin/questions/bulk-destroy' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/questions/bulk-destroy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\QuestionsController@bulkDestroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\QuestionsController@bulkDestroy',
        'as' => 'admin/questions/bulk-destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/questions',
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
    'admin/questions/update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/questions/{question}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\QuestionsController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\QuestionsController@update',
        'as' => 'admin/questions/update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/questions',
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
    'admin/questions/destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/questions/{question}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\QuestionsController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\QuestionsController@destroy',
        'as' => 'admin/questions/destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/questions',
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
    'admin/users/index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UsersController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\UsersController@index',
        'as' => 'admin/users/index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/users',
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
    'admin/users/create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/users/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UsersController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\UsersController@create',
        'as' => 'admin/users/create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/users',
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
    'admin/users/store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UsersController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\UsersController@store',
        'as' => 'admin/users/store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/users',
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
    'admin/users/edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/users/{user}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UsersController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\UsersController@edit',
        'as' => 'admin/users/edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/users',
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
    'admin/users/bulk-destroy' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/users/bulk-destroy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UsersController@bulkDestroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\UsersController@bulkDestroy',
        'as' => 'admin/users/bulk-destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/users',
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
    'admin/users/update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/users/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UsersController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\UsersController@update',
        'as' => 'admin/users/update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/users',
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
    'admin/users/destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/users/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UsersController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\UsersController@destroy',
        'as' => 'admin/users/destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/users',
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
    'generated::si9D46KlOXFjquWe' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@login',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@login',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::si9D46KlOXFjquWe',
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
    'logout' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@logout',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@logout',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'logout',
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
    'generated::Eg0BlNgaAe1e7OSQ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\RegisterController@register',
        'controller' => 'App\\Http\\Controllers\\Auth\\RegisterController@register',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::Eg0BlNgaAe1e7OSQ',
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
    'password.request' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'password/reset',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@showLinkRequestForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@showLinkRequestForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.request',
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
    'password.email' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'password/email',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@sendResetLinkEmail',
        'controller' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@sendResetLinkEmail',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.email',
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
    'password.reset' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'password/reset/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@showResetForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@showResetForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.reset',
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
    'password.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'password/reset',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@reset',
        'controller' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@reset',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.update',
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
    'password.confirm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'password/confirm',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ConfirmPasswordController@showConfirmForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ConfirmPasswordController@showConfirmForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.confirm',
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
    'generated::9nHl5LgaM1ZbhLbo' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'password/confirm',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ConfirmPasswordController@confirm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ConfirmPasswordController@confirm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::9nHl5LgaM1ZbhLbo',
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
      'uri' => 'home',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@index',
        'controller' => 'App\\Http\\Controllers\\HomeController@index',
        'namespace' => NULL,
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
    'admin/comments/index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/comments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CommentsController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\CommentsController@index',
        'as' => 'admin/comments/index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/comments',
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
    'admin/comments/create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/comments/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CommentsController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\CommentsController@create',
        'as' => 'admin/comments/create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/comments',
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
    'admin/comments/store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/comments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CommentsController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\CommentsController@store',
        'as' => 'admin/comments/store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/comments',
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
    'admin/comments/edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/comments/{comment}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CommentsController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\CommentsController@edit',
        'as' => 'admin/comments/edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/comments',
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
    'admin/comments/bulk-destroy' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/comments/bulk-destroy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CommentsController@bulkDestroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\CommentsController@bulkDestroy',
        'as' => 'admin/comments/bulk-destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/comments',
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
    'admin/comments/update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/comments/{comment}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CommentsController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\CommentsController@update',
        'as' => 'admin/comments/update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/comments',
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
    'admin/comments/destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/comments/{comment}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CommentsController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\CommentsController@destroy',
        'as' => 'admin/comments/destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/comments',
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
    'admin/order-hds/index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/order-hds',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\OrderHdsController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\OrderHdsController@index',
        'as' => 'admin/order-hds/index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/order-hds',
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
    'admin/order-hds/create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/order-hds/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\OrderHdsController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\OrderHdsController@create',
        'as' => 'admin/order-hds/create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/order-hds',
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
    'admin/order-hds/show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/order-hds/show/{orderNo}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\OrderHdsController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\OrderHdsController@show',
        'as' => 'admin/order-hds/show',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/order-hds',
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
    'admin/order-hds/store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/order-hds',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\OrderHdsController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\OrderHdsController@store',
        'as' => 'admin/order-hds/store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/order-hds',
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
    'admin/order-hds/edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/order-hds/{orderHd}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\OrderHdsController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\OrderHdsController@edit',
        'as' => 'admin/order-hds/edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/order-hds',
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
    'admin/order-hds/bulk-destroy' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/order-hds/bulk-destroy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\OrderHdsController@bulkDestroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\OrderHdsController@bulkDestroy',
        'as' => 'admin/order-hds/bulk-destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/order-hds',
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
    'admin/order-hds/update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/order-hds/{orderHd}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\OrderHdsController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\OrderHdsController@update',
        'as' => 'admin/order-hds/update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/order-hds',
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
    'admin/order-hds/destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/order-hds/{orderHd}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\OrderHdsController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\OrderHdsController@destroy',
        'as' => 'admin/order-hds/destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/order-hds',
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
    'admin/slides/index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/slides',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SlidesController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\SlidesController@index',
        'as' => 'admin/slides/index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/slides',
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
    'admin/slides/create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/slides/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SlidesController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\SlidesController@create',
        'as' => 'admin/slides/create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/slides',
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
    'admin/slides/store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/slides',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SlidesController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\SlidesController@store',
        'as' => 'admin/slides/store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/slides',
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
    'admin/slides/edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/slides/{slide}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SlidesController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\SlidesController@edit',
        'as' => 'admin/slides/edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/slides',
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
    'admin/slides/bulk-destroy' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/slides/bulk-destroy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SlidesController@bulkDestroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\SlidesController@bulkDestroy',
        'as' => 'admin/slides/bulk-destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/slides',
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
    'admin/slides/update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/slides/{slide}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SlidesController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\SlidesController@update',
        'as' => 'admin/slides/update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/slides',
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
    'admin/slides/destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/slides/{slide}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SlidesController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\SlidesController@destroy',
        'as' => 'admin/slides/destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/slides',
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
    'admin/order-dts/book_reports' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/reports/book-reports',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportsController@book_reports',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportsController@book_reports',
        'as' => 'admin/order-dts/book_reports',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/reports',
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
    'admin/order-dts/payment_reports' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/reports/payment-reports',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportsController@payment_reports',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportsController@payment_reports',
        'as' => 'admin/order-dts/payment_reports',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/reports',
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
    'admin/order-dts/statistics' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/reports/statistics',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportsController@statistics',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportsController@statistics',
        'as' => 'admin/order-dts/statistics',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/reports',
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
    'admin/tests/index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/tests',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\TestsController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\TestsController@index',
        'as' => 'admin/tests/index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/tests',
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
    'admin/tests/create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/tests/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\TestsController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\TestsController@create',
        'as' => 'admin/tests/create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/tests',
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
    'admin/tests/store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/tests',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\TestsController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\TestsController@store',
        'as' => 'admin/tests/store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/tests',
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
    'admin/tests/edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/tests/{test}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\TestsController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\TestsController@edit',
        'as' => 'admin/tests/edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/tests',
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
    'admin/tests/bulk-destroy' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/tests/bulk-destroy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\TestsController@bulkDestroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\TestsController@bulkDestroy',
        'as' => 'admin/tests/bulk-destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/tests',
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
    'admin/tests/update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/tests/{test}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\TestsController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\TestsController@update',
        'as' => 'admin/tests/update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/tests',
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
    'admin/tests/destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/tests/{test}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\TestsController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\TestsController@destroy',
        'as' => 'admin/tests/destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/tests',
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
    'paymentDetails' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/paymentDetails',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\TestsController@viewapplication',
        'controller' => 'App\\Http\\Controllers\\Admin\\TestsController@viewapplication',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'paymentDetails',
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
    'admin.test.application.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/test/application/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\TestsController@editapplication',
        'controller' => 'App\\Http\\Controllers\\Admin\\TestsController@editapplication',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.test.application.edit',
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
    'admin.test.application.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/test/application/destroy/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\TestsController@destroyapplication',
        'controller' => 'App\\Http\\Controllers\\Admin\\TestsController@destroyapplication',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.test.application.destroy',
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
    'admin.test.application.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/test/application/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\TestsController@updateapplication',
        'controller' => 'App\\Http\\Controllers\\Admin\\TestsController@updateapplication',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.test.application.update',
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
    'testapplies.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'testapplies',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'testapplies.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\TestApplyController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\TestApplyController@index',
        'namespace' => NULL,
        'prefix' => '',
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
    'testapplies.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'testapplies/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'testapplies.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\TestApplyController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\TestApplyController@create',
        'namespace' => NULL,
        'prefix' => '',
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
    'testapplies.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'testapplies',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'testapplies.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\TestApplyController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\TestApplyController@store',
        'namespace' => NULL,
        'prefix' => '',
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
    'testapplies.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'testapplies/{testapply}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'testapplies.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\TestApplyController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\TestApplyController@show',
        'namespace' => NULL,
        'prefix' => '',
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
    'testapplies.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'testapplies/{testapply}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'testapplies.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\TestApplyController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\TestApplyController@edit',
        'namespace' => NULL,
        'prefix' => '',
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
    'testapplies.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'testapplies/{testapply}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'testapplies.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\TestApplyController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\TestApplyController@update',
        'namespace' => NULL,
        'prefix' => '',
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
    'testapplies.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'testapplies/{testapply}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'testapplies.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\TestApplyController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\TestApplyController@destroy',
        'namespace' => NULL,
        'prefix' => '',
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
    'testapplies.print' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'testapplies/print',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\TestApplyController@print',
        'controller' => 'App\\Http\\Controllers\\Admin\\TestApplyController@print',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'testapplies.print',
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
    'testapplies.printOurSlip' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'testapplies/printOurSlip',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\TestApplyController@printOurSlip',
        'controller' => 'App\\Http\\Controllers\\Admin\\TestApplyController@printOurSlip',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'testapplies.printOurSlip',
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
    'testapplies.checkUserCredentials' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'testapplies/checkUserCredentials',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\TestApplyController@checkUserCredentials',
        'controller' => 'App\\Http\\Controllers\\Admin\\TestApplyController@checkUserCredentials',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'testapplies.checkUserCredentials',
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
    'test-take.submit' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'test-take',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\TestApplyController@test_take',
        'controller' => 'App\\Http\\Controllers\\Admin\\TestApplyController@test_take',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'test-take.submit',
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
    'generated::K4UtGIzqV3OmGzzx' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'get-question',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\TestQuestionController@get_question',
        'controller' => 'App\\Http\\Controllers\\Admin\\TestQuestionController@get_question',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::K4UtGIzqV3OmGzzx',
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
    'generated::Dz48BXKoBfYbW9SI' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'switchTestQuestion',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\TestQuestionController@switchQuestion',
        'controller' => 'App\\Http\\Controllers\\Admin\\TestQuestionController@switchQuestion',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::Dz48BXKoBfYbW9SI',
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
    'test-result.submit' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'test-result',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\TestQuestionController@test_result',
        'controller' => 'App\\Http\\Controllers\\Admin\\TestQuestionController@test_result',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'test-result.submit',
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
    'generated::envBAtod9SHEwch8' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'test-result/details/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\TestQuestionController@resultDetails',
        'controller' => 'App\\Http\\Controllers\\Admin\\TestQuestionController@resultDetails',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::envBAtod9SHEwch8',
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
    'generated::N4xGNGdynREGFYep' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'test-result/overall/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\TestQuestionController@test_result_overall',
        'controller' => 'App\\Http\\Controllers\\Admin\\TestQuestionController@test_result_overall',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::N4xGNGdynREGFYep',
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
    'testapplies.check_result' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'testapplies/check_result',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\TestQuestionController@check_result',
        'controller' => 'App\\Http\\Controllers\\Admin\\TestQuestionController@check_result',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'testapplies.check_result',
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
    'result_filter' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'result_filter',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\TestQuestionController@result_filter',
        'controller' => 'App\\Http\\Controllers\\Admin\\TestQuestionController@result_filter',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'result_filter',
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
    'generated::qGIS5LMWjQQxAOa8' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'wrong-questions-test',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\TestQuestionController@wrong_questions',
        'controller' => 'App\\Http\\Controllers\\Admin\\TestQuestionController@wrong_questions',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::qGIS5LMWjQQxAOa8',
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
    'generated::eFRUHYzn8M0Uy1il' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'fetch-districts/{district_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DistrictsController@fetchDistricts',
        'controller' => 'App\\Http\\Controllers\\Admin\\DistrictsController@fetchDistricts',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::eFRUHYzn8M0Uy1il',
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
    'admin/provinces/index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/provinces',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ProvincesController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\ProvincesController@index',
        'as' => 'admin/provinces/index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/provinces',
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
    'admin/provinces/create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/provinces/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ProvincesController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\ProvincesController@create',
        'as' => 'admin/provinces/create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/provinces',
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
    'admin/provinces/store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/provinces',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ProvincesController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\ProvincesController@store',
        'as' => 'admin/provinces/store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/provinces',
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
    'admin/provinces/edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/provinces/{province}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ProvincesController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\ProvincesController@edit',
        'as' => 'admin/provinces/edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/provinces',
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
    'admin/provinces/bulk-destroy' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/provinces/bulk-destroy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ProvincesController@bulkDestroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\ProvincesController@bulkDestroy',
        'as' => 'admin/provinces/bulk-destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/provinces',
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
    'admin/provinces/update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/provinces/{province}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ProvincesController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\ProvincesController@update',
        'as' => 'admin/provinces/update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/provinces',
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
    'admin/provinces/destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/provinces/{province}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ProvincesController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\ProvincesController@destroy',
        'as' => 'admin/provinces/destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/provinces',
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
    'admin/districts/index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/districts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DistrictsController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\DistrictsController@index',
        'as' => 'admin/districts/index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/districts',
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
    'admin/districts/create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/districts/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DistrictsController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\DistrictsController@create',
        'as' => 'admin/districts/create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/districts',
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
    'admin/districts/store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/districts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DistrictsController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\DistrictsController@store',
        'as' => 'admin/districts/store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/districts',
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
    'admin/districts/edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/districts/{district}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DistrictsController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\DistrictsController@edit',
        'as' => 'admin/districts/edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/districts',
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
    'admin/districts/bulk-destroy' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/districts/bulk-destroy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DistrictsController@bulkDestroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\DistrictsController@bulkDestroy',
        'as' => 'admin/districts/bulk-destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/districts',
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
    'admin/districts/update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/districts/{district}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DistrictsController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\DistrictsController@update',
        'as' => 'admin/districts/update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/districts',
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
    'admin/districts/destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/districts/{district}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DistrictsController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\DistrictsController@destroy',
        'as' => 'admin/districts/destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/districts',
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
    'admin/intro-videos/index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/intro-videos',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\IntroVideosController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\IntroVideosController@index',
        'as' => 'admin/intro-videos/index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/intro-videos',
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
    'admin/intro-videos/create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/intro-videos/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\IntroVideosController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\IntroVideosController@create',
        'as' => 'admin/intro-videos/create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/intro-videos',
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
    'admin/intro-videos/store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/intro-videos',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\IntroVideosController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\IntroVideosController@store',
        'as' => 'admin/intro-videos/store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/intro-videos',
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
    'admin/intro-videos/edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/intro-videos/{introVideo}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\IntroVideosController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\IntroVideosController@edit',
        'as' => 'admin/intro-videos/edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/intro-videos',
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
    'admin/intro-videos/bulk-destroy' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/intro-videos/bulk-destroy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\IntroVideosController@bulkDestroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\IntroVideosController@bulkDestroy',
        'as' => 'admin/intro-videos/bulk-destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/intro-videos',
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
    'admin/intro-videos/update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/intro-videos/{introVideo}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\IntroVideosController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\IntroVideosController@update',
        'as' => 'admin/intro-videos/update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/intro-videos',
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
    'admin/intro-videos/destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/intro-videos/{introVideo}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\IntroVideosController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\IntroVideosController@destroy',
        'as' => 'admin/intro-videos/destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/intro-videos',
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
    'generated::i2ejetncbM1saodM' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'videos/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\PagesController@videos',
        'controller' => 'App\\Http\\Controllers\\PagesController@videos',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::i2ejetncbM1saodM',
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
    'admin/menus/index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/menus',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MenusController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\MenusController@index',
        'as' => 'admin/menus/index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/menus',
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
    'admin/menus/create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/menus/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MenusController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\MenusController@create',
        'as' => 'admin/menus/create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/menus',
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
    'admin/menus/store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/menus',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MenusController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\MenusController@store',
        'as' => 'admin/menus/store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/menus',
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
    'admin/menus/edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/menus/{menu}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MenusController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\MenusController@edit',
        'as' => 'admin/menus/edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/menus',
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
    'admin/menus/bulk-destroy' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/menus/bulk-destroy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MenusController@bulkDestroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\MenusController@bulkDestroy',
        'as' => 'admin/menus/bulk-destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/menus',
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
    'admin/menus/update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/menus/{menu}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MenusController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\MenusController@update',
        'as' => 'admin/menus/update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/menus',
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
    'admin/menus/destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/menus/{menu}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MenusController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\MenusController@destroy',
        'as' => 'admin/menus/destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/menus',
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
    'admin/sub-menus/index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/sub-menus',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SubMenusController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\SubMenusController@index',
        'as' => 'admin/sub-menus/index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/sub-menus',
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
    'admin/sub-menus/create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/sub-menus/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SubMenusController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\SubMenusController@create',
        'as' => 'admin/sub-menus/create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/sub-menus',
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
    'admin/sub-menus/store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/sub-menus',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SubMenusController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\SubMenusController@store',
        'as' => 'admin/sub-menus/store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/sub-menus',
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
    'admin/sub-menus/edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/sub-menus/{subMenu}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SubMenusController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\SubMenusController@edit',
        'as' => 'admin/sub-menus/edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/sub-menus',
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
    'admin/sub-menus/bulk-destroy' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/sub-menus/bulk-destroy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SubMenusController@bulkDestroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\SubMenusController@bulkDestroy',
        'as' => 'admin/sub-menus/bulk-destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/sub-menus',
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
    'admin/sub-menus/update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/sub-menus/{subMenu}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SubMenusController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\SubMenusController@update',
        'as' => 'admin/sub-menus/update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/sub-menus',
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
    'admin/sub-menus/destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/sub-menus/{subMenu}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SubMenusController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\SubMenusController@destroy',
        'as' => 'admin/sub-menus/destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/sub-menus',
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
    'admin/drop-down-menus/index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/drop-down-menus',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DropDownMenusController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\DropDownMenusController@index',
        'as' => 'admin/drop-down-menus/index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/drop-down-menus',
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
    'admin/drop-down-menus/create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/drop-down-menus/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DropDownMenusController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\DropDownMenusController@create',
        'as' => 'admin/drop-down-menus/create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/drop-down-menus',
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
    'admin/drop-down-menus/store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/drop-down-menus',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DropDownMenusController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\DropDownMenusController@store',
        'as' => 'admin/drop-down-menus/store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/drop-down-menus',
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
    'admin/drop-down-menus/edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/drop-down-menus/{dropDownMenu}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DropDownMenusController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\DropDownMenusController@edit',
        'as' => 'admin/drop-down-menus/edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/drop-down-menus',
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
    'admin/drop-down-menus/bulk-destroy' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/drop-down-menus/bulk-destroy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DropDownMenusController@bulkDestroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\DropDownMenusController@bulkDestroy',
        'as' => 'admin/drop-down-menus/bulk-destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/drop-down-menus',
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
    'admin/drop-down-menus/update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/drop-down-menus/{dropDownMenu}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DropDownMenusController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\DropDownMenusController@update',
        'as' => 'admin/drop-down-menus/update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/drop-down-menus',
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
    'admin/drop-down-menus/destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/drop-down-menus/{dropDownMenu}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DropDownMenusController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\DropDownMenusController@destroy',
        'as' => 'admin/drop-down-menus/destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/drop-down-menus',
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
    'admin/zones/index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/zones',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ZonesController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\ZonesController@index',
        'as' => 'admin/zones/index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/zones',
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
    'admin/zones/create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/zones/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ZonesController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\ZonesController@create',
        'as' => 'admin/zones/create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/zones',
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
    'admin/zones/store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/zones',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ZonesController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\ZonesController@store',
        'as' => 'admin/zones/store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/zones',
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
    'admin/zones/edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/zones/{zone}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ZonesController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\ZonesController@edit',
        'as' => 'admin/zones/edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/zones',
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
    'admin/zones/bulk-destroy' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/zones/bulk-destroy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ZonesController@bulkDestroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\ZonesController@bulkDestroy',
        'as' => 'admin/zones/bulk-destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/zones',
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
    'admin/zones/update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/zones/{zone}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ZonesController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\ZonesController@update',
        'as' => 'admin/zones/update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/zones',
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
    'admin/zones/destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/zones/{zone}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ZonesController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\ZonesController@destroy',
        'as' => 'admin/zones/destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'admin/zones',
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
    'impersonate' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/impersonate/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ImpersonateController@impersonate',
        'controller' => 'App\\Http\\Controllers\\Admin\\ImpersonateController@impersonate',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'impersonate',
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
    'stop-impersonating' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'stop-impersonating',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ImpersonateController@stopImpersonating',
        'controller' => 'App\\Http\\Controllers\\Admin\\ImpersonateController@stopImpersonating',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'stop-impersonating',
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
