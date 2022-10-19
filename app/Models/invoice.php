<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class invoice extends Model
{
    protected $table='invoice';
    protected $fillable=['tanggal', 'NoInvoice', 'namaLengkap', 'periode', 'totalTagihan', 'keterangan','jatuhTempo'];

    
}
