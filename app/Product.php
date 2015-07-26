<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;

class Product extends Model {

    /**
     * @var array
     *
     */

    protected $fillable = [
        'product_name',
        'product_content',
        'product_price',
        'product_quantity',
        //'category',
        'promotionFrom',
        'promotionTo'
    ];

   // public function category(){
   //     return $this->belongsTo('App\Category');
   // }

}
