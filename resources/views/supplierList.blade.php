@extends('master')

@section('content')
<div class="position-relative min-vh-100 d-flex flex-column justify-content-center align-items-center bg-light dark:bg-dark py-4 pt-sm-0">
    <h1>List Page</h1>
    
    <div>
        <ul class="list-group">
            <li class="list-group-item disabled">Supplier: </li>
            @foreach ($suppliers as $supplier)
            <a href="/list/{{ $supplier->id }}" class="list-group-item">{{ $supplier->Transport_Name }}</a>
            @endforeach
        </ul>
    </div>
</div>
@endsection