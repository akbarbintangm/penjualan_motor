<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MDMotor extends Model
{
    protected $table = "m_d_motors";
    protected $fillable = [
        'id_m_motors',
        'warna_m_d_motors',
        'varian_m_d_motors',
        'transmisi_m_d_motors'
    ];
    protected $primaryKey = "id_m_d_motors";
}
