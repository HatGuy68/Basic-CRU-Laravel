@extends('master')

@section('content')
<div class="container min-vh-100 d-flex flex-column justify-content-center">
    <div class="w-50 d-flex justify-content-between">
        <h1>Supplier Name: </h1>
        <a href="form" class="btn btn-outline-dark my-auto">Add Supplier</a>
    </div>
    <div class="w-75">
        <ul class="list-group py-4">
            @foreach ($suppliers as $supplier)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <a href="supplier/{{ $supplier->id }}">{{ $supplier->Transport_Name }}</a>
                <a class="btn btn-primary" href="supplier/{{ $supplier->id }}/edit">Edit</a>
            </li>
            @endforeach
        </ul>
    </div>
</div>
@endsection