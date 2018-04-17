@extends('layouts.master')


@section('content')

    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Loans</h1>
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
                <strong class="card-title">Buyers in loan</strong>

            </div>
            <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Shop Name</th>
                      <th scope="col">Unpaid Amount</th>
                      <th scope="col">Confirmation</th>
                     
                    </tr>
                  </thead>
                  <tbody>
                  	
                    @foreach($loans as $key=>$loan)
                      <tr>
                        <td>{{ ++$key }}</td>
                        
                        <td>
                            @foreach($buyers as $buyer)

                                @if($buyer->id == $loan->buyer_id)
                                    {{ $buyer->place_name }}
                                @endif

                            @endforeach
                        </td>
                        
                        <td>${{ $loan->total_price }}</td>

                        <td>
                            <a href="/confirm/loan/{{$loan->buyer_id}}" >
                              <button class="btn btn-sm btn-warning loan" >Pay Loan</button>
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