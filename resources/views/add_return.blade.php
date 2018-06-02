@extends('layouts.master')


@section('content')

	<div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Return</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li class="active">Return this item</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>




    <div class="card">

          

              <div class="card-body card-block">

                <form method="post" action="/return/item">

                	{{ csrf_field() }}

                  <div class="form-group">
                  	<label for="quantity" class=" form-control-label"><strong>Return Quantity</strong></label>
                  	<input type="number" id="quantity" name="quantity" class="form-control" value="{{$order->quantity}}">
                  </div>
                  

                  <div class="form-group">
                  	<label for="description" class=" form-control-label"><strong>Return Reason</strong></label>
                  	<textarea type="text" id="description" name="description" class="form-control"></textarea>
                  </div>
                  
                  <input type="hidden" name="order_id" value="{{ $order->id }}">
                  <input type="hidden" name="item_id" value="{{ $order->item_id }}">
                  
                  <div class="form-group">
	                	<button type="submit" class="btn btn-primary btn-sm">
	                  		<i class="fa fa-dot-circle-o"></i> Return Item
	                	</button>

	                	<a href="/show/orders" class="btn btn-danger btn-sm">
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