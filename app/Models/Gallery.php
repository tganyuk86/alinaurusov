<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use App\Models\Category;

class Gallery extends Model
{
    protected $table = "gallery";

    use HasFactory;
    protected $fillable = [
        'image_title',
        'filename',
        'category_id',
        'status',
    ];  


    public function myCat()
    {

        $category = Category::find($this->category_id);

        return $category;
    }
}
