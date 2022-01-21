<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $with = ['floors'];

    public function floors()
    {
        return $this->hasMany(Floor::class);
    }
}
