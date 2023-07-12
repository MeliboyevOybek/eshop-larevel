<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index() {
        return view('index');
    }

    public function contact()
    {
        $contact = Contact::latest()->get();
        return view('contact',['contact'=>$contact]);
    }
}
