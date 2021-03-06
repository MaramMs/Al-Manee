@extends('layouts.admin-layout')
@section('main')
<div class="d-flex justify-content-between align-items-center mt-5">
    <h1 class="h2">صفحة نماذج الاعمال </h1>
   <a class="btn btn-primary px-5" href="{{ route('images.create') }}"> <i class="fas fa-plus"></i>  إضافة </a>
</div>


<table class="table table-bordered mt-4 page-content-wrapper">
    <tr>
        <th>ID</th>
        <th>  اسم الصورة </th>
        <th> مسار الصورة </th>
        <th> وصف الصورة </th>
        <th> تاريخ الانشاء</th>
        <th> تاريخ التحديث </th>
        <th> العمليات </th>
    </tr>

        @foreach ( $images  as $image)
        <tr>
            <td>{{ $image->id }}</td>
            <td>{{ $image->image}}</td>
            <td>{{ $image->name}}</td>
            <td>{{ $image->content}}</td>
            <td>{{ $image->created_at->diffForHumans() }}</td>
            <td>{{ $image->updated_at->diffForHumans() }}</td>
            <td>
                {{-- <a href="{{ route('examples.edit' ,$image->id)  }}" class="btn btn-primary btn-sm"> <i class="fas fa-edit"></i> </a> --}}
                <form class="d-inline" action="{{ route('images.destroy',$image->id) }}" method="POST">
                 @csrf
                 @method("delete")
                  <button  onclick="return confirm('Are you sure ?')"class="btn btn-danger btn-sm"> <i class="fas fa-times"></i> </button>
                </form>

            </td>

        </tr>
        @endforeach


</table>

@stop
