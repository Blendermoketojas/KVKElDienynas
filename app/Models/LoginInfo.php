<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoginInfo extends Model
{
    public function profile()
    {
        return $this->hasOne(UserInfo::class, 'name', 'username');
    }
}
