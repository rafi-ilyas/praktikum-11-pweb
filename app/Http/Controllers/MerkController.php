<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Merk;

class MerkController extends Controller
{
    function index()
    {
        $merkData = Merk::get();
        return view('pages.merk.index', ['merkData' => $merkData]);
    }

    function create()
    {
        return view('pages.merk.create');
    }

    function store(Request $request)
    {
        $merkData = new Merk;
        $merkData->merk = $request->merk;
        $merkData->save();

        return redirect()->to('/merk')->with('success', 'Data Merk sukses disimpan');
         
<<<<<<< HEAD
=======
    }

    function edit($id)
    {
        $merkData = Merk::find($id);
        return view('pages.merk.edit', ['merkData' => $merkData]);  
    }

    function update($id, Request $request)
    {
        $merkData = Merk::find($id);
        $merkData->merk = $request->merk; //request itu sama seperti $_POST atau $_GET
        $merkData->save();

        return redirect()->to('/merk')->with('success', 'data berhasil di update');
    }

    function delete($id)
    {
        $merkData = Merk::find($id);
        $merkData->delete();
        
        return redirect()->to('/merk')->with('success', 'data berhasil dihapus');
>>>>>>> a56d822482a5e6096eadd6d4069ef6461fa0b77f
    }
}
