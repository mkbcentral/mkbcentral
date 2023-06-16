<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteHeaderInfo extends Model
{
    use HasFactory;

    protected $fillable=['title','subtitle','paragraph','image'];
}
