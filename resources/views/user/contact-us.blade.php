@extends('layouts.user-layout')
@section('content')
@include('layouts.header')
<!-- start contact us-->
<div class="contact-us bg">
    <div class="container">
      <div class="sercives-info ">
        <h1>تواصل معنا</h1>
        <p> لحظتك للتألق قد حانت حسن من تجاربك التعليمية</p>

      </div>
        <div class="ways-communicate">
            <div class="row">

                <div class="col-xs-12 col-md-4 center">
                    <div class="card" style="width: 14rem;">
                      <div class="ways-icon">
                          <i class="{{ $contacts[0]->icon }}"></i>
                      </div>
                        <div class="card-body">
                          <h5 class="card-title">للتواصل عبر {{ $contacts[0]->name }}</h5>
                          <p class="card-text"> {{ $contacts[0]->link }}</p>
                          <a href="https://wa.me/{{ $contacts[0]->link }}" class="btn green">اتصل بنا</a>
                        </div>
                      </div>
                  </div>

                  <div class="col-xs-12 col-md-4  center">
                    <div class="card" style="width: 14rem;">
                      <div class="ways-icon ">
                         <i class="{{ $contacts[1]->icon }}"></i>
                      </div>
                        <div class="card-body">
                          <h5 class="card-title"> الاتصال والاستفسار</h5>
                          <p class="card-text"> {{ $contacts[1]->link }} </p>
                           <a href="tel:{{ $contacts[1]->link }}" class="btn blue"> اتصل بنا </a>
                        </div>
                      </div>
                  </div>

                <div class="col-xs-12 col-md-4 center">
                  <div class="card" style="width: 14rem;">
                    <div class="ways-icon blue">
                      <i class="{{ $contacts[2]->icon }}"></i>
                    </div>
                      <div class="card-body">
                        <h5 class="card-title">البريد الاكتروني</h5>
                        <p class="card-text"> {{ $contacts[2]->link }}  </p>
                         <a href = "mailto:{{ $contacts[2]->link }}" class="btn gray">المراسلة</a>
                      </div>
                    </div>
                </div>


            </div>
          </div>






          <div class="contact-us">
            <div class="container">
              <div class="sercives-info ">
                <h1>تواصل معنا</h1>
                <p> لحظتك للتألق قد حانت حسن من تجاربك التعليمية</p>

              </div>

              <div class="row align-content-end">


                <div class="col-xs-12 col-md-6">
                  <div class="contact-form">
                    <form action="{{ route('contact-post') }}" method="POST">
                       @csrf
                      <input class="form-control mb-3"type="text" name="name" placeholder="الاسم">
                      <input class="form-control mb-3"type="email" name="email" placeholder="البريد الالكتروني">
                      <input class="form-control mb-3"type="text" name="subject" placeholder="عنوان الرسالة">

                      <textarea class="form-control" rows="5" name="massege"></textarea>

                      <button class="btn btn-primary w-100 mt-2" href = "mailto:maramismail2015@gmail.com"  type="submit"> إرسال</button>

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
    </div>
  </div>

<!-- end contact us-->
@endsection

