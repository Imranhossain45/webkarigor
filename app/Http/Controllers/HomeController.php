<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Meta;
use App\Models\Banner;
use App\Models\Client;
use App\Models\AboutUs;
use App\Models\Concern;
use App\Models\Partner;
use App\Models\Product;
use App\Models\Services;
use App\Models\WhyChoose;
use App\Models\Achievement;
use App\Models\Testimonial;
use App\Models\VideoGallery;
use Illuminate\Http\Request;
use App\Models\MissionVision;
use App\Models\SectionContent;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Artisan;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

     
    public function index()
    {
        $banners = Banner::where('status', 'publish')->orderBy('id', 'asc')->get();
        $partners = Partner::where('status', 'publish')->orderBy('id', 'desc')->get();
        $clients = Client::where('status', 'publish')->orderBy('id', 'desc')->get();
        $whychoose = WhyChoose::where('status', 'publish')->orderBy('id', 'asc')->limit(6)->get();
        $testimonials = Testimonial::where('status', 'publish')->orderBy('id', 'desc')->limit(12)->get();
        $services = Services::where('status', 'publish')->orderBy('order_level', 'desc')->limit(9)->get();
        $concerns = Concern::where('status', 'publish')->orderBy('id', 'desc')->limit(4)->get();
        $products = Product::where('status', 'publish')->orderBy('order_number', 'desc')->limit(12)->get();
        $blogs = Blog::where('status', 'publish')->orderBy('created_at', 'desc')->limit(6)->get();
        $mission = MissionVision::where('status', 'publish')->first();
        $about = AboutUs::first();
        $achievement = Achievement::first();
        $videos = VideoGallery::where('status','publish')->limit(12)->get();

        $metaData = Meta::where('page_name', 'home')->first();


        $brandsection = SectionContent::where('sec_name', 'Brand')
            ->where('page_name', 'home_page')
            ->where('status', 1)
            ->first();
        $whychoosesection = SectionContent::where('sec_name', 'Why Choose')
            ->where('page_name', 'home_page')
            ->where('status', 1)
            ->first();
        $whatweoffersection = SectionContent::where('sec_name', 'What We Offer')->where('page_name', 'home_page')
            ->where('status', 1)
            ->first();
        $missionsection = SectionContent::where('sec_name', 'Our Mission')->where('page_name', 'home_page')
            ->where('status', 1)
            ->first();
        $concernsection = SectionContent::where('sec_name', 'Our Concern')->where('page_name', 'home_page')
            ->where('status', 1)
            ->first();
        $testimonialsection = SectionContent::where('sec_name', 'Professional Excelence')->where('page_name', 'home_page')
            ->where('status', 1)
            ->first();
        $newsletter_sec_content = SectionContent::where('sec_name', 'News Letter')->where('page_name', 'home_page')
            ->where('status', 1)
            ->first();
        $affiliation_sec_content = SectionContent::where('sec_name', 'glance')->where('page_name', 'home_page')
            ->where('status', 1)
            ->first();
        $product_sec_content = SectionContent::where('sec_name', 'product')->where('page_name', 'home_page')
            ->where('status', 1)
            ->first();
        return view('frontend.index', compact('banners', 'partners', 'whychoose', 'concerns', 'mission', 'testimonials', 'services', 'metaData', 'brandsection', 'whychoosesection', 'whatweoffersection', 'missionsection', 'concernsection', 'testimonialsection','newsletter_sec_content','clients','about','achievement','products','blogs','videos','affiliation_sec_content','product_sec_content'));
    }

    function clearCache(Request $request)
    {
        Artisan::call('cache:clear');
        Toastr::success('Cache cleared successfully');
        return back();
    }

    public function search(Request $request)
    {
       
        if ($request->search != null) {
            $searchTerm = '%' . $request->search . '%';

            $table1Query = Product::where('name', 'LIKE', $searchTerm)->get();
            $table2Query = Blog::where('title', 'LIKE', $searchTerm)->get();

            return view('frontend.render.ajaxsearchitem', compact('table1Query', 'table2Query'));
        }
    }

    public function quick_view(){
        return view('frontend.partial.quick_view');
    }
}
