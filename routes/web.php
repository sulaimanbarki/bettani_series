<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\ImpersonateController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Clear Cache facade value:
Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    Aritsan::call('optimize:clear');
    return '<h1>Cache facade value cleared</h1>';
});

Route::get('/key', function() {
    $exitCode = Artisan::call('key:generate');
    return '<h1>key:generate value cleared</h1>';
});


Route::get('/extension', function() {
    
        if (function_exists('finfo_open')) {
    echo "Fileinfo extension is installed and enabled.";
} else {
    echo "Fileinfo extension is not installed or enabled.";
}
 echo "<pre>";
      print_r(get_loaded_extensions());
      echo "<pre/>";
      exit;
});
//Reoptimized class loader:
Route::get('/optimize', function() {
    $exitCode = \Artisan::call('optimize');
    return '<h1>Reoptimized class loader</h1>';
});

//Route cache:
Route::get('/route-cache', function() {
    $exitCode = \Artisan::call('route:cache');
    return '<h1>Routes cached</h1>';
});

//Clear Route cache:
Route::get('/route-clear', function() {
    $exitCode = \Artisan::call('route:clear');
    return '<h1>Route cache cleared</h1>';
});

//Clear View cache:
Route::get('/view-clear', function() {
    $exitCode = \Artisan::call('view:clear');
    return '<h1>View cache cleared</h1>';
});

//Clear Config cache:
Route::get('/config-cache', function() {
    $exitCode = \Artisan::call('config:cache');
    return '<h1>Clear Config cleared</h1>';
});

// Front Website Routes
Route::get('/', [PagesController::class, 'index']);
Route::get('books', [PagesController::class, 'books']);
Route::get('about-us', [PagesController::class, 'aboutus']);
Route::get('contact-us', [PagesController::class, 'contactus']);
Route::get('test', [PagesController::class, 'test'])->name('test');
Route::get('book/{slug}', [PagesController::class, 'book']);
Route::view('privacy-policy', 'front/pages/privacy_policy');
Route::view('terms-and-conditions', 'front/pages/terms_conditions');

// Route::get('getToken', [OrderHdsController::class, 'getToken']);
// Route::get('verifypayment', [OrderHdsController::class, 'verifypayment']);

// new routes for new theme
Route::prefix('new-theme')->group(function () {
    Route::get('/', [NewTheme::class, 'index1']);
});

Route::get('my-new-theme', [NewTheme::class, 'index1']);



Route::get('cart', [PagesController::class, 'cart']);

// section pages
Route::get('section-details/{slug}', [PagesController::class, 'sectiondetails']);
// sub section pages
Route::get('section/{book_slug}/{section_slug}', [PagesController::class, 'section']);
//author pages
Route::get('authors', [PagesController::class, 'authors']);
Route::get('author/{slug}', [PagesController::class, 'author']);




// order Item Routes
Route::group(['prefix' => 'items', 'as' => 'items.'], function () {
    Route::any('add', [OrderItemsController::class, 'addtobasket']);
    Route::post('update', [OrderItemsController::class, 'updatetobasket']);
    Route::get('remove/{id}', [OrderItemsController::class, 'removefrombasket']);
    Route::post('quantityupdate', [OrderItemsController::class, 'quantityUpdate']);
    Route::post('removeItemfrombasket/{id}', [OrderItemsController::class, 'removeItemfrombasket']);
    Route::get('edit/{id}', [OrderItemsController::class, 'editorderitem']);
});


// Route::post('login', 'Auth\LoginController@login');
Route::post('login2',  [LoginController::class, 'login2']);
Route::post('Register2',  [LoginController::class, 'Register2']);
Route::get('logout', [LoginController::class, 'logout']);
Route::post('forgot-password', [LoginController::class, 'forgotpassword']);
// end of Front Website Routes
Route::post('commentpost', [PagesController::class, 'commentpost']);

