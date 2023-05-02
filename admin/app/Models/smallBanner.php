<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class smallBanner extends Model
{
    use HasFactory;
    protected $fillable=['link','image'];
}
