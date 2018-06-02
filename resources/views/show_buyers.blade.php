@extends('layouts.master')


@section('content')

    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Buyers</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li class="active">All buyers</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>


	<div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <strong class="card-title">Buyers</strong>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">First Name</th>
                      <th scope="col">Last Name</th>
                      <th scope="col">Email</th>
                      <th scope="col">Phone</th>
                      <th scope="col">Addressr</th>
                      <th scope="col">City</th>
                      <th scope="col">Shop Name</th>
                      <th scope="col">Update</th>
                      <th scope="col">Status</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                  	@foreach($buyers as $key=>$buyer)
	                    <tr>
	                      <td scope="row">{{ ++$key }}</td>
	                      <td>{{ ucfirst($buyer->fname) }}</td>
	                      <td>{{ ucfirst($buyer->lname) }}</td>
	                      <td>{{ $buyer->email }}</td>
	                      <td>0{{ $buyer->phone }}</td>
	                      <td>{{ ucfirst($buyer->address) }}</td>
	                      <td>{{ ucfirst($buyer->city) }}</td>
	                      <td>{{ ucfirst($buyer->place_name) }}</td>

	                      <td>
	                      	<a href="/update/buyer/{{ $buyer->id }}">
	                      		<button type="submit" class="btn btn-primary btn-sm">
        				          		Update
        				        </button>
        				     </a>
	                      </td>


	                      <td>
	                      	<a href="/activation/buyer/{{$buyer->id}}" style="<?php if($buyer->status){echo 'color: green';}else{echo 'color: red';}?>">
	                      		@if($buyer->status)

	                      		Activated

	                      	@else

	                      		Deactivated

	                      	@endif	
	                      	</a>
	                      	

	                      </td>

	                    </tr>
                    @endforeach


                      
                    
  
                  </tbody>
                </table>
            </div>

            <div style="margin-left: auto; margin-right: auto;">
            	{{ $buyers->links() }}
            </div>

        </div>


        	
    </div>


@endsection