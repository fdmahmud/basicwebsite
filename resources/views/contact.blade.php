@extends('layouts.app')

@section('content')
	<h1>Contact</h1>

	{!! Form::open(['url' => 'contact/submit']) !!}
	 <div class="form-group">
       {{Form::label('name', 'Name')}}
	   {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'John'])}}
	 </div>
	 <div class="form-group">
      {{Form::label('email', 'E-Mail Address')}}
	  {{Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'example@email.com'])}}
	 </div>
	 <div class="form-group">
      {{Form::label('message', 'Message')}}
	  {{Form::textarea('message', '', ['class' => 'form-control', 'placeholder' => 'Your message'])}}
	 </div>
	 <div>
	 	{{Form::submit('Sbumit', ['class' => 'btn btn-primary'])}}
	 </div>
	{!! Form::close() !!}



 @endsection

 @section('sidebar')
 	
 	<h4>Contact menu</h4>
 	@parent
 @endsection