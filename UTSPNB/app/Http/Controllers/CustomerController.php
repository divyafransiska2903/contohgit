<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    protected $customer;
    public function __construct(){
    $this-> customer = new Customer();

    }
    
    
    public function index()
    {
        $customer = $this->customer->all();
        return view('halaman.inicustomer')->with('customer', $customer);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $requestData = $request->validate([
            'nama' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg|max:3048',
            'telepon' => 'required',
            'jenis_kelamin' => 'required',
            'tgl_lahir' => 'required',
            'email' => 'required|email',
             
        ]);
    
        // Upload foto
        $fotoName = $request->foto->getClientOriginalName(); 
        $request->foto->move(public_path('uploads/foto'), $fotoName);
        $requestData['foto'] = $fotoName; 
    
        $this->customer->create($requestData);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $response['customer'] = $this->customer->find($id);
        return view('halaman.editcustomer')->with($response);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $student = $this->student->find($id);

        $requestData = $request->validate([
            'nama' => 'required',
            'telepon' => 'required',
            'jenis_kelamin' => 'required',
            'tgl_lahir' => 'required',
            'email' => 'required|email',
        ]);
    
        // Jika ada foto yang diunggah
        if ($request->hasFile('foto')) {
            // Hapus foto lama
            if (file_exists(public_path('uploads/foto/'.$student->foto))) {
                unlink(public_path('uploads/foto/'.$student->foto));
            }
            // Upload foto baru
            $fotoName = $request->foto->getClientOriginalName();  
            $request->foto->move(public_path('uploads/foto'), $fotoName);
            $requestData['foto'] = $fotoName;
        }
    
    
        $customer->update($requestData);
        return redirect('customer');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $customer = $this->customer->find($id);
        $customer->delete();
        return redirect('customer');
    }
}