Route::middleware(['auth'])->group(static function () {
    Route::get('dashboard', [UsersController::class, 'dashbaord'])->name('dashboard');
    Route::get('myorders', [UsersController::class, 'myorders'])->name('myorders');
    Route::get('myaccount', [UsersController::class, 'myaccount'])->name('myaccount');
    Route::post('change-password', [UsersController::class, 'updatePassword'])->name('update-password');
    Route::post('update-profile', [UsersController::class, 'updateProfile'])->name('update-profile');
    Route::get('order-details/{orderNo}', [UsersController::class, 'view'])->name('myorderss');
    Route::get('checkout', [OrderHdsController::class, 'checkout']);
    Route::post('process', [OrderHdsController::class, 'processOrder'])->name('process');
});
/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function () {
        Route::prefix('admin-users')->name('admin-users/')->group(static function () {
            Route::get('/',                                             'AdminUsersController@index')->name('index');
            Route::get('/create',                                       'AdminUsersController@create')->name('create');
            Route::post('/',                                            'AdminUsersController@store')->name('store');
            Route::get('/{adminUser}/impersonal-login',                 'AdminUsersController@impersonalLogin')->name('impersonal-login');
            Route::get('/{adminUser}/edit',                             'AdminUsersController@edit')->name('edit');
            Route::post('/{adminUser}',                                 'AdminUsersController@update')->name('update');
            Route::delete('/{adminUser}',                               'AdminUsersController@destroy')->name('destroy');
            Route::get('/{adminUser}/resend-activation',                'AdminUsersController@resendActivationEmail')->name('resendActivationEmail');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function () {
        Route::get('/profile',                                      'ProfileController@editProfile')->name('edit-profile');
        Route::post('/profile',                                     'ProfileController@updateProfile')->name('update-profile');
        Route::get('/password',                                     'ProfileController@editPassword')->name('edit-password');
        Route::post('/password',                                    'ProfileController@updatePassword')->name('update-password');
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function () {
        Route::prefix('categories')->name('categories/')->group(static function () {
            Route::get('/',                                             'CategoriesController@index')->name('index');
            Route::get('/create',                                       'CategoriesController@create')->name('create');
            Route::post('/',                                            'CategoriesController@store')->name('store');
            Route::get('/{category}/edit',                              'CategoriesController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'CategoriesController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{category}',                                  'CategoriesController@update')->name('update');
            Route::delete('/{category}',                                'CategoriesController@destroy')->name('destroy');
        });
    });
});



/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function () {
        Route::prefix('books')->name('books/')->group(static function () {
            Route::get('/',                                             'BooksController@index')->name('index');
            Route::get('/create',                                       'BooksController@create')->name('create');
            Route::post('/',                                            'BooksController@store')->name('store');
            Route::get('/{book}/edit',                                  'BooksController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'BooksController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{book}',                                      'BooksController@update')->name('update');
            Route::delete('/{book}',                                    'BooksController@destroy')->name('destroy');
        });
    });
});


/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function () {
        Route::prefix('settings')->name('settings/')->group(static function () {
            Route::get('/',                                             'SettingsController@index')->name('index');
            Route::get('/create',                                       'SettingsController@create')->name('create');
            Route::post('/',                                            'SettingsController@store')->name('store');
            Route::get('/{setting}/edit',                               'SettingsController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'SettingsController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{setting}',                                   'SettingsController@update')->name('update');
            Route::delete('/{setting}',                                 'SettingsController@destroy')->name('destroy');
        });
    });
});




/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function () {
        Route::prefix('authors')->name('authors/')->group(static function () {
            Route::get('/',                                             'AuthorsController@index')->name('index');
            Route::get('/create',                                       'AuthorsController@create')->name('create');
            Route::post('/',                                            'AuthorsController@store')->name('store');
            Route::get('/{author}/edit',                                'AuthorsController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'AuthorsController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{author}',                                    'AuthorsController@update')->name('update');
            Route::delete('/{author}',                                  'AuthorsController@destroy')->name('destroy');
        });
    });
});


