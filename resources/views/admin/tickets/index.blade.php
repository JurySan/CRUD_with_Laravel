@extends('admin.layouts.master')

@section('title','Dashboard')

@section('content')


  <a href="{{ url('admin/tickets/create') }}" class="btn btn-primary">Create</a>
 
  <div class="col-sm-12">
     @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
      @endif
</div>
  <div class="container col-md-8 col-md-offset-2">
  	<div class="panel panel-default">
  		<div class="panel heading">
  			<h2>Tickets</h2>
  		</div>
  		@if($tickets->isEmpty())
  			<p>There is no ticket.</p>
  		@else
  			<table class="table">
  				<thead>
  					<tr>
  						<td>ID</td>
  						<td>Title</td>
  						<td>Status</td>
              <td>Actions</td>
  					</tr>
  				</thead>
  				<tbody>
  					@foreach($tickets as $ticket)
  						<tr>
  							<td>{{$ticket->id}} </td>
  							<td>{{$ticket->title}} </td>
  							<td>{{$ticket->status ? 'Pending' : 'Answered' }} </td>
                <td><a href="{{action('admin\TicketController@show', $ticket->id ) }}" class="btn btn-success">Show</a>
                    <a href="{{action('admin\TicketController@edit', $ticket->id)}} " class="btn btn-primary">Edit</a>
                    <a href="{{action('admin\TicketController@destroy', $ticket->id)}}" class="btn btn-danger">Delete</a>
                </td>
  						</tr>
  					@endforeach
  				</tbody>
  			</table>
  		 @endif
  	</div>
  </div>
@endsection