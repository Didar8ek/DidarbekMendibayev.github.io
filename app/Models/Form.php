<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
 protected $table = 'forms';
 protected $fillable = ['name','surname','email','image'];
}
