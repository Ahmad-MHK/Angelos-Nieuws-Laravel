<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class latesteditions extends Model
{
    protected $table = 'latesteditions';
    protected $fillable = [
        "titel",
        'image',
        'description',
    ];
    use HasFactory;
}
