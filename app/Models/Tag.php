<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Issue;

class Tag extends Model
{
    protected $fillable = [
        'name',
    ];

    public function issues()
    {
        return $this->belongsToMany(Issue::class);
    }
}