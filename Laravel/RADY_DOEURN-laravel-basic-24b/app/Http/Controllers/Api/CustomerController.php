<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customers = Customer::all();
        return $customers;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Customer::create(
            [
                'name' => $request->name,
                'age' => $request->age,
                'gender' => $request->gender,
                'phone' => $request->phone,
                'email' => $request->email
            ]
        );
        return "Customer was created successfully";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $customer = Customer::find($id);
        return $customer;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Customer::find($id)->update([
            'name' => $request->name,
            'age' => $request->age,
            'gender' => $request->gender,
            'phone' => $request->phone,
            'email' => $request->email,
        ]);
        return "Customer was updated successfully";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Customer::find($id)->delete();
        return "Customer was deleted successfully";
    }
}
