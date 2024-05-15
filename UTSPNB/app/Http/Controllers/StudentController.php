<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{
    protected $student;
    public function __construct(){
    $this-> student = new Student();

    }


    public function index()
    {
       
        $student = $this->student->all();
        return view('halaman.inistudent')->with('student', $student);


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
             'nim' => 'required',
             'nama' => 'required',
             'email' => 'required|email',
             'foto' => 'required|image|mimes:jpeg,png,jpg|max:3048', // Hanya menerima format gambar (jpg, jpeg, png) maksimal 2MB
             'dokumen' => 'required|mimes:pdf,docx|max:3048', // Hanya menerima format dokumen (pdf, docx) maksimal 2MB
             'password' => 'required|min:5',
         ]);
     
         // Upload foto
         $fotoName = $request->foto->getClientOriginalName(); // Menggunakan nama asli file yang diunggah
         $request->foto->move(public_path('uploads/foto'), $fotoName);
     
         // Upload dokumen
         $dokumenName = $request->dokumen->getClientOriginalName(); // Menggunakan nama asli file yang diunggah
         $request->dokumen->move(public_path('uploads/dokumen'), $dokumenName);
     
         // Hash password
         $requestData['password'] = Hash::make($requestData['password']);
     
         $requestData['foto'] = $fotoName; // Menyimpan nama file di database tanpa menambahkan timestamp
         $requestData['dokumen'] = $dokumenName; // Menyimpan nama file di database tanpa menambahkan timestamp
     
         $this->student->create($requestData);
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
        $response['student'] = $this->student->find($id);
        return view('halaman.editstudent')->with($response);
    }

    public function update(Request $request, string $id)
{
    $student = $this->student->find($id);

    $requestData = $request->validate([
        'nim' => 'required',
        'nama' => 'required',
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

    // Jika ada dokumen yang diunggah
    if ($request->hasFile('dokumen')) {
        // Hapus dokumen lama
        if (file_exists(public_path('uploads/dokumen/'.$student->dokumen))) {
            unlink(public_path('uploads/dokumen/'.$student->dokumen));
        }
        // Upload dokumen baru
        $dokumenName = $request->dokumen->getClientOriginalName();  
        $request->dokumen->move(public_path('uploads/dokumen'), $dokumenName);
        $requestData['dokumen'] = $dokumenName;
    }

    $student->update($requestData);
    return redirect('student');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $student = $this->student->find($id);
        $student->delete();
        return redirect('student');
    }
}
