<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Satuan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Databarang extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $halamanPage = "list barang index";
        $barang = Barang::all();
        return view('barang.index',[
            'halamanPage'=>$halamanPage,
            'barangs'=>$barang
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $halamanPage = 'tambah barang';
        $satuan = Satuan::all();
        return  view('barang.create',[
            'halamanPage'=>$halamanPage,
            'satuans'=>$satuan
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
            'kode_barang'=>'required',
            'nama_barang'=>'required',
            'harga_barang'=>'required',
            'deskripsi_barang'=>'required'
        ], $messages);
        if ($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $barang = New Barang();
        $barang->kode_barang = $request->kode_barang;
        $barang->nama_barang = $request->nama_barang;
        $barang->harga_barang = $request->harga_barang;
        $barang->deskripsi_barang = $request->deskripsi_barang;
        $barang->satuan_id = $request->satuan;
        $barang->save();
        return redirect()->route('barang.index');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $halamanPage = 'liat barang';
        $barang = Barang::find($id);
        return view('barang.show',[
            'halamanPage'=>$halamanPage,
            'barangs'=>$barang
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $halamanPage = 'edit barang';
        $barang = Barang::find($id);
        $satuan = Satuan::all();
        return view('barang.edit',[
            'halamanPage' => $halamanPage,
            'barang' => $barang,
            'Satuans' => $satuan
        ]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $messages = [
            'required' => 'Attribute harus diisi',
        ];
        $validator = Validator::make($request->all(), [
            'kode_barang'=>'required',
            'nama_barang'=>'required',
            'harga_barang'=>'required',
            'deskripsi_barang'=>'required'
        ], $messages);
        if ($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $barang = Barang::find($id);
        $barang->kode_barang = $request->kode_barang;
        $barang->nama_barang = $request->nama_barang;
        $barang->harga_barang = $request->harga_barang;
        $barang->deskripsi_barang = $request->deskripsi_barang;
        $barang->satuan_id = $request->satuan;
        $barang->save();
        return redirect()->route('barang.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Barang::find($id)->delete();
        return redirect()->route('barang.index');
    }
}
