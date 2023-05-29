<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plano extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->hasMany(User::class, 'plano_id', 'id');
    }
}
