@extends('layouts.master')


@section('content')

	<div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Category</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li class="active">Show Category</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>




	<div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <strong class="card-title">Category</strong>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th scope="col">Number</th>
                      <th scope="col">Name</th>
                      <th scope="col">Description</th>
                      <th scope="col">Update</th>
                      <th scope="col">Status</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                  	@foreach($categories as $key=>$category)
	                    <tr>
	                      <th scope="row">{{ ++$key }}</th>
	                      <td>{{ ucfirst($category->name) }}</td>
	                      <td>{{ $category->description }}</td>
	                      <td>
	                      	<a href="/update/category/{{$category->id}}">
	                      		<button type="submit" class="btn btn-primary btn-sm">
        				          		Update
        				        </button>
        				    </a>
	                      </td>


	                      <td>
	                      	<a href="/activation/category/{{$category->id}}" style="<?php if($category->activation){echo 'color: green';}else{echo 'color: red';}?>">
	                      		@if($category->activation)

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
            	{{ $categories->links() }}
            </div>
            
        </div>
    </div>

@endsection