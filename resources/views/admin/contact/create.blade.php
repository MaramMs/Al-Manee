@extends('layouts.admin-layout')
@section('main')
<div class="d-flex justify-content-between align-items-center mt-2">
    <h1 class="h2"> إضافة طريقة تواصل</h1>
   <a class="btn btn-primary px-5" href="{{ route('contacts.index') }}"> رجوع </a>
</div>

<form action="{{ route('contacts.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="" class="mb-2">   طريقة تواصل الاجتماعي  </label>
        <input type="text" name="name"  placeholder="اسم الخدمة" class="ckeditor form-control">
    </div>

    <div class="mb-3">
    <label for="" class="mb-2">  ايقونات</label>

   <select class="form-control" name="icon">
    <option value="far fa-envelope">فيسبوك </option>
    <option value="far fa-envelope">  واتس اب</option>
    <option value="far fa-envelope">  ايميل </option>
    <option value="far fa-envelope">  مكالمة هاتف</option>
    </select>
    </div>


    <div class="mb-3">
        <label for="" class="mb-2">  الرابط </label>
        <input type="text" name="link"  placeholder="اسم الخدمة" class="form-control">
    </div>


    <button class="btn btn-success ">Save</button>

</form>


@stop
