<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $table = 'games';

    protected $fillable = [
        'game_name',
        'game_origin',
        'release_date',
        'developer_id',
    ];

    public function gameStudio()
    {
        return $this->belongsTo(Developer::class);
    }
}
