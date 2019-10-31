@extends('welcome')

@section('content')
<div class="container">
	
	<div class="row">
		<div class="col-md-4">
			<a href="{{ route('mail.index') }}" class="btn btn-default btn-block btn-lg">Send mail</a>
		</div>
		<div class="col-md-4">
			<a href="{{ action('MailController@index') }}" class="btn btn-danger btn-block btn-lg">Receive mail</a>
		</div>
		<div class="col-md-4">
			<a href="{{ action('MailController@index') }}" class="btn btn-success btn-block btn-lg">Queue mail</a>
		</div>
	</div>
</div>
@stop