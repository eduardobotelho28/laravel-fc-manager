<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
 
    protected $fillable = ['name', 'number', 'position', 'status', 'birth'];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'birth'      => 'date',
    ];

}
