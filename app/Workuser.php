<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Workuser extends Model
{
    protected $table = "work";

    use HasFactory;
    protected $fillable = [
        'name',
        'password',       
    ];  

}
