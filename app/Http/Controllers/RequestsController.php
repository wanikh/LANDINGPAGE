<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Req;

class RequestsController extends Controller
{
    
    public function index()
    {
        $data_request=Req::all();
        return view ('Req', compact('data_request'));
    }

    public function create()
    {
        return view('templates.l_request');
    }

    public function edit($id)
    {
        $data_request = Req::find($id);
        return view('edit', compact('data_request'));
    }

    public function update(Request $request, $id)
    {
        $data_request = Req::find($id);
        $data_request->update($request->all());
        return redirect()->route('home')->with('success','Data Berhasil Diupdate');
    }

    public function store (Request $request)
    {
        $table=Req::create([
            'nama_lengkap'=>$request->nama_lengkap,
            'no_whatsapp'=>$request->no_whatsapp,
            'deskripsi'=>$request->deskripsi,
            'permasalahan'=>$request->permasalahan,
            'harapan'=>$request->harapan,
            'estimasi_budget'=>$request->estimasi_budget,
            'status'=>$request->status
        ]);
        return redirect('welcome');
    }

    public function delete($id) 
    {
        Req::where('id',$id)->delete();
        return redirect ('view');
    }
}
