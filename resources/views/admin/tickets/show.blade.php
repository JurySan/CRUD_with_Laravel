@extends('admin.layouts.master')

@section('title','View a  Ticket')

@section('content')

	<div class="container col-md-8-md-offset-2">
		<div class="well well bs-component">
			<div class="content">
				<h3 class="text-success">{{ $tickets->title }}</h3>
				<br>
				<p>{{ $tickets->content }} <br>
				    {{ $tickets->status ? 'Pending': 'Answered' }}</p>

			</div>
		</div>
	</div>

@endsection