@extends('layouts.master')


@section('content')

	<div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Returned Items</h1>
                </div>
            </div>
        </div>
    </div>




	<div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <strong class="card-title">Returned </strong>
                   <a href="/return/confirm/all" style="float: right; margin-bottom: 2px">
                        <button class="btn btn-sm btn-danger">Confirm All</button>
                    </a>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Name</th>
                      <th scope="col">Qunatity</th>
                      <th scope="col">Description</th>
                      <th scope="col">Date</th>
                      <th scope="col">Status</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                  	@foreach($returns as $key=>$return)
	                    <tr>
	                      <td>{{ $return->order->number }}</td>
	                      <td>{{ $return->item->name }}</td>
                          <td>{{ $return->quantity }}</td>
	                      <td>{{ $return->description }}</td>
                          <td>{{ $return->created_at->toDateString() }}</td>
	                      <td>
	                      	@if($return->confirmation == 0)
                                <span style="color: #F72F34">Pending</span>
                            @endif

                            @if($return->confirmation == 1)
                                <span style="color: green">Confirmed</span>
                            @endif


	                      </td>


	                     
	                    </tr>
                    @endforeach


                        
                  </tbody>
                </table>
            </div>

            <div style="margin-left: auto; margin-right: auto;">
            	{{ $returns->links() }}
            </div>
            
        </div>
    </div>

@endsection