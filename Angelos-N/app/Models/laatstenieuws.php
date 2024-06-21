<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class laatstenieuws extends Model
{
    protected $table = 'laatstenieuws';
    protected $fillable = [
        "titel",
        'News',
        'description',
    ];
    use HasFactory;
}
