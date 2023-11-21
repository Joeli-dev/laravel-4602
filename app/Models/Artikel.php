<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Artikel extends Model
{
    use HasFactory;
    /** Tabel yang merepresentasikan model ini */
    protected $table = 'artikels';

    protected $primaryKey = 'Id';
    /** Kolom-kolom yang dapat diisi pada tabel artikel */
    protected $fillable = [
        'judul',
        'isiartikel',
        'tag',
        'status',
        'tanggaltayang'
    ];
    /** Relasi dengan tabel kategori */
    public function kategori(): BelongsTo{
        return $this->belongsTo('App\Models\Kategori', 'idkategori', 'id');
    }
}





