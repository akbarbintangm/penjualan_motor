<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MDUser extends Model
{
    protected $table = "m_d_users";
    protected $fillable = [
        'id_m_users',
        'ktp_m_d_users',
        'nomor_m_d_users',
        'alamat_m_d_users'
    ];
    protected $primaryKey = "id_m_d_users";
}
