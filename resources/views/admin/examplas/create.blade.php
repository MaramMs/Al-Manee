@extends('layouts.admin-layout')
@section('main')
<div class="d-flex justify-content-between align-items-center mt-2">
    <h1 class="h2"> إضافة نموذج عمل جديد</h1>
   <a class="btn btn-primary px-5" href="{{ route('examples.index') }}"> رجوع </a>
</div>

<form action="{{ route('examples.store') }}" method="POST" enctype="multipart/form-data" id="upload-image">
    @csrf
    <div class="mb-3">
        <label for="" class=" mb-2 "> صورة  نموذج العمل</label>
        <input type="file"  id="image" name="src" class="form-control" placeholder="صورة النموذج">
    </div>
    <div class="mb-3">
        <label for="" class="mb-2">وصف  نموذج العمل </label>
        <textarea name="content" class="ckeditor form-control" rows="5" placeholder="اوصف خدمتك"></textarea>

    </div>
    <div class="mb-3">
        <label for="" class="mb-2"> الخدمات</label>

        <select name="service_id" class="form-control">
            <option selected disabled> اختر الخدمة المرادة...</option>
            @foreach ($services as $service)
            <option value="{{ $service->id }}">{{ $service->title}}</option>
            @endforeach
        </select>

        {{-- <input type="text" name="price" placeholder="Price" class="form-control"> --}}
    </div>
    <button class="btn btn-success ">Save</button>

</form>


@stop
