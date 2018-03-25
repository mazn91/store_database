@extends('layouts.master')


@section('content')

	<div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Roles</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li class="active">Add a Role</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>


<ul class="list-group" class="profile_details">

  <li class="list-group-item"><strong>Available Roles</strong></li>

  @foreach($roles as $role)

  	<li class="list-group-item">
  		{{ $role->type }}
  	</li>

  @endforeach

</ul>


<br>

<div class="card">


	  <div class="card-body card-block">

	    <form method="post" action="">

	    	{{ csrf_field() }}

	      <div class="form-group">
	      	<label for="role" class=" form-control-label"><strong>Add a role</strong></label>
	      	<input type="text" id="role" name="role" placeholder=" Admin, Employee or etc.." class="form-control">
	      </div>
	      

	      <div class="form-group">
	        	<button type="submit" class="btn btn-primary btn-sm">
	          		<i class="fa fa-dot-circle-o"></i>Add
	        	</button>

	        	<a href="/" class="btn btn-danger btn-sm">
	          		<i class="fa fa-ban"></i>Cancel
	        	</a>
	        	
	      </div>

	         <div class="form-group">

					@include('layouts.errors')

			</div>

	    </form>

	  </div>

	</div>



@endsection