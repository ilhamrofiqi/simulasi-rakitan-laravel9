<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Motherboard extends Model
{
    use HasFactory;
    protected $table = 'motherboard';
    protected $guarded = [];


    // Relasi dengan lazy loading, tanpa melalui controller dan langsung memanggil data ke interface
    public function socket()
    {
        return $this->belongsTo(Socket::class);
    }
}
