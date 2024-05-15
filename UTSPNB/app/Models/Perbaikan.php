<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perbaikan extends Model
{
        protected $table = 'perbaikan';
        protected $primaryKey = 'id_perbaikan';
        protected $fillable = [
        
        'tgl_pengajuan',
        'judul_perbaikan',
        'User_pemohon',
        'User_assign',
        'id_ruangan',
        'status',
        'keterangan',
        'tgl_selesai',
        'tgl_estimasi'

        ];

        



    use HasFactory;
}
