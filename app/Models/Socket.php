<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Socket extends Model
{
    use HasFactory;
    protected $table = 'socket';
    protected $guarded = [];


    // Relasi dengan eager loading, melalui proses controller dahulu 
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
}
