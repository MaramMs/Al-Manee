@extends('layouts.admin-layout')
@section('main')
<div class="d-flex justify-content-between align-items-center mt-5">
    <h1 class="h2">صفحة نماذج الاعمال </h1>
   <a class="btn btn-primary px-5" href="{{ route('examples.create') }}"> <i class="fas fa-plus"></i>  إضافة </a>
</div>


<table class="table table-bordered mt-4 page-content-wrapper">
    <tr>
        <th>ID</th>
        <th>  صورة عن نموذج العمل</th>
        <th> وصف  نموذج العمل </th>
        <th> تاريخ الانشاء</th>
        <th> تاريخ التحديث </th>
        <th> العمليات </th>
    </tr>

        @foreach ( $examples  as $example)
        <tr>
            <td>{{ $example->id }}</td>
            <td>{{ $example->src}}</td>
            <td>{{ $example->content}}</td>
            <td>{{ $example->created_at->diffForHumans() }}</td>
            <td>{{ $example->updated_at->diffForHumans() }}</td>
            <td>
                <a href="{{ route('examples.edit' ,$example->id)  }}" class="btn btn-primary btn-sm"> <i class="fas fa-edit"></i> </a>
                <form class="d-inline" action="{{ route('examples.destroy',$example->id) }}" method="POST">
                 @csrf
                 @method("delete")
                  <button  onclick="return confirm('Are you sure ?')"class="btn btn-danger btn-sm"> <i class="fas fa-times"></i> </button>
                </form>

            </td>

        </tr>
        @endforeach


</table>

@stop
