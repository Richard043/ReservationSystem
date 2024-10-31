<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = ['tamu_id', 'bio'];

    public function tamu()
    {
        return $this->belongsTo(Tamu::class);
    }
}
