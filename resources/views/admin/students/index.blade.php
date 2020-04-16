@extends('admin.layouts.master')

@section('title','Student Registration')

@section('content')

<div class="col-sm-12">
     @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
      @endif
</div>

	<div class="container">
		<div class="row ">
			<div class="col-md-12">
				<div class="header">
					
					<h3 class="text-center text-success mb-4">Student Registration</h3>
				</div>
        
          <div class="row justify-content-between">
            <a href="{{url('admin/students/create')}} "><button type="button" class="btn btn-primary">Create Student</button></a>
             <form>
                <div class="input-group">
                    <input type="text" name="search" class="form-control" placeholder="Search By Student name">
                       <div class="input-group-append">
                            <button class="btn btn-primary" type="submit" id="button-addon2">
                                <i class="fas fa-search"></i>
                              </button>
                        </div>
                      </div>
                </form>          
        </div><br><br>
				<table class="table table-striped">
  					<thead class="thead-dark">
   						<tr>

     	 					<th scope="col">Roll No</th>
      						<th scope="col">Name</th>
      						<th scope="col">Email</th>
      						<th scope="col">Address</th>
      						<th scope="col">Phone</th>
      						<th scope="col">Created At</th>
                  <th colspan="2">Actions</th>
    					</tr>
  					</thead>
  					<tbody class="bg-light">
              @foreach($students as $student)
    					<tr>
      						<td>{{ $student->rollno }}</td>
							    <td>{{ $student->name }}</td>
      						<td>{{ $student->email }}</td>
      						<td>{{ $student->address }}</td>	
      						<td>{{ $student->phone }}</td>
      						<td>{{ $student->date }}</td>
                  <td>
                    <a href="{{ action('admin\StudentController@edit' , $student->id) }}" class="btn btn-primary">Edit</a>

                  </td>
                  <td>
                    <a href="{{ action('admin\StudentController@destroy', $student->id) }}" >
                     <button class="btn btn-danger">Delete</button> 
                    </a>
                    
                  </td>
    					 </tr>
              @endforeach
  					</tbody>
				</table>


			</div>
		</div>
	</div>

@endsection