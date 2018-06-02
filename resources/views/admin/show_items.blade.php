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
                        <li class="active">Show Items</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>




	<div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <strong class="card-title">Items</strong>

                  <div class="row">

                        <form class="navbar-form" role="search" method="post" action="/find/item">
            
                            <div class="input-group add-on" style="width: 500px; margin-left: 50%" >

                                {{ csrf_field() }}

                              <input class="form-control" placeholder="Item code or item name" name="search" id="search" type="text" autofocus>
                              
                              <div class="input-group-btn">
                                <button class="btn" type="submit" style="border-top-right-radius: 5px; margin-left: 4px; background-color: #22A7F0; color: #fff">Search</button>
                              </div>

                            </div>    

                        </form>
  
                </div>


            </div>

            <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th scope="col">Number</th>
                      <th scope="col">Item Name</th>
                      <th scope="col">Item Code</th>
                      <th scope="col">Item Quantity</th>
                      <th scope="col">Item Minimum Price</th>
                      <th scope="col">Item Miximum Price</th>
                      <th scope="col">Item Category</th>
                      <th scope="col">Color Category</th>
                      <th scope="col">Material Category</th>
                      <th scope="col">Stock Status</th>
                      <th scope="col">Activation Status</th>
                      <th scope="col">Update</th>
                    </tr>
                  </thead>
                  <tbody>
                  	@foreach($items as $key=>$item)
	                    <tr>
	                      <th scope="row">{{ ++$key }}</th>

	                      <td>
	                      	<a href="/item/info/{{$item->id}}" style="color: #F72F34">
	                      		{{ $item->name }}
	                      	</a>
	                      	

	                      </td>
	                      <td>{{ $item->code }}</td>
	                      <td>{{ $item->quantity }}</td>
	                      <td>$ {{ $item->min_price }}</td>
	                      <td>$ {{ $item->max_price }}</td>
	                      <td>{{ $item->category->name }}</td>
	                      <td>{{ $item->color()->first()->name }}</td>
	                      <td>{{ $item->material()->first()->name }}</td>
	                      
	                     

	                      
	                      	<td style="<?php if($item->stock){echo 'color: green';}else{echo 'color: red';}?>">
	                      		@if($item->stock)

	                      		In

	                      	@else

	                      		Out

	                      	@endif	
	                      	

	                      </td>



	                      <td>
	                      	<a href="/activation/item/{{$item->id}}" style="<?php if($item->activation){echo 'color: green';}else{echo 'color: red';}?>">
	                      		@if($item->activation)

	                      		Activated

	                      	@else

	                      		Deactivated

	                      	@endif	
	                      	</a>
	                      	

	                      </td>

	                      <td>
	                      	<a href="/edit/item/{{$item->id}}">
	                      		<button type="submit" class="btn btn-primary btn-sm">
        				          		Update
        				        </button>
        				    </a>
	                      </td>


	                    </tr>
                    @endforeach


                      
                    
  
                  </tbody>
                </table>
            </div>

            <div style="margin-left: auto; margin-right: auto;">
            	{{ $items->links() }}
            </div>
            
        </div>
    </div>

@endsection