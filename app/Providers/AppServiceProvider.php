<?php

namespace App\Providers;

use Session;
use App\Models\Page;
use App\Models\Setting;
use App\Models\OrderItem;
use Illuminate\Support\Facades\URL;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        // URL::forceScheme('https');

        // apply force scheme when app is in production
        // if (env('APP_ENV') === 'production') {
        //     URL::forceScheme('https');
        // }

        Schema::defaultStringLength(191);
        Paginator::useBootstrap();
        $this->webStartup();
        $this->cart();
        $this->shareMetaData();
    }


    public function cart()
    {
        view()->composer(['front.components.aside', 'front.components.header'], function ($view) {
            if (Auth::check()) {
                $where = ['user_id' => Auth::User()->id];
            } else {
                $where = ['session_id' => session()->getId()];
            }

            $items = Orderitem::where($where)->where('status', 0)->with('book')->get();

            $view->with('cart', $items);
        });
    }
    public function webStartup()
    {
        $website = Setting::first();
        View::share('website', $website);
    }

    public function shareMetaData()
    {
        // Default meta data
        $defaultMeta = [
            'meta_description' => 'Bettani Series is basically the technological root with numbers of books both in hard and soft form available in the market as well as online www.bettaniseries.com which is the dire need of the day to avoid tests related confusion at all. The team of Bettani Series highly appreciates reformative comments of the well wishers and candidates after studying books and extra mandatory learning materials available on this website and market',
            'meta_keywords' => 'MCQs, Books, Online MCQs, MCQ Collection, Bettani Series',
        ];

        // Fetch all pages with their meta_description and meta_keywords
        $pages = Page::all(['page_name', 'meta_description', 'meta_keywords']);

        // Create an associative array with page_name as the key
        $metaData = [];
        foreach ($pages as $page) {
            $metaData[$page->page_name] = [
                'meta_description' => $page->meta_description ?? $defaultMeta['meta_description'],
                'meta_keywords' => $page->meta_keywords ?? $defaultMeta['meta_keywords'],
            ];
        }

        // Share the meta data and default meta data with all views
        View::share('metaData', $metaData);
        View::share('defaultMeta', $defaultMeta);
    }
}
