<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    use HasFactory;

    protected $fillable = ['nomor_kamar', 'tipe_kamar', 'harga', 'hotel_id'];

    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }

    public function tamus()
    {
        return $this->belongsToMany(Tamu::class, 'reservasis');
    }
}

