<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Explain extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'title',
        'content',
        'quotation',
        'quotation_name',
        'quotation_role',
        'lang'
    ];
}
