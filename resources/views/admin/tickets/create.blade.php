@extends('admin.layouts.master')

@section('title','Create Ticket')

@section('content')
	<div class="container col-md-8-md-offset-2">
		<div class="well well bs-component">
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
			<form method="POST" class="form-horizontal">
				@csrf
				<fieldset>
					<legend>Submit a new ticket</legend>
					<div class="form-group">
						<label for="title" class="col-lg-2 control-label">Title</label>
						<div class="col-lg-10">
							<input type="text" name="title" class="form-control" id="title" placeholder="Title">
						</div>
					</div>
					<div class="form-group">
						<label for="title" class="col-lg-2 control-label">Content</label>
						<div class="col-lg-10">
							<textarea class="form-control" id="content" row="3" name="content" placeholder="Content"></textarea>
							<span class="help-block">Feel free to ask us any questions.</span>
						</div>
					</div>
					<div class="form-group">
						<div class="col-lg-10 col-lg-10-offset-2">
							<button class="btn btn-default">Cancel</button>
							<button class="btn btn-primary">Submit</button>
						</div>
					</div>
				</fieldset>
			</form>
		</div>
	</div>
@endsection

