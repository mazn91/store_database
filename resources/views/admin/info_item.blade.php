@extends('layouts.master')


@section('content')

<div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1><strong>{{ ucfirst($item->name) }}</strong></h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li class="active">Info</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>



	<ul class="list-group" class="profile_details">

	  <li class="list-group-item"><strong style=" color: #F72F34">Name: </strong><span style="float: right">
	  	{{ $item->name }}
	  </span></li>

	  <li class="list-group-item"><strong style=" color: #F72F34">Description: </strong><span style="float: right">
	  	{{ $item->description }}
	  </span></li>

	  <li class="list-group-item"><strong style=" color: #F72F34">Code: </strong><span style="float: right">
	  	{{ $item->code }}
	  </span></li>

	  <li class="list-group-item"><strong style=" color: #F72F34">Quantity: </strong><span style="float: right">
	  	{{ $item->quantity }}
	  </span></li>

	  <li class="list-group-item"><strong style=" color: #F72F34">Consumption: </strong><span style="float: right">
	  	{{ $item->consumption }} Watt
	  </span></li>

	  <li class="list-group-item"><strong style=" color: #F72F34">Cost: </strong><span style="float: right">
	  	$ {{ $item->cost }}
	  </span></li>

	  <li class="list-group-item"><strong style=" color: #F72F34">Minimum Price: </strong><span style="float: right">
	  	$ {{ $item->min_price }}
	  </span></li>


	  <li class="list-group-item"><strong style=" color: #F72F34">Item Category: </strong><span style="float: right">
	  	 {{ $item->Category->name }}
	  </span></li>


	  <li class="list-group-item"><strong style=" color: #F72F34">Item Size: </strong><span style="float: right">
	  	  {{ $item->size }}  {{ $item->size()->first()->name }}
	  </span></li>


	  <li class="list-group-item"><strong style=" color: #F72F34">Item Color: </strong><span style="float: right">
	  	 {{ $item->color()->first()->name }}
	  </span></li>

	  <li class="list-group-item"><strong style=" color: #F72F34">Item Color Description: </strong><span style="float: right">
	  	 {{ $item->color }}
	  </span></li>

	  <li class="list-group-item"><strong style=" color: #F72F34">Item Material: </strong><span style="float: right">
	  	 {{ $item->material()->first()->name }}
	  </span></li>

	  <li class="list-group-item"><strong style=" color: #F72F34">Item Material Description: </strong><span style="float: right">
	  	 {{ $item->material }}
	  </span></li>


	  <li class="list-group-item"><strong style=" color: #F72F34">Item Warranty: </strong><span style="float: right">
	  	 {{ $item->warranty }} Years
	  </span></li>


	  <li class="list-group-item"><strong style=" color: #F72F34">Item Activation: </strong><span style="float: right; 

	  		@if($item->activation ==1) color: green @else  color:red  @endif"
	  	>
	  	@if($item->activation ==1 )

	  		Activated

	  	@else

	  		Deactivated

	  	@endif
	  	 
	  </span></li>



	  <li class="list-group-item"><strong style=" color: #F72F34">Item Status: </strong><span style="float: right; 

	  		@if($item->stock ==1) color: green @else  color:red  @endif"
	  	>
	  	@if($item->stock ==1 )

	  		In Stock

	  	@else

	  		Out of Stock

	  	@endif
	  	 
	  </span></li>






	</ul>


@endsection