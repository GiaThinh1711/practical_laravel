<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apratment extends Model
{
    use HasFactory;
    protected $table = "apartment";
    protected $fillable = ["name","price","address","status"];
}
