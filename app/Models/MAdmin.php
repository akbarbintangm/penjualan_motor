<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MAdmin extends Model
{
    protected $table = "m_admins";
    protected $fillable = [
        'nama_m_admins',
        'username_m_admins',
        'email_m_admins',
        'password_m_admins',
        'profile_m_admins',
        'role_m_admins'
    ];
    protected $primaryKey = "id_m_admins";
}
