<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class notes extends Model
{
    use HasFactory;
    protected $fillable = ['no', 'tanggal', 'judul', 'alamat'];
    protected $table = 'notes';
    public $timestamps = false;
}
