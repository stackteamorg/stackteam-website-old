<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\ServiceGoal;
class Service extends Model
{
    use HasFactory;

    public function goals()
    {
        return $this->hasMany(ServiceGoal::class);
    }
}
