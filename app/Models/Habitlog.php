<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Habitlog extends Model
{
    protected $fillable = [
        'user_id',
        'habit_id',
        'completed_at',
    ];

    //UM REGISTRO PERTENCE À UM USUÁRIO
    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }

    //UM REGISTRO PERTENCE À UM HÁBITO
    public function habit(): BelongsTo {
        return $this->belongsTo(Habit::class);
    }
}
