<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contact;

class contactsController extends Controller
{
    public function index()
    {
        return view('welcome');
    }


    public function store(Request $request)
    {
        $table=contact::create([
            'full_name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'message'=>$request->message
        ]);
        return view ('welcome');
    }
}
