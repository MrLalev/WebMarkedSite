@extends('shared.layout')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">
				    Продукти
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
                                    <p>{!! mb_substr($product->product_content, 0, 300) !!} <a href="{!! url('/products/' . $product->id) !!}">...</a> </p>
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