<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MMotor extends Model
{
    protected $table = "m_motors";
    protected $fillable = [
        'id_m_motors',
        'nama_m_motors',
        'brand_m_motors',
        'tipe_m_motors',
        'foto_m_motors',
        'harga_m_motors'
    ];
    protected $primaryKey = "id_m_motors";
}
