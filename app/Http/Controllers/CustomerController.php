<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $data = User::select('namaUser','noHP','email','role')->where('role','=','user')->get();
        return view('admin.customer.index', compact('data'));
    }
}
