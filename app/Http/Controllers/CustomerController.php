<?php

namespace App\Http\Controllers;

use App\Models\Customers;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CustomerController extends Controller
{
    public function index(){
        $customers = Customers::all();
        return view('Customer.index', compact('customers'));
    }
    public function create(){

        return view('Customer.create');
    }

    public function store(Request $request){

        $avatar = $request->file('avatar');
        $path = $avatar->store('avatars','public');
        $customer = new Customers;
        $customer->first_name = $request->first_name;
        $customer->last_name = $request->last_name;
        $customer->birth_date = $request->birth_date;
        $customer->email = $request->email;
        $customer->path_avatar = $path;
        $customer->save();

        return redirect()->route('customer.index');
    }
}
