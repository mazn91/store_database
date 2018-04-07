@extends('layouts.master')


@section('content')

	<div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Color</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li class="active">Udpate Color</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>


    <div class="card">


	  <div class="card-body card-block">

	    <form method="post" action="/update/color/{{$color->id}}">

	    	{{ csrf_field() }}

	      <div class="form-group">
	      	<label for="name" class=" form-control-label"><strong>Color Name</strong></label>
	      	<input type="text" id="name" name="name" value="{{ $color->name }}" class="form-control">
	      </div>

	      <div class="form-group">
	      	<label for="description" class=" form-control-label"><strong>Color Description</strong></label>
	      	<textarea id="description" name="description" class="form-control">{{$color->description}}</textarea>
	      </div>
	      
	      


	      <div class="form-group">
	        	<button type="submit" class="btn btn-primary btn-sm">
	          		<i class="fa fa-dot-circle-o"></i>Update
	        	</button>

	        	<a href="/show/size" class="btn btn-danger btn-sm">
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