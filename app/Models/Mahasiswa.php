<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

// use Illuminate\Database\Eloquent\Relations\HasOne;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $table = "mahasiswa";

    protected $fillable = [
        "nim",
        "nama",
        "jenis_kelamin",
        "id_kelas"
    ];

    public function kelas(): BelongsTo{
        return $this->belongsTo(Kelas::class, "id_kelas", "id");
    }
}