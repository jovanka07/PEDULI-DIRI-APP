<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
    use HasFactory;
    protected $table = "users";

    public function data_diri(){
        return $this->hasMany(data_diri::class);
    }
}
