<?php

namespace App\Http\Controllers;

use App\Customer;

class HomeController extends Controller
{

    public function index()
    {
        $customers = Customer::all();
        return view('customers.table', compact('customers'));
    }

    public function datatable()
    {
        $customers = Customer::all();
        return view('customers.datatable', compact('customers'));
    }

    public function ajax()
    {
        return view('customers.ajax');
    }

}
