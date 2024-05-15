<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ruangan;

class RuanganController extends Controller
{
    protected $ruangan;
    public function __construct(){
        $this->ruangan = new Ruangan();
        
    }

    
    public function index()
    {
        $response['ruangan'] = $this->ruangan->get();
        return view('halaman.iniruangan')->with($response);

    }

    public function store(Request $request)
    {
      
        $this->ruangan->create($request->all());
        return redirect()->back();
    }

    public function edit(string $id)
    {
        $response['ruangan'] = $this->ruangan->find($id);
        return view('halaman.editruangan')->with($response);
    }

    public function update(Request $request, string $id)
    {
        $ruangan = $this->ruangan->find($id);
        $ruangan->update(array_merge($ruangan->toArray(), $request->toArray()));
        return redirect('ruangan');
    }

    public function destroy(string $id)
    {
        $ruangan = $this->ruangan->find($id);
        $ruangan->delete();
        return redirect('ruangan');
    }






    
}
