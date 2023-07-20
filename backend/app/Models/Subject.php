<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;
    public function skills()
    {
        return $this->belongsToMany(Skill::class, 'skill_subjects')->withTimestamps();
    }
}
