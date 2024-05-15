<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customer';
    protected $primaryKey = 'id';
    protected $fillable = [
    
        'nama',
        'foto',
        'telepon',
        'jenis_kelamin',
        'tgl_lahir',
        'email'

    ];


    use HasFactory;
}
