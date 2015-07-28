@extends('shared.layout')

@section('content')
<div class="container all-container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading clearfix">
				    Продукти
				     <div class="dropdown pull-right">
                     <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Продукти
                     <span class="caret"></span></button>
                     <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                       @foreach($categories as $category)
                       <li role="presentation"><a role="menuitem" tabindex="-1" href="{!! $url = action('CategoryController@show', ['id' => $category->id])!!}">{!! $category->category_name !!}</a></li>
                       @endforeach
                     </ul>
                   </div>
				</div>

				<div class="panel-body" id="products">
					@foreach($products as $product)
					  <div class="col-md-4 product" >
					        <div class="panel-title">
					            <h3 class="title">
    					            <a href="{!! url('/products/' . $product->id) !!}">{!! $product->product_name  !!}</a>
					            </h3>
					        </div>
					        <div class="panel-body">
                                <div class="description">
                                @if (($product->image)  != "")
                                <div class="img-products">
                                    <img src="/img/products/thumbs/small/{!! $product->image !!}">
                                </div>
                                @endif
                                    <p>{!! mb_substr($product->product_content, 0, 215) !!} <a href="{!! url('/products/' . $product->id) !!}">...</a> </p>
                                </div>
                                <div class="view">
                                <p>{!! $product->product_quantity !!} бр. </p>
					            <p>{!! $product->product_price !!} лв. </p>
					            @if( new DateTime() >= new Datetime($product->promotionFrom) && new DateTime() <= new Datetime($product->promotionTo))
					            <div class="promotion">
					            <p>В промоция от: </p>
					            <p>{!! $product->promotionFrom !!} до {!! $product->promotionTo !!}</p>
					            </div>
					            @endif
					            </div>
					            <div class="center">
					            <button class="btn btn-primary" onclick='window.location="{!! url('/products/' . $product->id) !!}"'>Разгледай</button>
					            </div>
					        </div>
					  </div>
					@endforeach
					<div class="row">
					    <div class="col-md-12">
					        <div class="text-center">{!! $products->appends(['sort' => 'created_at'])->render() !!}</div>
					    </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection