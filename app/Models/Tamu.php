<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tamu extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'email', 'telepon'];

    public function profile()
    {
        return $this->hasOne(Profile::class);
    }

    public function kamars()
    {
    return $this->belongsToMany(Kamar::class, 'reservasis');
    }

}

