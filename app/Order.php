<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Product;

class Order extends Model {

    protected $fillable = [
        'product_id',
        'user_id'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function product(){
        return $this->belongsTo('App\Product');
    }
}
