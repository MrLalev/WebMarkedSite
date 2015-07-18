@extends('shared.layout')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">
				    <h2>{!! $product->product_name !!}</h2>
				</div>

				<div class="panel-body">
					<p>
					    {!! $product->product_content !!}
       				</p>
       				<p>
                        {!! $product->product_price !!} лв.
                    </p>
                    <p>
                        {!! $product->product_quantity!!} бр.
                    </p>

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