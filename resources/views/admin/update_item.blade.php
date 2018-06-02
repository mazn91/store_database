@extends('layouts.master')


@section('content')

	<div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Item</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li class="active">Udpate The Item</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>


    <div class="card">


	  <div class="card-body card-block">

	    <form method="post" action="/update/item/{{$item->id}}">

	    	{{ csrf_field() }}

	      <div class="form-group">
	      	<label for="name" class=" form-control-label"><strong>Name</strong></label>
	      	<input type="text" id="name" name="name" value="{{ $item->name }}" class="form-control">
	      </div>

	      <div class="form-group">
	      	<label for="description" class=" form-control-label"><strong>Description</strong></label>
	      	<textarea id="description" name="description" class="form-control">{{$item->description}}</textarea>
	      </div>


	      <div class="form-group">
	      	<label for="code" class=" form-control-label"><strong>Code</strong></label>
	      	<input type="text" id="code" name="code" value="{{ $item->code }}" class="form-control">
	      </div>


	      <div class="form-group">
	      	<label for="quantity" class=" form-control-label"><strong>Quantity</strong></label>
	      	<input type="text" id="name" name="quantity" value="{{ $item->quantity }}" class="form-control">
	      </div>


	      <div class="form-group">
	      	<label for="size_id" class=" form-control-label"><strong>Size Measurement</strong></label>
	      	

	      		<select class="form-control" id="size_id" name="size_id">

	      			@foreach($sizes as $size)

	      				<option value="{{ $size->id }}" <?php if($item->size_id == $size->id){echo "selected";}?>>
	      					{{ $size->name }}
	      				</option>

	      			@endforeach

	      		</select>


	      </div>

	      <div class="form-group">
	      	<label for="size" class=" form-control-label"><strong>Size</strong></label>
	      	<input type="size" id="size" name="size" value="{{ $item->size }}" class="form-control">
	      </div>

	      <div class="form-group">
	      	<label for="color_id" class=" form-control-label"><strong>Color Category</strong></label>

	      		<select class="form-control" id="color_id" name="color_id">

	      			@foreach($colors as $color)

	      				<option value="{{ $color->id }}" <?php if($item->color_id == $color->id){echo "selected";}?>>
	      					{{ $color->name }}
	      				</option>

	      			@endforeach

	      		</select>
	      	
	      </div>


	      <div class="form-group">
	      	<label for="color" class=" form-control-label"><strong>Color</strong></label>
	      	<input type="text" id="color" name="color" value="{{ $item->color }}" class="form-control">
	      </div>


	      <div class="form-group">
	      	<label for="material_id" class=" form-control-label"><strong>Material Category</strong></label>
	      	
	      		<select class="form-control" id="material_id" name="material_id">

	      			@foreach($materials as $material)

	      				<option value="{{ $material->id }}" <?php if($item->material_id == $material->id){echo "selected";}?>>
	      					{{ $material->name }}
	      				</option>

	      			@endforeach

	      		</select>


	      </div>


	      <div class="form-group">
	      	<label for="material" class=" form-control-label"><strong>Material</strong></label>
	      	<input type="text" id="material" name="material" value="{{ $item->material }}" class="form-control">
	      </div>


	      <div class="form-group">
	      	<label for="consumption" class=" form-control-label"><strong>Consumption</strong></label>
	      	<input type="number" id="consumption" name="consumption" value="{{ $item->consumption }}" class="form-control">
	      </div>


	      <div class="form-group">
	      	<label for="cost" class=" form-control-label"><strong>Cost</strong></label>
	      	<input type="number" step="any" id="cost" name="cost" value="{{ $item->cost }}" class="form-control">
	      </div>


	      <div class="form-group">
	      	<label for="min_price" class=" form-control-label"><strong>Minimum Price</strong></label>
	      	<input type="number" step="any" id="min_price" name="min_price" value="{{ $item->min_price }}" class="form-control">
	      </div>


	      <div class="form-group">
	      	<label for="max_price" class=" form-control-label"><strong>Maximum Price</strong></label>
	      	<input type="number" step="any" id="max_price" name="max_price" value="{{ $item->max_price }}" class="form-control">
	      </div>


	      <div class="form-group">
	      	<label for="category_id" class=" form-control-label"><strong>Item Category</strong></label>
	      		
	      		<select class="form-control" id="category_id" name="category_id">

	      			@foreach($categories as $category)

	      				<option value="{{ $category->id }}" <?php if($item->category_id == $category->id){echo "selected";}?>>
	      					{{ $category->name }}
	      				</option>

	      			@endforeach

	      		</select>
	      		
	      </div>

	     




	      <div class="form-group">
	        	<button type="submit" class="btn btn-primary btn-sm">
	          		<i class="fa fa-dot-circle-o"></i>Update Item
	        	</button>

	        	<a href="/show/items" class="btn btn-danger btn-sm">
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