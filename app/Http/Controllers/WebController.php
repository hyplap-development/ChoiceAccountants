<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Department;
use App\Models\Service;
use App\Models\Testimonial;
use App\Models\Client;
use App\Models\Faq;
use App\Models\Team;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function welcome(Request $request)
    {
        $departments = Department::where('status', 1)->where('deleteId', 0)->orderBy('id', 'ASC')->get();
        $services = Service::where('status', 1)->where('deleteId', 0)->orderBy('id', 'DESC')->where('flag', 'Yes')->get();
        $blogs = Blog::where('status', 1)->where('deleteId', 0)->orderBy('id', 'DESC')->take(5)->get();
        $allservices = Service::where('status', 1)->where('deleteId', 0)->orderBy('id', 'DESC')->get();
        $testimonials = Testimonial::where('status', 1)->orderBy('sequence', 'ASC')->get();
        $allblogs = Blog::where('status', 1)->where('deleteId', 0)->orderBy('id', 'DESC')->with('service')->get();
        $clients = Client::where('status', 1)->where('deleteId', 0)->orderBy('sequence', 'ASC')->get();

        return view('web.welcome', compact('departments', 'services', 'blogs', 'allservices', 'testimonials','allblogs','clients'));    
    }

    public function privacyPolicy(Request $request)
    {
        $departments = Department::where('status', 1)->where('deleteId', 0)->orderBy('id', 'ASC')->get();
        $services = Service::where('status', 1)->where('deleteId', 0)->orderBy('id', 'DESC')->where('flag', 'Yes')->get();
        $blogs = Blog::where('status', 1)->where('deleteId', 0)->orderBy('id', 'DESC')->take(5)->get();

        return view('web.privacyPolicy', compact('departments', 'services', 'blogs'));
    }

    public function faq(Request $request)
    {
        $departments = Department::where('status', 1)->where('deleteId', 0)->orderBy('id', 'ASC')->get();
        $services = Service::where('status', 1)->where('deleteId', 0)->orderBy('id', 'DESC')->where('flag', 'Yes')->get();
        $blogs = Blog::where('status', 1)->where('deleteId', 0)->orderBy('id', 'DESC')->take(5)->get();
        $faqs = Faq::where('status', 1)->orderBy('sequence', 'ASC')->get();

        return view('web.faq', compact('departments', 'services', 'blogs','faqs'));
    }

    public function ourClient(Request $request)
    {
        $departments = Department::where('status', 1)->where('deleteId', 0)->orderBy('id', 'ASC')->get();
        $services = Service::where('status', 1)->where('deleteId', 0)->orderBy('id', 'DESC')->where('flag', 'Yes')->get();
        $blogs = Blog::where('status', 1)->where('deleteId', 0)->orderBy('id', 'DESC')->take(5)->get();
        $clients = Client::where('status', 1)->where('deleteId', 0)->orderBy('sequence', 'ASC')->get();

        return view('web.ourClient', compact('departments', 'services', 'blogs','clients'));
    }

    public function ourTeam(Request $request)
    {
        $departments = Department::where('status', 1)->where('deleteId', 0)->orderBy('id', 'ASC')->get();
        $services = Service::where('status', 1)->where('deleteId', 0)->orderBy('id', 'DESC')->where('flag', 'Yes')->get();
        $blogs = Blog::where('status', 1)->where('deleteId', 0)->orderBy('id', 'DESC')->take(5)->get();
        $teams = Team::where('status', 1)->where('deleteId', 0)->orderBy('id', 'DESC')->get();

        return view('web.ourTeam', compact('departments', 'services', 'blogs','teams'));
    }

    public function ourStory(Request $request)
    {
        $departments = Department::where('status', 1)->where('deleteId', 0)->orderBy('id', 'ASC')->get();
        $services = Service::where('status', 1)->where('deleteId', 0)->orderBy('id', 'DESC')->where('flag', 'Yes')->get();
        $blogs = Blog::where('status', 1)->where('deleteId', 0)->orderBy('id', 'DESC')->take(5)->get();
        $clients = Client::where('status', 1)->where('deleteId', 0)->orderBy('sequence', 'ASC')->get();

        return view('web.ourStory', compact('departments', 'services', 'blogs','clients'));
    }

    public function contactUs(Request $request)
    {
        $departments = Department::where('status', 1)->where('deleteId', 0)->orderBy('id', 'ASC')->get();
        $services = Service::where('status', 1)->where('deleteId', 0)->orderBy('id', 'DESC')->where('flag', 'Yes')->get();
        $blogs = Blog::where('status', 1)->where('deleteId', 0)->orderBy('id', 'DESC')->take(5)->get();

        return view('web.contactUs', compact('departments', 'services', 'blogs'));
    }

    public function ourBlog(Request $request)
    {
        $departments = Department::where('status', 1)->where('deleteId', 0)->orderBy('id', 'ASC')->get();
        $services = Service::where('status', 1)->where('deleteId', 0)->orderBy('id', 'DESC')->where('flag', 'Yes')->get();
        $blogs = Blog::where('status', 1)->where('deleteId', 0)->orderBy('id', 'DESC')->take(5)->get();
        $allblogs = Blog::where('status', 1)->where('deleteId', 0)->with('service')->orderBy('id', 'DESC')->get();

        return view('web.ourBlog', compact('departments', 'services', 'blogs','allblogs'));
    }
}
