<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Player extends Model
{
 
    use SoftDeletes;

    protected $fillable = ['name', 'number', 'position', 'status', 'birth'];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'birth'      => 'date',
    ];

}
