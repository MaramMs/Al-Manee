  <!-- Start Header-->
  <header>
    <!-- navbar-light bg-light -->
    <div class="layout"></div>
    <nav class="navbar  navbar-expand-lg">
      <div class="right d-flex ">
        <a class="navbar-brand " href="#">
          <img src="{{ $images[0]->image }}"  alt="">
      </a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse  " id="navbarSupportedContent">
        <ul class="navbar-nav ">
          <li class="nav-item active">
            <a class="nav-link" href="index.html">الرئيسية<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="services.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
              خدماتنا
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about-us.html">من نحن </a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="contact.html">اتصل بنا </a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <i class="fas fa-search"></i>

          <!-- <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
           <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> -->
        </form>

      </div>
      </div>

      <div class="left">
        <ul class="list-unstyled d-flex flex-row-reverse ">

          <li class="mr-3">
            <i class="fas fa-phone ml-1"></i>
            0122000000000


          </li>

          <li>
            <i class="fab fa-whatsapp ml-1 whatsapp"></i>
            0120000000000

          </li>


        </ul>
      </div>
    </nav>

    <div class="info">
      <h1>المنيع للإستشارات</h1>
      <h2>Almanee Consultant </h2>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit quae
        ex expedita deleniti, vel impedit a blanditiis earum dicta exercitationem,
         fugiat voluptatem rem quas dolore, corporis culpa maxime eligendi neque?</p>

         <a class="mt-10"href="">اتصل بنا</a>
    </div>

  </header>
 <!-- End Header-->