/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function () {
        Route::prefix('roles')->name('roles/')->group(static function () {
            Route::get('/',                                             'RolesController@index')->name('index');
            Route::get('/create',                                       'RolesController@create')->name('create');
            Route::post('/',                                            'RolesController@store')->name('store');
            Route::get('/{role}/edit',                                  'RolesController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'RolesController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{role}',                                      'RolesController@update')->name('update');
            Route::delete('/{role}',                                    'RolesController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function () {
        Route::prefix('units')->name('units/')->group(static function () {
            Route::get('/',                                             'UnitsController@index')->name('index');
            Route::get('/create',                                       'UnitsController@create')->name('create');
            Route::post('/',                                            'UnitsController@store')->name('store');
            Route::get('/{unit}/edit',                                  'UnitsController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'UnitsController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{unit}',                                      'UnitsController@update')->name('update');
            Route::delete('/{unit}',                                    'UnitsController@destroy')->name('destroy');
        });
    });
});

Route::post('/copysection', 'App\Http\Controllers\Admin\SectionsController@copySection');
Route::post('/fetchsections', 'App\Http\Controllers\Admin\SectionsController@fetchsections');
Route::post('/copyUnit', 'App\Http\Controllers\Admin\SectionsController@copyUnitt');
Route::post('/create-quiz', 'App\Http\Controllers\Admin\QuizController@createQuiz');
Route::get('/get-quiz', 'App\Http\Controllers\Admin\QuizController@get_quiz');
Route::get('/switchQuestion', 'App\Http\Controllers\Admin\QuizController@switchQuestion');
Route::post('/quiz-result', 'App\Http\Controllers\Admin\QuizController@quiz_result');
Route::get('result/details/{id}', 'App\Http\Controllers\Admin\QuizController@resultDetails');
Route::post('/wrong-questions', 'App\Http\Controllers\Admin\QuizController@wrong_questions');
Route::get('/get-mcqs', 'App\Http\Controllers\Admin\QuizController@get_mcqs');

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function () {
        Route::prefix('sections')->name('sections/')->group(static function () {
            Route::get('/',                                             'SectionsController@index')->name('index');
            Route::get('/create',                                       'SectionsController@create')->name('create');
            Route::post('/',                                            'SectionsController@store')->name('store');
            Route::get('/{section}/edit',                               'SectionsController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'SectionsController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{section}',                                   'SectionsController@update')->name('update');
            Route::delete('/{section}',                                 'SectionsController@destroy')->name('destroy');

            // Route::post('/copySection',                              'SectionsController@copySection')->name('copySection');
            Route::post('/copySection',                              function (Request $r) {
                return "sasdf";
            })->name('copySection');
        });
    });
});



/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function () {
        Route::prefix('questions')->name('questions/')->group(static function () {
            Route::get('/',                                             'QuestionsController@index')->name('index');
            Route::get('/create',                                       'QuestionsController@create')->name('create');
            Route::post('/',                                            'QuestionsController@store')->name('store');
            Route::get('/{question}/edit',                              'QuestionsController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'QuestionsController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{question}',                                  'QuestionsController@update')->name('update');
            Route::delete('/{question}',                                'QuestionsController@destroy')->name('destroy');
        });
    });
});


/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function () {
        Route::prefix('users')->name('users/')->group(static function () {
            Route::get('/',                                             'UsersController@index')->name('index');
            Route::get('/create',                                       'UsersController@create')->name('create');
            Route::post('/',                                            'UsersController@store')->name('store');
            Route::get('/{user}/edit',                                  'UsersController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'UsersController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{user}',                                      'UsersController@update')->name('update');
            Route::delete('/{user}',                                    'UsersController@destroy')->name('destroy');
        });
    });
});

\Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');


/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function () {
        Route::prefix('comments')->name('comments/')->group(static function () {
            Route::get('/',                                             'CommentsController@index')->name('index');
            Route::get('/create',                                       'CommentsController@create')->name('create');
            Route::post('/',                                            'CommentsController@store')->name('store');
            Route::get('/{comment}/edit',                               'CommentsController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'CommentsController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{comment}',                                   'CommentsController@update')->name('update');
            Route::delete('/{comment}',                                 'CommentsController@destroy')->name('destroy');
        });
    });
});


/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function () {
        Route::prefix('order-hds')->name('order-hds/')->group(static function () {
            Route::get('/',                                             'OrderHdsController@index')->name('index');
            Route::get('/create',                                       'OrderHdsController@create')->name('create');
            Route::get('/show/{orderNo}',                                       'OrderHdsController@show')->name('show');
            Route::post('/',                                            'OrderHdsController@store')->name('store');
            Route::get('/{orderHd}/edit',                               'OrderHdsController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'OrderHdsController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{orderHd}',                                   'OrderHdsController@update')->name('update');
            Route::delete('/{orderHd}',                                 'OrderHdsController@destroy')->name('destroy');
        });
    });
});


