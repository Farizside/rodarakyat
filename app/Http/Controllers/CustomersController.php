<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    Public function index(){
        $customers = User::where('type', 0)->get();
        return view('admin.customers', compact(['customers']));
    }
}
