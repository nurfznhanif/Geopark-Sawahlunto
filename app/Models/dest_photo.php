<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dest_photo extends Model
{
    use HasFactory;


    protected $fillable = [
        'dest_id',
        'destinasi_photo',
    ];
}
