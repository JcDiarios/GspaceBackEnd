<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gspace extends Model
{
    use HasFactory;
    protected $fillable = ["user_id", "date", "time", "room"];//for GpaceController store
}
