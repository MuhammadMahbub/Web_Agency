<?php

namespace App\Http\Controllers;



use Carbon\Carbon;
use App\Models\Faq;
use App\Models\Blog;
use App\Models\Team;
use App\Models\Banner;
use App\Models\Button;
use App\Models\BuyNow;
use App\Models\FaqTop;
use App\Models\Review;
use App\Models\AboutUs;
use App\Models\company;

use App\Models\Contact;
use App\Models\Feature;
use App\Models\Gallery;
use App\Models\Process;
use App\Models\Service;
use App\Models\BlogLike;
use App\Models\Contactus;
use App\Models\Mstretegy;
use App\Models\Socialurl;
use App\Models\AboutHeader;
use App\Models\BlogComment;
use App\Models\GalleryName;
use App\Models\Testimonial;

use App\Models\AboutBackImg;
use App\Models\BlogCategory;
use App\Models\ColorSetting;
use App\Models\FaqUnanswerQ;
use App\Models\StartProject;
use Illuminate\Http\Request;
use App\Models\GeneralSetting;


class FrontendController extends Controller
{
    // view Front home page
    public function index(){

        // $all_service_data = Service::limit(6)->orderBy('id', 'DESC')->get();
        $all_service_data = Service::latest()->limit(6)->get();

        // homme contact block content
        $all_block_contact_contents = Contactus::first();


        // tareq code start
        $reviews = Review::latest()->get();


        $reviews_headers = Review::latest()->limit(4)->get();

        $companies = company::first();

        $buyNow = BuyNow::latest()->get();

        $startProject = StartProject::first();

        $banner = Banner::latest()->get();

        $market_strategy = Mstretegy::first();
        // tareq code end

        $about_back_img = AboutBackImg::latest()->get();
        $process = Process::latest()->get();
        $gallery_photo = Gallery::latest()->get();
        $gallery_name = GalleryName::latest()->get();
        $buttons = Button::first();

        // $service_name = Banner::where('service_id',)
        return view('frontend_pages.home', compact(
            'all_service_data',
            'all_block_contact_contents',
            'reviews',
            'reviews_headers',
            'companies',
            'buyNow',
            'startProject',
            'banner',
            'market_strategy',
            'about_back_img',
            'process',
            'gallery_photo',
            'gallery_name',
            'buttons'
        ));
    }

    public function about(){

        $about_header = AboutHeader::first();
        $about_us = AboutUs::first();
        $about_back_img = AboutBackImg::latest()->get();
        $gallery_photo = Gallery::latest()->get();

        return view('frontend_pages.about', compact('about_header','about_us','about_back_img','gallery_photo'));
    }

    public function service(){

        $all_service_data = Service::latest()->get();

        return view('frontend_pages.service', compact('all_service_data'));
    }

    public function single_service_details($service_slug){

        //get single service details
        $single_service_details = Service::where('service_slug', '=', $service_slug)->first();

        // get testimonial all data
        $all_tesimonial_data = Testimonial::latest()->get();

        return view('frontend_pages.single_service_details', compact('single_service_details', 'all_tesimonial_data'));
    }

    public function blog(){

        $all_blogs = Blog::latest()->simplePaginate(6);
        $blog_categories = BlogCategory::orderBy('category_name','ASC')->get();
        $recent_blogs = Blog::latest()->limit(5)->get();

        return view('frontend_pages.blog', compact('all_blogs','blog_categories','recent_blogs'));
    }

    public function blog_details($blog_slug){

        $blog_details = Blog::where('slug',$blog_slug)->first();
        $blog_comments = BlogComment::where('blog_id',$blog_details->id)->latest()->limit(6)->get();
        $comment_count = BlogComment::where('blog_id',$blog_details->id)->count();
        $likes =BlogLike::where('blog_id', $blog_details->id)->count();
        $recent_blogs = Blog::latest()->limit(5)->get();
        $related_blogs = Blog::where('category_id',$blog_details->category_id)->latest()->where('id','!=' ,       $blog_details->id)->get();
        $blog_categories = BlogCategory::orderBy('category_name','ASC')->get();
        $prev = Blog::where('id',Blog::where('id', '<', $blog_details->id)->max('id'))->first();
        $next = Blog::where('id',Blog::where('id', '>', $blog_details->id)->min('id'))->first();

        return view('frontend_pages.blog_details', compact('blog_details','blog_comments','comment_count', 'likes','recent_blogs','related_blogs','blog_categories','prev','next'));
    }

