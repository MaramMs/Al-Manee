@extends('layouts.user-layout')
@section('content')
@include('layouts.header')

 <!-- start about-us-->

 <div class="about">
    <div class="container">
       <h2>نبذة تعريفية</h2>

       <p>

        {{ $abouts[0]->content }}
{{--
        {{ $abouts[0]->content }} --}}
           {{-- نقوم على توليد الافكار وتنميتها والتجاوب مع جميع المواقف وتوظيفها في المهام المطلوب
            نقوم بتقديم جميع الخدمات الي تسرع
           نقوم على توليد الافكار وتنميتها والتجاوب مع جميع المواقف وتوظيفها في المهام المطلوب
           نقوم بتقديم جميع الخدمات الي تسرع
           نقوم على توليد الافكار وتنميتها والتجاوب مع جميع المواقف وتوظيفها في المهام المطلوب
            نقوم بتقديم جميع الخدمات الي تسرع --}}

       </p>
    </div>

</div>

  <div class="massage">
      <div class="container">
       <h2>
           رسالتنا
       </h2>

       <p>

        {{ $abouts[0]->massage }}
           {{-- سعى في المنبع للإستشارات الارتقاء تقديم افضل الخمات التي
            تناسب مع جميع الافراد والمءسسات باعلى جودة واسرع وقت --}}
       </p>
      </div>

  </div>

  <div class="why-us">
      <div class="container">
       <h2>
           لماذا نحن
       </h2>

     <ul class="text-right">

        @foreach ($abouts as $about)
        <li> {{ $about->feature }}</li>
        @endforeach
         {{-- <li>نقدم استشارات وحلول مبتكرة لخدمات متنوعة</li>

         <li>نشارككم التنفيذ خطوة خطوة</li>

         <li>نشارككم التنفيذ خطوة خطوة</li>

         <li>نشارككم التنفيذ خطوة خطوة</li>

         <li>نشارككم التنفيذ خطوة خطوة</li> --}}
     </ul>
      </div>

  </div>
@endsection
