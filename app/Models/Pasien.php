<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;

    protected $table = 'pasien';

    protected $fillable = [
        'nama_pasien',
        'alamat',
        'no_telpon',
        'id_rs',
    ];

    public function rumahSakit()
    {
        return $this->belongsTo(RumahSakit::class, 'id_rs'); // Foreign key `id_rs`
    }
}
