<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    /** @use HasFactory<\Database\Factories\KamarFactory> */
    use HasFactory;
    protected $fillable = ['nama_kamar'];

    public function santris()
    {
        return $this->hasMany(Santri::class);
    }
}
