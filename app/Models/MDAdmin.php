<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MDAdmin extends Model
{
    protected $table = "m_d_admins";
    protected $fillable = [
        'id_m_admins',
        'ktp_m_d_admins',
        'nomor_m_d_admins',
        'alamat_m_d_admins'
    ];
    protected $primaryKey = "id_m_d_admins";
}
