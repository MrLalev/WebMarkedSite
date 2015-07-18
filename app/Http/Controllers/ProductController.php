<?php namespace App\Http\Controllers;

use App\CommentPoem;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $products = Product::orderBy('created_at', 'desc')->paginate(9);



        return view('products.index', ['products' => $products] );
    }

    /**
     * Display the specified resource.
     *
     * @param  $id
     * @return Response
     */
    public function show($id)
    {
        $product = Product::find($id);

        return view('products.show', [
            'product' => $product,
        ]);
    }


}