<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Game extends Model
{
    protected $table = 'matches';

    use SoftDeletes;

    protected $fillable = ['datetime', 'against'];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function players() {
        return $this->belongsToMany(Player::class, 'lineups', 'match_id', 'player_id');
    }


}
