@extends('layouts.admin-layout')
@section('main')
<div class="d-flex justify-content-between align-items-center mt-5">
    <h1 class="h2">صفحة الخدمات </h1>
   <a class="btn btn-primary px-5" href="{{ route('services.create') }}"> <i class="fas fa-plus"></i>  إضافة </a>
</div>


<table class="table table-bordered mt-4 page-content-wrapper">
    <tr>
        <th>ID</th>
        <th>  النبذة </th>
        <th> عنوان الخدمة</th>
        <th> وصف الخدمة </th>
        <th> صورة الخدمة  </th>
        <th> مميزات الخدمة</th>
        <th> تاريخ الانشاء</th>
        <th> تاريخ التحديث </th>
        <th> العمليات </th>
    </tr>

        @foreach ( $services  as $service)
        <tr>
            <td>{{ $service->id }}</td>
            <td>{{ $service->brief}}</td>
            <td>{{ $service->title}}</td>
            <td>{{ $service->content}}</td>
            <td>{{ $service->img}}</td>
            <td>{{ $service->features}}</td>
            <td>{{ $service->created_at->diffForHumans() }}</td>
            <td>{{ $service->updated_at->diffForHumans() }}</td>
            <td>
                <a href="{{ route('services.edit' ,$service->id)  }}" class="btn btn-primary btn-sm"> <i class="fas fa-edit"></i> </a>
                <form class="d-inline" action="{{ route('services.destroy',$service->id) }}" method="POST">
                 @csrf
                 @method("delete")
                  <button  onclick="return confirm('Are you sure ?')"class="btn btn-danger btn-sm"> <i class="fas fa-times"></i> </button>
                </form>

            </td>

        </tr>
        @endforeach


</table>

@stop
