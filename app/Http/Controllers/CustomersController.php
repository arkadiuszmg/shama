<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Http\Requests\CustomerRequest;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $customers = Customer::orderBy('id', 'DESC')->paginate(10);

        return view ('customers.index', [
            'customers'=> $customers
        ]);
    }

    public function create ()
    {
        return view('customers.create', compact('customers'));
    }

    public function store (CustomerRequest $request)
    {
        Customer::create($request->all());
        return redirect(route('customers.index'));
    }

    public function edit(Customer $customer)
    {
        return view('customers.edit', compact('customer'));
    }

    public function update(CustomerRequest $request, Customer $customer)
    {
        $customer->update($request->all());
        return redirect(route('customers.index'));
    }

    public function destroy(Customer $customer)
    {
        //dd($category);
        $customer->delete();
        return redirect('customers');
    }
}