    public function blog_like(Request $request,$blog_id)
    {
        if (BlogLike::where('user_id', auth()->id())->where('blog_id', $blog_id)->exists()){
            // BlogLike::where('blog_id', $blog_id)->increment('count', 1);
            return back();
        }else{
            BlogLike::insert([
                'user_id'   => auth()->id(),    
                'blog_id'   => $blog_id,
                'count'     => 1,
                'created_at'=> Carbon::now()
            ]);
        }

        return back();
    }



    public function testimonial(){

        $all_testimonial_data = Testimonial::latest()->limit(6)->get();
        return view('frontend_pages.testimonial', compact('all_testimonial_data'));
    }

    public function team(){

        $all_teams_data = Team::latest()->limit(6)->get();
        return view('frontend_pages.team', compact('all_teams_data'));
    }


    public function single_team_details($team_slug){


        $single_team_details = Team::where('team_slug', '=', $team_slug)->first();

        $all_rest_team_member = Team::where('team_slug', '!=', $team_slug)->get();
        return view('frontend_pages.single_team_details', compact('single_team_details', 'all_rest_team_member'));
    }


    public function faq(){

        $faq_top_section_data  = FaqTop::first();

        $faq_all_datas         = Faq::latest()->get();

        $get_faq_bottom_data   = FaqUnanswerQ::first();

        return view('frontend_pages.faq', compact('faq_all_datas', 'faq_top_section_data', 'get_faq_bottom_data'));
    }

    // view Contact page
    public function contact_us(){

        $all_block_contact_contents = Contactus::first();
        return view('frontend_pages.contact', compact('all_block_contact_contents'));
    }

    public function client_message(Request $request){

        $request->validate([
            'client_name'      => 'required',
            'client_email'     => 'required|email',
            'client_phone'     => 'required|numeric',
            'message_subject'  => 'required',
            'client_message'   => 'required',
        ]);

        Contact::create($request->except('_token') + ['created_at' => Carbon::now()]);
        return back()->with('success', 'Message sent successfully!');
    }

    public function features(){

        $all_features_data = Feature::latest()->get();

        return view('frontend_pages.features', compact(
            'all_features_data',
        ));
    }


    public function all_galleries()
    {
        $gallery_photo = Gallery::latest()->get();
        $gallery_name = GalleryName::latest()->get();
        return view('frontend_pages.all_galleries', compact('gallery_photo', 'gallery_name'));
    }


    public function SearchBlogs(Request $request)
    {

        $all_blogs = Blog::where('title','LIKE', '%'.$request->search_value.'%')->latest()->simplePaginate(3);
        $blog_categories = BlogCategory::latest()->get();
        $recent_blogs = Blog::latest()->limit(5)->get();



        return view('frontend_pages.blog', compact('all_blogs', 'blog_categories','recent_blogs'));
    }

    public function search_wise_blogs(Request $request)
    {
        if ($request->search_value != null) {
            $all_blogs = Blog::where('title', 'LIKE', '%'.$request->search_value.'%')->latest()->simplePaginate(3);
        } else {
            $all_blogs = Blog::latest()->simplePaginate(3);
        }

        $count = $all_blogs->count();
        $view = view('frontend_pages.blog_search',compact('all_blogs'))->render();

        return response()->json(['data'=>$view , 'count' => $count]);
    }

    public function category_wise_blogs(Request $request)
    {
        if ($request->category_id != null) {
            $all_blogs = Blog::where('category_id',$request->category_id)->latest()->simplePaginate(3);
        } else {
            $all_blogs = Blog::latest()->simplePaginate(3);
        }

        $count = $all_blogs->count();

        $view = view('frontend_pages.blog_search',compact('all_blogs'))->render();

        return response()->json(['data'=>$view , 'count' => $count]);
    }

    public function cat_wise_blogs(Request $request)
    {
        $all_blogs = Blog::where('category_id',$request->search_value)->latest()->simplePaginate(3);
        $blog_categories = BlogCategory::latest()->get();
        $recent_blogs = Blog::latest()->limit(5)->get();

        return view('frontend_pages.blog', compact('all_blogs', 'blog_categories','recent_blogs'));
    }

    public function cate_wise_blogs(Request $request,$id)
    {
        $all_blogs = Blog::where('category_id',$id)->latest()->simplePaginate(3);
        $blog_categories = BlogCategory::latest()->get();
        $recent_blogs = Blog::latest()->limit(5)->get();

        return view('frontend_pages.blog', compact('all_blogs', 'blog_categories','recent_blogs'));
    }


}
