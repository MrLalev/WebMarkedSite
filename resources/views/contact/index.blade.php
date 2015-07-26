@extends('shared.layout')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">
				    За контакт
				</div>
                    <div class="panel-body" id="contact">
                    @foreach($contacts as $contact)
                    <div class="col-md-5">
                         {!! $contact->image  !!}
                    </div>
                            <div class="col-md-4">
                                <h5>
                                    {!! $contact->content  !!}
                                </h5>
                            </div>
                    @endforeach
                </div>
			</div>
		</div>
	</div>
</div>
@endsection