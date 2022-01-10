@extends('layouts.admin-layout')
@section('main')
<div class="d-flex justify-content-between align-items-center mt-2">
    <h1 class="h2"> إضافة خدمة جديدة</h1>
   <a class="btn btn-primary px-5" href="{{ route('services.index') }}"> رجوع </a>
</div>

<form action="{{ route('services.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="" class="font-weight-bold mb-2 ">نبذة  عن الخدمة</label>
        <textarea class=" ckeditor form-control" name="brief" rows="3" placeholder="نبذة مختصرة عن الخدمة"></textarea>
        {{-- <input type="text" name="title" placeholder="Title" class="form-control"> --}}
    </div>
    <div class="mb-3">
        <label for="" class="mb-2">  اسم الخدمة </label>
        <input type="text" name="title"  placeholder="اسم الخدمة" class="ckeditor form-control">
    </div>
    <div class="mb-3">
        <label for="" class="mb-2">  وصف الخدمة </label>
        <textarea name="content" class="ckeditor form-control" rows="5" placeholder="اوصف خدمتك"></textarea>

    </div>

    <div class="mb-3">
        <label for="" class="mb-2">  مميزات الخدمة </label>
        <textarea name="features" class="ckeditor form-control" rows="5" placeholder="اوصف خدمتك"></textarea>

    </div>

    <button class="btn btn-success ">Save</button>

</form>


@stop
