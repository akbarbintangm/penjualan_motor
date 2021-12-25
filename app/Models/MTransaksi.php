<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MTransaksi extends Model
{
    protected $table = "m_transaksis";
    protected $fillable = [
        'id_m_users',
        'id_m_motors',
        'jumlah_transaksi',
        'total_harga_transaksi',
        'id_m_admins',
        'harga_m_transaksis',
        'tanggal_transaksi'
    ];
    protected $primaryKey = "id_m_transaksis";
}
