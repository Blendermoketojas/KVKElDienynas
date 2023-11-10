<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class internship extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table ='internship';
    protected $fillable = ['company_id', 'user_id', 'date_from', 'date_to'];

    
}
