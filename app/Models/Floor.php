<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Floor extends Model
{
    use HasFactory;

    protected $with = ['units'];

    public function units()
    {
        return $this->hasMany(Unit::class);
    }

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
