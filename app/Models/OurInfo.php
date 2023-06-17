<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OurInfo extends Model
{
    use HasFactory;
    protected $fillable=['phone','other_phone','email','other_email','adress','logo','description'];
}
