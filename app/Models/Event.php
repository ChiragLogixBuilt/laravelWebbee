<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Workshop;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    public function workshops()
    {
        return $this->hasMany(Workshop::class);
    }
}
