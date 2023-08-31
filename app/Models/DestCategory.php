<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DestCategory extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function destinasi()
    {
        return $this->hasMany(Destinations::class);
    }
}