/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function () {
        Route::prefix('slides')->name('slides/')->group(static function () {
            Route::get('/',                                             'SlidesController@index')->name('index');
            Route::get('/create',                                       'SlidesController@create')->name('create');
            Route::post('/',                                            'SlidesController@store')->name('store');
            Route::get('/{slide}/edit',                                 'SlidesController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'SlidesController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{slide}',                                     'SlidesController@update')->name('update');
            Route::delete('/{slide}',                                   'SlidesController@destroy')->name('destroy');
        });
    });
});

Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function () {
        Route::prefix('reports')->name('order-dts/')->group(static function () {
            Route::get('/book-reports',                          'ReportsController@book_reports')->name('book_reports');
            // payment_reports
            Route::get('/payment-reports',                          'ReportsController@payment_reports')->name('payment_reports');
            Route::get('/statistics',                          'ReportsController@statistics')->name('statistics');
//            Route::get('/create',                                       'OrderDtsController@create')->name('create');
//            Route::post('/',                                            'OrderDtsController@store')->name('store');
//            Route::get('/{orderDt}/edit',                               'OrderDtsController@edit')->name('edit');
//            Route::post('/bulk-destroy',                                'OrderDtsController@bulkDestroy')->name('bulk-destroy');
//            Route::post('/{orderDt}',                                   'OrderDtsController@update')->name('update');
//            Route::delete('/{orderDt}',                                 'OrderDtsController@destroy')->name('destroy');
        });
    });
});


/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function () {
        Route::prefix('tests')->name('tests/')->group(static function () {
            Route::get('/',                                             'TestsController@index')->name('index');
            Route::get('/create',                                       'TestsController@create')->name('create');
            Route::post('/',                                            'TestsController@store')->name('store');
            Route::get('/{test}/edit',                                  'TestsController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'TestsController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{test}',                                      'TestsController@update')->name('update');
            Route::delete('/{test}',                                    'TestsController@destroy')->name('destroy');
        });
    });
});


Route::get('admin/paymentDetails', 'App\Http\Controllers\Admin\TestsController@viewapplication')->name('paymentDetails');
// admin.test.application.edit
Route::get('admin/test/application/edit/{id}', 'App\Http\Controllers\Admin\TestsController@editapplication')->name('admin.test.application.edit');
// admin.test.application.destroy
Route::get('admin/test/application/destroy/{id}', 'App\Http\Controllers\Admin\TestsController@destroyapplication')->name('admin.test.application.destroy');
// admin.test.application.update
Route::post('admin/test/application/update/{id}', 'App\Http\Controllers\Admin\TestsController@updateapplication')->name('admin.test.application.update');
// test apply
// Route::get('/test/{test}', 'TestApplyController@apply')->name('test.apply');
Route::resource('testapplies', 'App\Http\Controllers\Admin\TestApplyController');
// print slip
Route::post('/testapplies/print', 'App\Http\Controllers\Admin\TestApplyController@print')->name('testapplies.print');
// printOurSlip
Route::post('/testapplies/printOurSlip', 'App\Http\Controllers\Admin\TestApplyController@printOurSlip')->name('testapplies.printOurSlip');
// checkUserCredentials
Route::post('/testapplies/checkUserCredentials', 'App\Http\Controllers\Admin\TestApplyController@checkUserCredentials')->name('testapplies.checkUserCredentials');

// test-take post route
Route::post('/test-take', 'App\Http\Controllers\Admin\TestApplyController@test_take')->name('test-take.submit');

Route::get('/get-question', 'App\Http\Controllers\Admin\TestQuestionController@get_question');
Route::get('/switchTestQuestion', 'App\Http\Controllers\Admin\TestQuestionController@switchQuestion');
Route::post('/test-result', 'App\Http\Controllers\Admin\TestQuestionController@test_result')->name('test-result.submit');
Route::get('test-result/details/{id}', 'App\Http\Controllers\Admin\TestQuestionController@resultDetails');
Route::get('test-result/overall/{id}', 'App\Http\Controllers\Admin\TestQuestionController@test_result_overall');

Route::post('/testapplies/check_result', 'App\Http\Controllers\Admin\TestQuestionController@check_result')->name('testapplies.check_result');

// result_filter
Route::post('/result_filter', 'App\Http\Controllers\Admin\TestQuestionController@result_filter')->name('result_filter');
Route::post('/wrong-questions-test', 'App\Http\Controllers\Admin\TestQuestionController@wrong_questions');

