<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MUser extends Model
{
    protected $table = "m_users";
    protected $fillable = [
        'nama_m_users',
        'username_m_users',
        'email_m_users',
        'password_m_users',
        'profile_m_users',
        'role_m_users'
    ];
    protected $primaryKey = "id_m_users";
}
