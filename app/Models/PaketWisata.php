<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaketWisata extends Model
{
    use HasFactory;

    protected $table = 'paket_wisata';

    protected $fillable = [
        'informasi_destinasi',
        'detail_paket_wisata',
        'deskripsi_paket',
        'jadwal',
        'persyaratan_ketentuan',
    ];

    // Define relationships if needed
    // For example:
    // public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }
}

