@extends('welcome')


@section('content')
	
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>Mail Sender Arbitex</h1>
			</div>
				@if(Session::has('flashmessage'))
					@foreach($errors->all() as $error)
						<div class="alert alert-succes">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">
								&times;
							</button>
							<strong>
								{{ Session::get('flashmessage') }}
							</strong>
						</div>
					@endforeach
				@endif
			<div class="col-md-12">
				<form action="{{ url('mail/sendmail') }}" method="POST" class="form-horizontal" role="form">
					<input type="hidden" value="{{ csrf_token() }}" name="_token">
					<div>
						<legend>Send emails</legend>
					</div>
					<div>
						<label for="email">Receiver</label>
						<input type="email" name="email" value="{{ Request::old('email') }}" class="form-control" />
					</div>
					<div>
						<label for="subject">Subject</label>
						<input type="text" name="subject" value="{{ Request::old('subject') }}" class="form-control" />
					</div>
					<div>
						<label for="message">Message</label>
						<textarea rows="5" cols="20" id="editor" name="message" value="{{ Request::old('message') }}" class="form-control ckeditor" style="min-height: 400px;"> </textarea>
					</div>
					<button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				@if(Session::has('errors'))
					@foreach($errors->all() as $error)
						<div class="alert alert-danger">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">
								&times;
							</button>
							<strong>
								{{ $error }}
							</strong>
						</div>
					@endforeach
				@endif
			</div>

		</div>
	</div>

@stop