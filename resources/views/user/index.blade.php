@extends('layouts.user-layout')
@extends('layouts.header')
@section('content')


 <!-- Start Sercives-->
 <div class="sercives">
    <div class="container">
      <div class="sercives-info ">
        <h1>خدماتنا</h1>
        <p> نقوم بتقديم جميع الخدمات التي تسرع من توليد الافكار وتنفيذها باحترافية
           وقوة بداية من انشاء الفكرة وصولا لتحقيق الهدف المراد</p>

      </div>

      <div class="row  justify-content-around ">
         @foreach ($services as $service )
         <div class=" col-xs-12 col-md-3 ser">
            <img src="{{ $images[0]->image }}" alt="">
            <a href=""> {{ $service->title }} </a>
          </div>
         @endforeach
      </div>
{{--
      <div class="row  justify-content-around ">
       <div class="col-xs-12 col-md-3  ser">
         <img src="image/Create-bro.svg" alt="">
         <a href="">بناء الافكار</a>
       </div>
       <div class="col-xs-12 col-md-3   ser">
        <img src="image/Create-bro.svg" alt="">
        <a href="">بناء الافكار</a>
      </div>
      <div class="col-xs-12 col-md-3  ser">
        <img src="image/Create-bro.svg" alt="">
        <a href="">بناء الافكار</a>
      </div>
     </div> --}}



    </div>
  </div>


  <!-- End Sercives-->

  <!-- start about us-->


  <div class="about-us">
    <div class="container">
      <h2>من نحن</h2>
       <div class="row">


         <div class="col-xs-12 col-md-6">
           <div class="about-info">
             <h3>المنيع للإستشارات</h3>
             <p>

                {{ $abouts[0]->content }}
                 {{-- المنيع لاستشارات يضم نخبة من الاستشاريين والمختصين من الاكاديمين الممارسين
                ذوي الخبرة في مجال تقديم الاستشارات والتدريبات في مجالات متنوعة --}}
            </p>

             <a href="">المزيد</a>
           </div>
         </div>
         <div class="col-xs-12 col-md-6 hide">
           <div class="about-img ">
             <img src="image/corporate-business-handshake-business-partners.jpg" alt="">
           </div>

         </div>
       </div>


    </div>
  </div>

  <!-- end about us-->

 <!-- start contact us-->
   <div class="contact-us">
     <div class="container">
       <div class="sercives-info ">
         <h1>تواصل معنا</h1>
         <p> لحظتك للتألق قد حانت حسن من تجاربك التعليمية</p>

       </div>

       <div class="row align-content-end">


         <div class="col-xs-12 col-md-6">
           <div class="contact-form">
             <form action="">
               <input class="form-control mb-3"type="text" placeholder="الاسم">
               <input class="form-control mb-3"type="email" placeholder="البريد الالكتروني">
               <input class="form-control mb-3"type="text" placeholder="عنوان الرسالة">

               <textarea class="form-control" rows="5">

               </textarea>

               <button class="btn btn-primary w-100 mt-2"> إرسال</button>

             </form>
           </div>

         </div>
         <div class="col-6 hide">
           <div class="contact-list">
                 <ul class="list-unstyled text-right">
                   <li>
                     <i class="far fa-user"></i>
                     المنيع للإستشارات

                   </li>

                   <li>
                     <i class="fas fa-map-marker-alt"></i>
                     المملكة العربية السعودية

                   </li>

                   <li>
                     <i class="fas fa-phone-volume"></i>
                     0096600000000000

                   </li>

                   <li>
                     <i class="far fa-envelope"></i>
                     almeen@gmail.com

                   </li>
                 </ul>
           </div>
         </div>
       </div>
     </div>
   </div>

 <!-- end contact us-->
@endsection
