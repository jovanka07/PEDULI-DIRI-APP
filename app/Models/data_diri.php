<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class data_diri extends Model
{
    use HasFactory;
    protected $table = 'data_diri';

    public function Login(){
        return $this->belongsTo(Login::class, 'user_id');
    }
}
