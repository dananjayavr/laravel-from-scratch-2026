<?php

namespace App\Models;

use App\Enums\IdeaState;
use Illuminate\Database\Eloquent\Model;

class Idea extends Model
{
    protected $guarded = [];

    protected $attributes = [
        'state' => IdeaState::PENDING,
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
