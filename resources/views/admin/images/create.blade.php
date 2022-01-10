@extends('layouts.admin-layout')
@section('main')
<div class="d-flex justify-content-between align-items-center mt-2">
    <h1 class="h2">  إضافة صور  </h1>
   <a class="btn btn-primary px-5" href="{{ route('images.index') }}"> رجوع </a>
</div>

<form action="{{ route('images.store') }}" method="POST" enctype="multipart/form-data" id="upload-image">
    @csrf
    <div class="mb-3">
        <label for="" class=" mb-2 "> اسم الصورة </label>
        <input type="text"  id="image" name="name" class="form-control" placeholder="صورة ج">
    </div>

    <div class="mb-3">
        <label for="" class=" mb-2 ">  اختر الصورة </label>
        <input type="file"  id="image" name="image" class="form-control" placeholder="صورة ج">
    </div>

    <div class="mb-3">
        <label for="" class="mb-2">وصف  نموذج العمل </label>
        <textarea name="content" class="ckeditor form-control" rows="5" placeholder="اوصف خدمتك"></textarea>

    </div>

    <button class="btn btn-success ">Save</button>

</form>


@stop
