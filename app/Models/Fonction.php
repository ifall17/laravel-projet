<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fonction extends Model
{
    use HasFactory;
    protected $garded = [];

    public function personnel() {
        return $this->belongsToMany(Personnel::class);
    }
}
