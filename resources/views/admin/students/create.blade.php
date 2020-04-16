@extends('admin.layouts.master')

@section('title','Create Student')

@section('content')

<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="card text-black bg-light mb-3" style="max-width: 100rem;margin-left: 150px; margin-top:30px;">
  					<div class="card-header text-center">
  						<h3>Create Student</h3>
  					</div>
					@if ($errors->any())
    				<div class="alert alert-danger">
       				 <strong>Whoops!</strong> There were some problems with your input.<br><br>
        			<ul>
            		@foreach ($errors->all() as $error)
                	<li>{{ $error }}</li>
            		@endforeach
        			</ul>
    				</div>
					@endif
            <form  method="POST">
            	@csrf
  					<div class="card-body">
    						@csrf
    						<div class="form-group">
    							<label>Student Roll Number</label>
    							<input type="text" name="rollno" class="form-control">
    						</div>
    						<div class="form-group">
    							<label>Student Name</label>
    							<input type="text" name="name" class="form-control">
    						</div>
    						<div class="form-group">
    							<label>Email Address</label>
    							<input type="text" name="email" class="form-control">
    						</div>
    						<div class="form-group">
    							<label>Address</label>
    							<textarea class="form-control" name="address" ></textarea>
    						</div>
    						<div class="form-group">
    							<label>Phone Number</label>
    							<input type="text" name="phone" class="form-control">
    						</div>
    						<div class="form-group">
    							<label>Date Created</label>
    							<input type="date" name="date" class="form-control">
    						</div>
  					</div>
  					<div class="card-footer">
  						<div class="form-group ">
  							<button type="submit" class="btn btn-success">Create</button>
  							<input type="reset" name="" class="btn btn-danger">
  						</div>
  					</div>
          </form>
				</div>
			</div>
		</div>

	</div>
@endsection