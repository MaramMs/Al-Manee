
<!doctype html>
<html lang="en" dir="rtl">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>{{config('app.name')}}</title>

    {{-- <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/dashboard/"> --}}
    <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">

    <!-- Bootstrap core CSS -->
<link href="{{asset('admin-assets/css/bootstrap.min.css')}}" rel="stylesheet" >
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      .sidebar {
    left: 0;

}

[dir="rtl"] .sidebar {
    left: auto;
    right: 0;
  }

  main{
      margin-right: 210px
  }
  label{
      font-size: 16px;
      font-weight: bold;
      color: blue
  }

    </style>


    <!-- Custom styles for this template -->
    <link href="{{ asset('admin-assets/css/dashboard.css')}}" rel="stylesheet">
  </head>
  <body>

<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">{{config('app.name')}}</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">


      <a class="nav-link px-3" href="#" onclick="event.preventDefault();
      document.getElementById('logout-form').submit();">Sign out</a>

      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
         @csrf
     </form>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">

     @include('layouts.slidbar')
     <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4">
       @if (session('msg'))
        <div class="alert alert-{{ session('type') }} alert-dismissible fade show">
          {{ session('msg') }}

          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

        </div>

       @endif

       @if ($errors->any() > 0)

           <div class="alert alert-danger">
             <ul class="list-unstyled">
               @foreach ($errors->all() as $error )
                      <li>{{  $error }}</li>

               @endforeach
             </ul>
           </div>

       @endif
    @yield('main')
  </main>
  </div>
</div>


  <script src="https://code.jquery.com/jquery-3.6.0.min.js" ></script>
  <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
    <script src="{{asset('admin-assets/js/bootstrap.bundle.min.js')}}" ></script>
    @yield('script')
    @yield('scripts')
    <script type="text/javascript">
        $(document).ready(function){
           $('ckeditor').ckeditor();
        });
    </script>
  </body>
</html>
