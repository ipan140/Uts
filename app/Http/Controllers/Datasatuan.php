<?php

namespace App\Http\Controllers;

use App\Models\Satuan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Datasatuan extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $halamanPage = "list satuan";
        $satuan = Satuan::all();
        return view('satuan.index',[
            'halamanPage'=>$halamanPage,
            'satuans'=>$satuan
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $halamanPage = 'Tambah satuan';
        $barang = Satuan::all();
        return  view('satuan.create',[
            'halamanPage'=>$halamanPage,
            'barangs'=>$barang
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages = [
            'required' => 'Attribute harus diisi',
        ];
        $validator = Validator::make($request->all(), [
            'kode_satuan'=>'required',
            'nama_satuan'=>'required',
        ], $messages);
        if ($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $satuan = New Satuan();
        $satuan->kode_satuan = $request->kode_satuan;
        $satuan->nama_satuan = $request->nama_satuan;
        $satuan->save();
        return redirect()->route('satuan.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $halamanPage = 'liat barang';
        $satuan = Satuan::find($id);
        return view('satuan.show',[
            'halamanPage'=>$halamanPage,
            'satuans'=>$satuan
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
       
    }

    public function destroy(string $id)
    {
        
    }
}
