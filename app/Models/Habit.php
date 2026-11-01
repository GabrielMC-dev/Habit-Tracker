<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Habit extends Model
{
    protected $fillable = [
        'user_id',
        'name',
    ];

    //UM HÁBITO PERTENCE À UM USUÁRIO
    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }

    //UM HÁBITO PODE TER MUITOS REGISTROS
    public function habitLogs(): HasMany {
        return $this->hasMany(Habitlog::class);
    }
}