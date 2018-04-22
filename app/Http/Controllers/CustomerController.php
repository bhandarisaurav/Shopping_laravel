<?php
/**
 * Created by PhpStorm.
 * User: Saurav
 * Date: 4/7/2018
 * Time: 9:09 AM
 */

namespace App\Http\Controllers;


use App\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class Customercontroller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $customers= Customer::all();
        Log::debug("customers retrieved",['size'=>count($customers)]);
        Log::info("Successfully Retrieved Customers");
        return view('customer.index',compact('customers'));
    }
    public function show($id)
    {
        return view('customer.show', ['customer'=>Customer::findOrFail($id)]);
    }

    public function create(){
        return view('customer.create');
    }

    public function store(Request $request)
    {
        $customer= Customer::create($request->all());
        return redirect('customer/show/'. $customer->customer_id);
    }



}