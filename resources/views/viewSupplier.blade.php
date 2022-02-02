@extends('master')

@section('content')

<div class="position-relative min-vh-100 d-flex justify-content-center align-items-center bg-light dark:bg-dark py-4 pt-sm-0">
    <div>
        <div class="mb-3">
            <label name="transport_name">Transport Name: {{ $supplierData[0]->Transport_Name }}</label>
        </div>
        <div class="mb-3">
            <label name="contact_no">Contact No: {{ $supplierData[0]->Contact_No }}</label>
        </div>
        <div class="mb-3">
            <label name="emp_name">Employee Name: {{ $supplierData[0]->Employee_Name }}</label>
        </div>
        <div class="mb-3">
            <label name="emp_contact_no">Employee Contact No: {{ $supplierData[0]->Employee_Contact_No }}</label>
        </div>
        <div class="mb-3">
            <label name="emp_designation">Employee Designation: {{ $supplierData[0]->Employee_Designation }}</label>
        </div>
        <div class="mb-3">
            <label name="emp_email_id">Employee Email Id: {{ $supplierData[0]->Employee_Email_Id }}</label>
        </div>
        <div class="mb-3">
            <a href="/supplier/{{ $supplierData[0]->id }}/edit" class="btn btn-outline-dark">Edit</a>
        </div>
    </div>
</div>


@endsection