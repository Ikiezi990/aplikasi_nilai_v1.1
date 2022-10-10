<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    public $guarded = [];
    public function kelas()
    {
        return $this->hasMany(Kelas::class, 'id', 'id');
    }
}
