@extends('layouts.admin-layout')
@section('main')
<div class="d-flex justify-content-between align-items-center mt-5">
    <h1 class="h2">  تواصل معنا  </h1>
   <a class="btn btn-primary px-5" href="{{ route('contacts.create') }}"> <i class="fas fa-plus"></i>  إضافة </a>
</div>


<table class="table table-bordered mt-4 page-content-wrapper">
    <tr>
        <th>ID</th>
        <th>  طريقة التواصل </th>
        <th>  الاسم  </th>
        <th>  الرابط </th>
        <th>  تاريخ الاضافة </th>
        <th> تاريخ التحديث </th>
        <th> العمليات </th>
    </tr>

        @foreach ( $contacts  as $contact)
        <tr>
            <td>{{ $contact->id }}</td>
            <td>{{ $contact->icon}}</td>
            <td>{{ $contact->name}}</td>
            <td>{{ $contact->link}}</td>
            <td>{{ $contact->created_at->diffForHumans() }}</td>
            <td>{{ $contact->updated_at->diffForHumans() }}</td>
            <td>
                <a href="{{ route('contacts.edit' ,$contact->id)  }}" class="btn btn-primary btn-sm"> <i class="fas fa-edit"></i> </a>
                <form class="d-inline" action="{{ route('contacts.destroy',$contact->id) }}" method="POST">
                 @csrf
                 @method("delete")
                  <button  onclick="return confirm('Are you sure ?')"class="btn btn-danger btn-sm"> <i class="fas fa-times"></i> </button>
                </form>

            </td>

        </tr>
        @endforeach


</table>

@stop
