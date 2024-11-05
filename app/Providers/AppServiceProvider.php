<?php

namespace App\Providers;

use App\Models\Leaf;
use App\Models\Concern;
use App\Models\Product;
use App\Models\Category;
use App\Models\Packages;
use App\Models\Services;
use App\Models\GeneralInfo;
use App\Models\SectionContent;
use App\Models\PackagesDetails;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {;
        Paginator::useBootstrapFour();

        $generalInfo = GeneralInfo::first();
        view()->share(['generalInfo' => $generalInfo]);
       
        // $topbar_phone = explode(',', $generalInfo->phone);
        // view()->share(['topbar_phone' => $topbar_phone]);

        $newsletter_sec_content = SectionContent::where('sec_name', 'News Letter')->where('page_name', 'home_page')
            ->where('status', 1)
            ->first();
            view()->share(['newsletter_sec_content' => $newsletter_sec_content]);

        $products = Product::where('status', 'publish')->orderBy('created_at', 'desc')->get();

        view()->share(['products' => $products]);
        // $concerns = Concern::where('status', 'publish')->orderBy('id', 'desc')->get();

        // view()->share(['concerns' => $concerns]);

        // $categorieData = Category::where('status', 'publish')->orderBy('order_level','desc')->get();
        // view()->share(['categorieData' => $categorieData]);

        // $serviceData = Services::where('status', 'publish')->orderBy('order_level','desc')->get();

        // view()->share(['serviceData' => $serviceData]);

        // $allPackages = Packages::get();

        // view()->share(['allPackages' => $allPackages]);

        // $PackagesDetails = PackagesDetails::get();

        // view()->share(['PackagesDetails' => $PackagesDetails]);

    }
}
