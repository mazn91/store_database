@extends('layouts.master')


@section('content')

	<div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Items</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li class="active">Add an Item</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>


		<div class="card">

              <div class="card-body card-block">

                <form method="post" action="/add/items">

                	{{ csrf_field() }}

                  <div class="form-group">
                  	<label for="name" class=" form-control-label"><strong>Item Name</strong></label>
                  	<input type="text" id="name" name="name" placeholder="Enter Item Name.." class="form-control">
                  </div>
                  

                  <div class="form-group">
                  	<label for="description" class=" form-control-label"><strong>Item Description</strong></label>
                  	<textarea type="text" id="description" name="description" placeholder="Enter Item Description.." class="form-control"></textarea>
                  </div>
                  
                  <div class="form-group">
                  	<label for="code" class=" form-control-label"><strong>Item Code</strong></label>
                  	<input type="code" id="code" name="code" placeholder="Enter Item Code.." class="form-control">
                  </div>


                  <div class="form-group">
                  	<label for="quantity" class=" form-control-label"><strong>Item Quantity</strong></label>
                  	<input type="number" id="quantity" name="quantity" placeholder="Enter Item Quantity.." class="form-control">
                  </div>

                  <div class="form-group">
                    <label for="size_" class=" form-control-label"><strong>Size Category</strong></label>
                    <select type="number" id="size_" name="size_category" class="form-control">

                      @foreach($sizes as $size)
                        <option value="{{$size->id}}">{{ $size->name }}</option>
                      @endforeach
                      
                    </select>
                  </div>


                  <div class="form-group">
                  	<label for="size" class=" form-control-label"><strong>Item Size</strong></label>
                  	<input type="text" id="size" name="size" placeholder="Enter Item Size.." class="form-control">
                  </div>


                  <div class="form-group">
                    <label for="color_category" class=" form-control-label"><strong>Color Category</strong></label>
                    <select type="number" id="color_category" name="color_category" class="form-control">

                      @foreach($colors as $color)
                        <option value="{{$color->id}}">{{ $color->name }}</option>
                      @endforeach
                      
                    </select>
                  </div>


                  <div class="form-group">
                  	<label for="color" class=" form-control-label"><strong>Item Color</strong></label>
                  	<input type="text" id="color" name="color" placeholder="Enter Item Color.." class="form-control">
                  </div>



                  <div class="form-group">
                    <label for="material_category" class=" form-control-label"><strong>Material Category</strong></label>
                    <select type="number" id="material_category" name="material_category" class="form-control">

                      @foreach($materials as $material)
                        <option value="{{$material->id}}">{{ $material->name }}</option>
                      @endforeach
                      
                    </select>
                  </div>


                  <div class="form-group">
                  	<label for="material" class=" form-control-label"><strong>Item Material</strong></label>
                  	<input type="text" id="material" name="material" placeholder="Enter Item Material.." class="form-control">
                  </div>


                  <div class="form-group">
                  	<label for="consumption" class=" form-control-label"><strong>Item Consumption</strong></label>
                  	<input type="number" step="any" id="consumption" name="consumption" placeholder="Enter Item Consumption in Watt.." class="form-control">
                  </div>


                  <div class="form-group">
                  	<label for="cost" class=" form-control-label"><strong>Item Cost</strong></label>
                  	<input type="number" step="any" id="cost" name="cost" placeholder="Enter Item Cost in Dollars.." class="form-control">
                  </div>


                  <div class="form-group">
                  	<label for="min_price" class=" form-control-label"><strong>Item Minimum Price</strong></label>
                  	<input type="number" step="any" id="min_price" name="min_price" placeholder="Enter Item Minimum Price in Dollars.." class="form-control">
                  </div>


                  <div class="form-group">
                  	<label for="max_price" class=" form-control-label"><strong>Item Maximum Price</strong></label>
                  	<input type="number" step="any" id="max_price" name="max_price" placeholder="Enter Item Maximum Price in Dollars.." class="form-control">
                  </div>

                  <div class="form-group">
                  	<label for="category" class=" form-control-label"><strong>Item's Category</strong></label>
                  	<select type="number" id="category" name="category" class="form-control">

                  		@foreach($categories as $category)
                  			<option value="{{$category->id}}">{{ ucfirst($category->name) }}</option>
                  		@endforeach
                  		
                  	</select>
                  </div>

                  <div class="form-group">
                    <label for="warranty" class=" form-control-label"><strong>Warranty</strong></label>
                    <input type="number" step="any" id="warranty" name="warranty" placeholder="Enter Years of Warranty.." class="form-control">
                  </div>
                  
                  
                  <div class="form-group">
	                	<button type="submit" class="btn btn-primary btn-sm">
	                  		<i class="fa fa-dot-circle-o"></i> Add Item
	                	</button>

	                	<a href="/" class="btn btn-danger btn-sm">
	                  		<i class="fa fa-ban"></i> Cancel
	                	</a>
	                	
	               </div>


		             <div class="form-group">

	        				@include('layouts.errors')

	        		</div>

                </form>

              </div>

        </div>


@endsection