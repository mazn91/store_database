@extends('layouts.master')


@section('content')

	<div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Size</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li class="active">Available Size Types</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>




	<div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <strong class="card-title">Sizes</strong>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th scope="col">Number</th>
                      <th scope="col">Name</th>
                      <th scope="col">Description</th>
                      <th scope="col">Update</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                  	@foreach($materials as $key=>$material)
	                    <tr>
	                      <th scope="row">{{ ++$key }}</th>
	                      <td>{{ ucfirst($material->name) }}</td>
	                      <td>{{ $material->description }}</td>
	                      <td>
	                      	<a href="/update/material/{{$material->id}}">
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
            	{{ $materials->links() }}
            </div>
            
        </div>
    </div>

@endsection