<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Contact;
use App\Models\Example;
use App\Models\Image;
use App\Models\Service;
use Illuminate\Http\Request;

class UsersContoller extends Controller
{
    public function index()
    {
        $abouts = About::all()->take(1);
        $services = Service::all();
        $examples =Example::all();
        $contacts = Contact::all();
        $images =Image::all();
        return view('user.index' ,compact('abouts','services','examples','contacts','images'));
    }

    public function  about()
    {
        $abouts = About::all()->take(1);
        return view('user.about-us',compact('abouts'));
    }
    public function  service()

    {
        $services = Service::all();
        $examples =Example::all();
        return view('user.services',compact('services','examples'));
    }
    public function  contact()
    {
        $contacts = Contact::all();
        return view('user.contact-us',compact('contacts'));
    }
}
