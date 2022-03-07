<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductsImages extends Model
{
    protected $connection = 'mysql';
    protected $table = 'product_images';
    protected $primarykey = 'id';
}
