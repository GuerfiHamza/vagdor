<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Abouts extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $table = "abouts";
    protected $fillable  = ["apropos"];
    protected $dates = ['deleted_at'];

}
