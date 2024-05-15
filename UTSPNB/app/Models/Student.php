<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'student';
    protected $primaryKey = 'id';
    protected $fillable = [
    
        'nim',
        'nama',
        'email',
        'foto',
        'dokumen',
        'password'

    ];
    use HasFactory;
}
