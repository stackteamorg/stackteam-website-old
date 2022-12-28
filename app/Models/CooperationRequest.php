<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CooperationRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'fullname',
        'phone_number',
        'detail',
        'lang'
    ];

}
