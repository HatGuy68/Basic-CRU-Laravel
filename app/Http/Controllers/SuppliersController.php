<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\supplier;

class SuppliersController extends Controller
{
    public function showForm() { 
        return view('addSupplierForm');
    }

    public function addSupplier(Request $request) {
        // \Log::info(json_encode($request->all()));
        $newSupplier = new Supplier;

        $newSupplier->Transport_Name = $request->transport_name;
        $newSupplier->Contact_No = $request->contact_no;
        $newSupplier->Email_ID = $request->email_id;
        $newSupplier->Employee_Name = $request->emp_name;
        $newSupplier->Employee_Contact_No = $request->emp_contact_no;
        $newSupplier->Employee_Designation = $request->emp_designation;
        $newSupplier->Employee_Email_Id = $request->emp_email_id;

        $newSupplier->save();
        
        return redirect('/');
    }

    public function showAllSuppliers(){

        $supplier = new Supplier;
        $suppliers = $supplier->getAllSuppliers();

        return view('supplierList', ['suppliers' => $suppliers]);
    }

    public function showSupplierDetails( $supplierID ) {
        $supplier = new Supplier;
        $supplierData = $supplier->getsupplier( $supplierID );
        return view('viewSupplier')->with('supplierData',$supplierData);
    }

    public function editSupplier( Request $request ) {
        $supplier = Supplier::find($request->id);

        $supplier->Transport_Name = $request->transport_name;
        $supplier->Contact_No = $request->contact_no;
        $supplier->Email_ID = $request->email_id;
        $supplier->Employee_Name = $request->emp_name;
        $supplier->Employee_Contact_No = $request->emp_contact_no;
        $supplier->Employee_Designation = $request->emp_designation;
        $supplier->Employee_Email_Id = $request->emp_email_id;

        $supplier->save();
        
        return redirect('/list/'.$request->id);
    }

    public function showEditForm( $supplierID ) {
        $supplier = new Supplier;
        $supplierData = $supplier->getsupplier( $supplierID );
        return view('editSupplierForm')->with('supplierData',$supplierData);
    }
}
