<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = [
    'nama_tamu',
    'nomer_kamar',
    'check_in',
    'check_out',
    'status'
];

}
