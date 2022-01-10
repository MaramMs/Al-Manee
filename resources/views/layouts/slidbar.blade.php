
<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
      <ul class="nav flex-column">
        {{-- <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('home') ? 'active' : ''}}" aria-current="page" href="{{ route('home.index') }}">
            <span data-feather="home"></span>
            الرئيسية
          </a>
        </li> --}}
        <li class="nav-item">
          <a class="nav-link  {{ request()->routeIs('services') ? 'active' : ''}} " href="{{ route('services.index')}}">
            <span data-feather="file"></span>
              الخدمات
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link  {{ request()->routeIs('examples') ? 'active' : ''}} " href="{{ route('examples.index')}}">
            <span data-feather="shopping-cart"></span>
             نماذج الاعمال
          </a>
        </li>
        <li class="nav-item">
            <a class="nav-link  {{ request()->routeIs('images') ? 'active' : ''}} " href="{{ route('images.index')}}">
              <span data-feather="shopping-cart"></span>
            صور
            </a>
          </li>
        <li>
            <a class="nav-link" href="{{ route('changePasswordGet') }}"> تغيير كلمة السر </a>
        </li>

        {{-- <li class="nav-item">
            <a class="nav-link " href="{{ route('settings.index') }}">
              <span data-feather="shopping-cart"></span>
            تتغير كلمة السر
            </a>
          </li> --}}



      </ul>


    </div>
  </nav>

