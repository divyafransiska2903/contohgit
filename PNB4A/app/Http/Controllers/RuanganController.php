<?php

namespace App\Http\Controllers;

use App\Models\Ruangan;
use Illuminate\Http\Request;

class RuanganController extends Controller
{
    public function dataruangan()
    {
        $data = Ruangan::all();
       // return view('ruangan.data', ('data' => $data));
        dd($data);
       // echo "ini data ruangan";
    }
}