// Route::get('/test-result/overall', 'App\Http\Controllers\Admin\TestQuestionController@test_result_overall')->name('testapplies.result');
// Route::get('/get-mcqs', 'App\Http\Controllers\Admin\QuizController@get_mcqs');

// fetch-districts
Route::get('/fetch-districts/{district_id}', 'App\Http\Controllers\Admin\DistrictsController@fetchDistricts');

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function () {
        Route::prefix('provinces')->name('provinces/')->group(static function () {
            Route::get('/',                                             'ProvincesController@index')->name('index');
            Route::get('/create',                                       'ProvincesController@create')->name('create');
            Route::post('/',                                            'ProvincesController@store')->name('store');
            Route::get('/{province}/edit',                              'ProvincesController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'ProvincesController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{province}',                                  'ProvincesController@update')->name('update');
            Route::delete('/{province}',                                'ProvincesController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function () {
        Route::prefix('districts')->name('districts/')->group(static function () {
            Route::get('/',                                             'DistrictsController@index')->name('index');
            Route::get('/create',                                       'DistrictsController@create')->name('create');
            Route::post('/',                                            'DistrictsController@store')->name('store');
            Route::get('/{district}/edit',                              'DistrictsController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'DistrictsController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{district}',                                  'DistrictsController@update')->name('update');
            Route::delete('/{district}',                                'DistrictsController@destroy')->name('destroy');
        });
    });
});


/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('intro-videos')->name('intro-videos/')->group(static function() {
            Route::get('/',                                             'IntroVideosController@index')->name('index');
            Route::get('/create',                                       'IntroVideosController@create')->name('create');
            Route::post('/',                                            'IntroVideosController@store')->name('store');
            Route::get('/{introVideo}/edit',                            'IntroVideosController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'IntroVideosController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{introVideo}',                                'IntroVideosController@update')->name('update');
            Route::delete('/{introVideo}',                              'IntroVideosController@destroy')->name('destroy');
        });
    });
});

Route::get('videos/{slug}', 'App\Http\Controllers\PagesController@videos');

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('menus')->name('menus/')->group(static function() {
            Route::get('/',                                             'MenusController@index')->name('index');
            Route::get('/create',                                       'MenusController@create')->name('create');
            Route::post('/',                                            'MenusController@store')->name('store');
            Route::get('/{menu}/edit',                                  'MenusController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'MenusController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{menu}',                                      'MenusController@update')->name('update');
            Route::delete('/{menu}',                                    'MenusController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('sub-menus')->name('sub-menus/')->group(static function() {
            Route::get('/',                                             'SubMenusController@index')->name('index');
            Route::get('/create',                                       'SubMenusController@create')->name('create');
            Route::post('/',                                            'SubMenusController@store')->name('store');
            Route::get('/{subMenu}/edit',                               'SubMenusController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'SubMenusController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{subMenu}',                                   'SubMenusController@update')->name('update');
            Route::delete('/{subMenu}',                                 'SubMenusController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('drop-down-menus')->name('drop-down-menus/')->group(static function() {
            Route::get('/',                                             'DropDownMenusController@index')->name('index');
            Route::get('/create',                                       'DropDownMenusController@create')->name('create');
            Route::post('/',                                            'DropDownMenusController@store')->name('store');
            Route::get('/{dropDownMenu}/edit',                          'DropDownMenusController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'DropDownMenusController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{dropDownMenu}',                              'DropDownMenusController@update')->name('update');
            Route::delete('/{dropDownMenu}',                            'DropDownMenusController@destroy')->name('destroy');
        });
    });
});


/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('zones')->name('zones/')->group(static function() {
            Route::get('/',                                             'ZonesController@index')->name('index');
            Route::get('/create',                                       'ZonesController@create')->name('create');
            Route::post('/',                                            'ZonesController@store')->name('store');
            Route::get('/{zone}/edit',                                  'ZonesController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'ZonesController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{zone}',                                      'ZonesController@update')->name('update');
            Route::delete('/{zone}',                                    'ZonesController@destroy')->name('destroy');
        });
    });
});

// routes/web.php

Route::get('/admin/impersonate/{user}', [ImpersonateController::class, 'impersonate'])->name('impersonate');
Route::get('/stop-impersonating', [ImpersonateController::class, 'stopImpersonating'])->name('stop-impersonating');

