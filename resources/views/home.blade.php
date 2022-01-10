
@extends('layouts.admin-layout')

@section('main')

<div class="container">
    <div class="row">
        <div class="col-6">
            <div class="card bg-info" style="width: 18rem;">
                <div class="card-body font-weight-bold">
                  <h5 class="card-title text-white font-weight-bold">  عدد الخدمات </h5>
                  <p class="card-text text-white font-weight-bold">
                      {{ $services[0]->count() }}</p>
                  <a href="{{ route('services.index') }}" class="btn text-white"> المزيد</a>
                </div>
              </div>
        </div>
        <div class="col-6">
            <div class="card bg-success" style="width: 18rem;">
                <div class="card-body text-white font-weight-bold">
                  <h5 class="card-title text-white">  عدد نماذج الاعمال </h5>
                  <p class="card-text"> {{ $examples[0]->count()}} </p>
                  <a href="{{ route('examples.index') }}" class="btn  text-white "> المزيد</a>
                </div>
              </div>
        </div>
    </div>

    <div class="setting pt-5">
        <form>
            <div class="form-group row mb-3">
                <label for="staticEmail" class="col-sm-2 col-form-label"> اسم الادمن::</label>
                <div class="col-sm-10">
                  <input type="text" readonly class="form-control  w-50" id="staticEmail" value="{{ Auth::user()->name}}">
                </div>
              </div>
            <div class="form-group row  mb-3">
              <label for="staticEmail" class="col-sm-2 col-form-label">  البريد الالكتروني::</label>
              <div class="col-sm-10">
                <input type="text"  readonly class="form-control  w-50" id="staticEmail" value="{{ Auth::user()->email }}">
              </div>
            </div>
          </form>
    </div>




</div>

@stop


    @section('script')

                <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
                <script src="{{asset('admin-assets/js/dashboard.js')}}"></script>

                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

 @stop

