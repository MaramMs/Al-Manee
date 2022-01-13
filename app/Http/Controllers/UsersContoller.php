<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Image;
use App\Models\Contact;
use App\Models\Example;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class UsersContoller extends Controller
{
    public function index()

    {
        $title_image = Image::where('name', '=', 'الشعار')->first();
        $header_image = Image::where('name', '=', 'الرئيسية')->first();
        $about_image = Image::where('name', '=', 'عنا')->first();
        $abouts = About::all()->take(1);
        $services = Service::all();
        $examples =Example::all();
        $contacts = Contact::all();
        // $images =Image::all();
        return view('user.index' ,compact('abouts','services','examples','contacts','title_image','header_image','about_image'));
    }

    public function  about()

    {
        $services =Service::all();
        $contacts = Contact::all();
        $title_image = Image::where('name', '=', 'الشعار')->first();
        $header_image = Image::where('name', '=','من نحن')->first();
        $abouts = About::all()->take(1);
        return view('user.about-us',compact('abouts','title_image','header_image','services','contacts'));
    }
    public function  service()

    {

        $title_image = Image::where('name', '=', 'الشعار')->first();
        $header_image = Image::where('name', '=', 'الخدمات')->first();
        // $services = Service::findOrFail('id');
        $services =Service::all();
        $examples =Example::all();
        $contacts =Contact::all();
        return view('user.services',compact('services','examples','title_image','header_image','contacts'));
    }
    public function  getContact()
    {
        $services =Service::all();
        $contacts = Contact::all();
        $title_image = Image::where('name', '=', 'الشعار')->first();
        $header_image = Image::where('name', '=', 'اتصل بنا')->first();
        $contacts = Contact::all();
        return view('user.contact-us',compact('contacts','title_image','header_image','contacts','services'));
    }

    public function  postContact(Request $request)
    {
    // dd($request->all());
    $response = Mail::send([], [], function($message) use ($request)
    {
        $link = url('');
        $rootpath = url('/public').'/';
        $body = $request->massege;
        // $message=$request->get('from');
        $message->from($request->email);
        $message->to(Auth::user()->email);
        $message->subject($request->subject);
        $message->setBody($body, 'text/html');
    });
      return redirect()->back();
    }

    public function show($id)

    {
        // dd($id);
        $services =Service::all();
        $contacts = Contact::all();
        // $examples =Example::all();
        $service = Service::findOrFail($id);
        // dd($service);
        $examples = Example::where('service_id' , '=' , $id)->get();
        $title_image = Image::where('name', '=', 'الشعار')->first();
        $header_image = Image::where('name', '=', 'اتصل بنا')->first();
        return view('user.services',compact('service','services','contacts','title_image','header_image','examples'));
    }
    public function search(Request $request){
        $title_image = Image::where('name', '=', 'الشعار')->first();
        $header_image = Image::where('name', '=', 'اتصل بنا')->first();
        $services = Service::all();
        $contacts = Contact::all();
        $service_result = Service::select('id','title','brief' , 'content', "features")->where('title', 'like', '%' . $request->search . '%')->orderBy('id', 'DESC')->get();
        $example_result = Example::select('id','content','src' , 'service_id')->where('content', 'like', '%' . $request->search . '%')->orderBy('id', 'DESC')->get();
        return view('user.result',compact('service_result','example_result','title_image','header_image','services','contacts'));
    }
}
