<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 ,shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" >
    <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="/admin-assets/css/style.css">
    <title>AL-Manee</title>
</head>
<body>

 @yield('content')

 <!-- start footer-->
<div class="footer">
    <div class="container">
      <div class="footer-info">
        <div class="row">
          <div class="col-xs-12 col-md-3">
            <div class="footer-img">
              <img  src="{{ $title_image ? $title_image->image : 'https://i.ytimg.com/vi/opwGsUHVrNI/maxresdefault.jpg'  }}" alt="">
            </div>

            <!-- <div class="soail">
              <ul class="list-unstyled d-flex">
                <li><i class="fab fa-twitter"></i></li>
                <li><i class="fab fa-whatsapp"></i></li>

              </ul>
            </div> -->

          </div>
          <div class="col-xs-12 col-md-3 mb-5">
          <h3>خدماتنا</h3>
          <div class="footer-list">
            <ul class="list-unstyled">
                @foreach ($services as $service )
                   <li> {{ $service->title }} </li>
                @endforeach
              {{-- <li>بناء الأفكار</li>
              <li>إعداد نظاقات العمل</li>
              <li>أدارة المشاريع</li> --}}
            </ul>
            {{-- <ul class="list-unstyled">
              <li>بناء الأفكار</li>
              <li>إعداد نظاقات العمل</li>
              <li>أدارة المشاريع</li>
            </ul> --}}
          </div>
          </div>
          <div class="col-3 small">
            <h3>اتصل بنا</h3>
            <p>الوصول للتواصل</p>
          </div>

          <div class=" col-3 small">
            <h3>من نحن</h3>
            <p>المنيع للإستشارات</p>


            <p>سيرة ذاتية</p>
          </div>
        </div>
      </div>



  </div>



  </div>
  <div class="copy">
    <div class="container-fluid">
      جميع الحقوق محفوظة
    </div>

  </div>

  <!-- end footer-->
        <script src="js/script.js"></script>
        <script src="js/all.js"></script>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" ></script>
  </body>
  </html>
