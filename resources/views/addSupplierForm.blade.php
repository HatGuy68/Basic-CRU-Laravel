@extends('master')

@section('content')
<div class="position-relative min-vh-100 d-flex justify-content-center align-items-center bg-light dark:bg-dark py-4 pt-sm-0">
    <div class="text-center py-4 d-flex flex-column justify-content-center align-items-center">
        <h1 class="py-5">Add Data</h1>
        <form action="{{ route('addSupplier') }}" class="text-center" method="post">
            {{ csrf_field() }}
            <div class="mb-3">
                <input type="text" class="form-control" name="transport_name" placeholder="Transport Name">
            </div>
            <div class="mb-3">
                <input type="tel" class="form-control" name="contact_no" placeholder="Contact No.">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" name="email_id" placeholder="Email ID">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" name="emp_name" placeholder="Employee Name">
            </div>
            <div class="mb-3">
                <input type="tel" class="form-control" name="emp_contact_no" placeholder="Employee Contact No.">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" name="emp_designation" placeholder="Employee Designation">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" name="emp_email_id" placeholder="Employee Email ID">
            </div>
            <div class="mb-3">
                <button class="btn btn-outline-dark">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection