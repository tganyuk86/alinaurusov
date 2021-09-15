<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    protected $table = "categories";

    use HasFactory;
    protected $fillable = [
        'parent_id',
        'order',
        'name',
        'slug',
    ];  
}
