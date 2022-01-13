<!-- Start Header-->
<header
style=" background-image: url({{ $header_image ? $header_image->image : 'https://i.ytimg.com/vi/opwGsUHVrNI/maxresdefault.jpg'  }});">
      <!-- navbar-light bg-light -->
      <div class="layout"></div>
      <nav class="navbar  navbar-expand-lg d-flex navbar-dark">
          <a class="navbar-brand " href="#">
              <img src="{{ $title_image ? $title_image->image : 'https://i.ytimg.com/vi/opwGsUHVrNI/maxresdefault.jpg'  }}"  alt="">
          </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse  " id="navbarSupportedContent">
          <ul class="navbar-nav ">
            <li class="nav-item active">
              <a class="nav-link" href="{{ route('index') }}">الرئيسية<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle"id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                خدماتنا
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <div class="row">

                      @foreach ($services as $service )
                      <div class="col-xs-12 col-md-6">
                        <a class="dropdown-item" href="service/{{$service->id}}">
                          <img src="{{ $service->img }}" alt="">
                           {{$service->title}}
                        </a>
                      </div>
                      @endforeach



                  </div>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('about') }}">من نحن </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('contact-get') }}">اتصل بنا </a>
              </li>


          </ul>
        </div>
      <div>
            <button id="search_btn"><i class="fa fa-search " aria-hidden="true"></i> </button>
      </div>

          <div class="searchbar" >
          <form class="form-inline my-2 my-lg-0"  method="GET" action="{{ url('/search') }}">
            @csrf
                 <div class="togglesearch d-flex">
                    <button id="close_btn"> <span class="closebtn" title="Close Overlay">×</span></button>
                    <input type="text" class="form-control w-50" name="search" id="srarch123" placeholder=""/>
                    <input type="submit"   class="form-control w-5 "value="Search"/>
                </div>
          </form>

      </div>
      <div class="left">
        <ul class="list-unstyled d-flex flex-row-reverse ">

          <li class="mr-3">
            <i class="fas fa-phone ml-1"></i>

                {{ $contacts[0]->link }}


          </li>

          <li>
            <i class="fab fa-whatsapp ml-1 whatsapp"></i>

            {{ $contacts[0]->link }}
          </li>


        </ul>
      </div>
      </nav>


      <div class="info">
        {{-- <h1>المنيع للإستشارات</h1> --}}
        <p>
            {!! $header_image ? $header_image->content  : 'sdfgsdfgsdfgsdfg' !!}
        </p>
           {{-- <a class="mt-10" href="tel:{{ $contacts[2]->link }}">اتصل بنا</a> --}}
           <a href="https://wa.me/{{ $contacts[0]->link }}"  class="icon-what"><i class="fab fa-whatsapp ml-1 whatsapp"></i></a>
      </div>

    </header>
<script>

document.getElementById("search_btn").addEventListener("click", (event)=>{
    event.preventDefault()
document.getElementsByClassName("searchbar")[0].style.display = "block";
});

document.getElementById("close_btn").addEventListener("click", (event)=>{
    event.preventDefault()
document.getElementsByClassName("searchbar")[0].style.display = "none";
});


</script>

   <!-- End Header-->
