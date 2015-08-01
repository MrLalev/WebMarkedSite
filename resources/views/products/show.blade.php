@extends('shared.layout')

@section('content')
<div class="container all-container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">
				    <h2>{!! $product->product_name !!}</h2>
				</div>

				<div class="panel-body">
				    @if (($product->image)  != "")
				    <script src='/js/jquery-1.8.3.min.js'></script>
                    <script src='/js/jquery.elevatezoom.js'></script>
                    <div>
                    <img class="img-responsive" id="zoom_01" src="/img/products/thumbs/medium/{!! $product->image !!}" data-zoom-image="/img/products/thumbs/full/{!! $product->image !!}"/>
                    <div>
                    <script>
                          if ($(window).width() <= 740) {
                                     $("#zoom_01");
                          } else if ($(window).width() <= 990) {
                                     $("#zoom_01").elevateZoom({easing : true, zoomWindowWidth:320, zoomWindowHeight:263});
                          }else {
                                     $("#zoom_01").elevateZoom({easing : true,zoomWindowWidth:400, zoomWindowHeight:263});
                          }
                    </script>
                    @endif
					<p>
					    {!! $product->product_content !!}
       				</p>
       				<p>
                        {!! $product->product_price !!} лв.
                    </p>
                    <p>
                        {!! $product->product_quantity!!} бр.
                    </p>
                      @if( new DateTime() >= new Datetime($product->promotionFrom) && new DateTime() <= new Datetime($product->promotionTo))
                      <div class="promotion">
                    <p> В промоция от:
                        {!! $product->promotionFrom!!} до
                        {!! $product->promotionTo!!}
                    </p>
                    </div>
                      @endif
				</div>
				@if (!Auth::guest())
                     <div class="panel-body">
                     <form method="POST" action="/order">
                     <input type="hidden" name="product_id" value="{!!$product->id!!}">
                     <button type="submit" class="btn btn-primary">
                     Купи
                     </button>
                     {!! Form::token() !!}
                     </form>
                     </div>
                @endif
				<div class="panel-footer">
				    @include('shared.helpers.carbon-date', [
                        'date' => $product->created_at
                    ])
				</div>

	</div>
</div>
@endsection