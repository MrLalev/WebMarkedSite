<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Order;
use Auth;
use Illuminate\Http\Request;

class OrderController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function setOrder(Request $request)
	{
		Order::create(
           [
                   'product_id'=>$request->input('product_id'),
                   'user_id' => Auth::user()->id
           ]
        );

        return view('orders.index');
	}


}
