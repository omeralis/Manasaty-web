<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registering extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $fillable = ['name' , 'phone'];
}
