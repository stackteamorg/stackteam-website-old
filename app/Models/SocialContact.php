<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialContact extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'type',
        'data',
        'display',
        'link',
    ];
}
