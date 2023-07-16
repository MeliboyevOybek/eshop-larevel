<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\About_items;
use App\Models\Blog;
use App\Models\Blog_cotegories;
use App\Models\Contact;
use Faker\Core\Blood;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index() {
        return view('front/index');
    }

    public function contact()
    {
        $contact = Contact::latest()->first();
        return view('front/contact',['contacts'=>$contact]);

    }

    function about() {

        $about = About::latest()->first();
        $about_items = About_items::latest()->limit(3)->get();
        return view('front/about',['about'=>$about,'aboute_items'=>$about_items]);
    }

    function about_items() {

        $about_items = About_items::latest()->first();
        return view('front/about_items',['aboute_items'=>$about_items]);
    }

    function blog_cotegories() {

        $blog_cotegories = Blog_cotegories::latest()->first();
        return view('front/blog_cotegories',['blog_cotegories'=>$blog_cotegories]);
    }
    function blog() {

        $blog = Blog::latest()->first();
        $blog_cotegories = Blog_cotegories::latest()->get();
        return view('front/blog',['blog'=>$blog, 'blog_cotegories'=>$blog_cotegories]);
    }


}
