@extends('layouts.app')


 @section('content') <!-- Select the code to yield -->
	<h1>Messages</h1> <!-- It dosent have to be 'content' . Any name would do. -->
	@if(count($messages) > 0)
		@foreach($messages as $message)
			<div class="form-gorup">
				<ul class="list-gorup">
					<li class="list-group-item">Name: {{$message->name}}</li>
					<li class="list-group-item">Email: {{$message->email}}</li>
					<li class="list-group-item">Message: {{$message->message}}</li>
				</ul>
			</div>
		@endforeach
	@endif
 @endsection


 @section('sidebar') 			<!-- add contents to the app.blade layout -->

 	@parent 								<!-- It shows the app.blade parent content -->
 	<p>This is appended to the sidebar</p>

 @endsection

