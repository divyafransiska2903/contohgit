<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perbaikan;

class PerbaikanController extends Controller
{
   protected $perbaikan;
   public function __construct(){
    $this -> perbaikan = new Perbaikan();
   }



    public function index()
    {
        $response['perbaikan'] = $this->perbaikan->get();
        return view('halaman.iniperbaikan')->with($response);
    }

   
    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
        $this->perbaikan->create($request->all());
        return redirect()->back();
    }

 
    public function show(string $id)
    {
        //
    }

    
    public function edit(string $id)
    {
        $response['perbaikan'] = $this->perbaikan->find($id);
        return view('halaman.editperbaikan')->with($response);
    }

  
    public function update(Request $request, string $id)
    {
        $perbaikan = $this->perbaikan->find($id);
        $perbaikan->update(array_merge($perbaikan->toArray(), $request->toArray()));
        return redirect('perbaikan');
    }

   
    public function destroy(string $id)
    {
        $perbaikan = $this->perbaikan->find($id);
        $perbaikan->delete();
        return redirect('perbaikan');
    }
}
