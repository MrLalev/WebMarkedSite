@extends('shared.layout')

@section('content')
<div class="container">

	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Покупка</div>
				<div class="panel-body">
                                 <p> </p>
                                 <p>Благодарим Ви за покупката.</p>
                                 <p>Нашите слижители ще се свържат с Вас, чрез посечения е-майл адрес.</p>
                                 <p>За да уточните, начина на плащане, срока на доставка и количеството от желаната стока.</p>
                                 <p>Също така да потвърдите покупката си и да бъдете уведомени, ако наличноста на стоката е била сбъркана.</p>

				<div class="center">
                <button class="btn btn-primary" onclick='window.location="/products"'>Към продуктите</button>
                </div>
                </div>
			</div>
		</div>
	</div>
</div>
@endsection
