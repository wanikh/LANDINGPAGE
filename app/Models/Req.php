<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Req extends Model
{
    protected $table='laravel9';
    protected $fillable=['nama_lengkap', 'no_whatsapp', 'deskripsi', 'permasalahan', 'harapan', 'estimasi_budget','status'];
}
