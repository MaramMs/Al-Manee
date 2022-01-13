@extends('layouts.user-layout')
@section('content')
@include('layouts.header')
<div class="services text-right">
    <div class="container">
        <h2> خدمة بناء الافكار لدينا</h2>

        <p name="service_id">
            {!! $service->content !!}
            {{-- {!! $services[1]->content !!} --}}
{{--
           @foreach ($service as $ser )
            {!!   $ser->content  !!}
            @endforeach --}}

        </p>
    </div>

   </div>

   <div class="our-services text-right">
       <div class="container">
           <h2>أعمالنا</h2>

           <h3> مميزات خدمة
{{--
            @foreach ($services as $service )
            {{ $service->title }}
            @endforeach --}}
               {{ $service->title }}
            </h3>

           <ul name="service_id">

            {!! $service->features !!}

            {{-- @foreach ($services as $service )
            <li>{!!  $service->features !!} </li>
            @endforeach --}}

           </ul>

           <h3>نماذج الاعمال</h3>



           <div class="row">
            @foreach ($examples as $example)
               <div class="col-4">
                   <div class="card" style="width: 15rem; height:31rem;">
                       <div class="our-ser-img">
                           <img src="{{ $example->src }}" class="card-img-top" alt="...">
                       </div>
                       <div class="card-body">
                         <p class="card-text"> {!! $example->content !!}.</p>

                       </div>
                     </div>
               </div>

            @endforeach




           </div>
       </div>
   </div>
@endsection
