@extends('master')

@section('content')

<div class="position-relative min-vh-100 d-flex justify-content-center bg-light dark:bg-dark py-4 pt-sm-0">
    <div class="text-center py-4">
        <form action="{{ route('editSupplier') }}" class="text-center" method="post">
            <h1 class="py-3">Add Data</h1>
            {{ csrf_field() }}
            <input type="hidden" class="form-control" name="id" value="{{ $supplierData[0]->id }}">
            <div class="mb-3 row">
                <label for="transport_name">Transport Name</label>
                <input type="text" class="form-control" name="transport_name" value="{{ $supplierData[0]->Transport_Name }}">
            </div>
            <div class="mb-3 row">
                <label for="contact_no">Contact No.</label>
                <input type="tel" class="form-control" name="contact_no" value="{{ $supplierData[0]->Contact_No }}">
            </div>
            <div class="mb-3 row">
                <label for="email_id">Email ID</label>
                <input type="text" class="form-control" name="email_id" value="{{ $supplierData[0]->Email_ID }}">
            </div>
            <div class="mb-3 row">
                <label for="emp_name">Employee Name</label>
                <input type="text" class="form-control" name="emp_name" value="{{ $supplierData[0]->Employee_Name }}">
            </div>
            <div class="mb-3 row">
                <label for="emp_contact_no">Employee Contact No.</label>
                <input type="tel" class="form-control" name="emp_contact_no" value="{{ $supplierData[0]->Employee_Contact_No }}">
            </div>
            <div class="mb-3 row">
                <label for="emp_designation">Employee Designation</label>
                <input type="text" class="form-control" name="emp_designation" value="{{ $supplierData[0]->Employee_Designation }}">
            </div>
            <div class="mb-3 row">
                <label for="emp_email_id">Employee Email ID</label>
                <input type="text" class="form-control" name="emp_email_id" value="{{ $supplierData[0]->Employee_Email_Id }}">
            </div>
            <div class="mb-3">
                <button class="btn btn-outline-dark">Submit</button>
            </div>
        </form>
    </div>
</div>

@endsection