<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    protected $mahasiswa;
   public function __construct(){
    $this -> mahasiswa = new Mahasiswa();
   }
   public function index()
   {
       $students = Student::paginate(2);
       return view('halaman.inistudent')->with('students', $students);
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
        $this->mahasiswa->create($request->all());
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
        $response['mahasiswa'] = $this->mahasiswa->find($id);
        return view('halaman.editmahasiswa')->with($response);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $mahasiswa = $this->mahasiswa->find($id);
        $mahasiswa->update(array_merge($mahasiswa->toArray(), $request->toArray()));
        return redirect('mahasiswa');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $mahasiswa = $this->mahasiswa->find($id);
        $mahasiswa->delete();
        return redirect('mahasiswa');
    }
}
