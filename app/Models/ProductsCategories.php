<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductsCategories extends Model
{
    protected $connection = 'mysql';
    protected $table = 'category_product';
    protected $primarykey = 'id';

}
