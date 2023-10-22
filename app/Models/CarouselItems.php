<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarouselItems extends Model
{
    use HasFactory;

    // add the table
    protected $table = 'carousel_items';
    
    // make primary key
    protected $primaryKey = 'carousel_item';
    
    // for the tables to be inputted with data
    protected $fillable = [
        'carousel_name',
        'image_path',
        'description',
        'user_id',
    ];
}
 