@extends('layouts.user-layout')
@section('content')
<!-- start contact us-->
<div class="contact-us bg">
    <div class="container">
      <div class="sercives-info ">
        <h1>تواصل معنا</h1>
        <p> لحظتك للتألق قد حانت حسن من تجاربك التعليمية</p>

      </div>
        <div class="ways-communicate">
            <div class="row flex-row-reverse">

                <div class="col-4 ">
                    <div class="card" style="width: 14rem;">
                      <div class="ways-icon">
                          <i class="{{ $contacts[0]->icon }}"></i>
                      </div>
                        <div class="card-body">
                          <h5 class="card-title">للتواصل عبر {{ $contacts[0]->name }}</h5>
                          <p class="card-text"> {{ $contacts[0]->link }}</p>
                          <a href="https://wa.me/{{ $contacts[0]->link }}" class="btn">اتصل بنا</a>
                        </div>
                      </div>
                  </div>



                <div class="col-4 ">
                  <div class="card" style="width: 14rem;">
                    <div class="ways-icon blue">
                      <i class="{{ $contacts[1]->icon }}"></i>
                    </div>
                      <div class="card-body">
                        <h5 class="card-title">للتواصل عبر {{ $contacts[1]->name }}</h5>
                        <p class="card-text"> {{ $contacts[1]->link }}  </p>
                        <a href = "mailto:{{ $contacts[1]->link }}" class="btn">Send Email</a>
                      </div>
                    </div>
                </div>

                <div class="col-4 ">
                  <div class="card" style="width: 14rem;">
                    <div class="ways-icon white">
                      <i class="{{ $contacts[2]->icon }}"></i>
                    </div>
                      <div class="card-body">
                        <h5 class="card-title">للتواصل عبر  {{ $contacts[2]->name }}</h5>
                        <p class="card-text"> {{ $contacts[2]->link }} </p>
                        <a href="tel:{{ $contacts[2]->link }}" class="btn">CLICK TO CALL</a>
                      </div>
                    </div>
                </div>
            </div>
          </div>






      <div class="row align-content-end">
        <div class="col-6">
          <div class="contact-list">
                <ul class="list-unstyled text-right">
                  <li>
                    المنيع للإستشارات
                    <i class="far fa-user"></i>
                  </li>

                  <li>
                    المملكة العربية السعودية
                    <i class="fas fa-map-marker-alt"></i>
                  </li>

                  <li>
                    0096600000000000
                    <i class="fas fa-phone-volume"></i>
                  </li>

                  <li>
                    almeen@gmail.com
                    <i class="far fa-envelope"></i>
                  </li>
                </ul>
          </div>
        </div>

        <div class="col-6">
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
      </div>
    </div>
  </div>

<!-- end contact us-->
@endsection

