@extends('layouts.master')


@section('content')

	

    <div class="card">

          

              <div class="card-body card-block">

                   
                    
                    <div class="row">
                      <div class="col-md-12">
                        <div class="panel panel-default">
                          <div class="panel-heading" style="margin-bottom: 20px">
                            <h3 class="panel-title"><strong>Paid Report Result</strong></h3>
                            <h6>Date: From <span style="color: #F73035">{{ $stdate }}</span> to <span style="color: #F73035">{{$endate}}</span></h6>
                          </div>
                          <div class="panel-body">
                            <div class="table-responsive">
                              <table class="table table-condensed">
                                <thead>
                                                <tr>
                                      <td><strong>Item Name</strong></td>
                                      <td class="text-center"><strong>Total Quantity</strong></td>
                                      <td class="text-center"><strong>Total Price</strong></td>
                                      @if(Auth::user()->isAdmin())
                                      <td class="text-right"><strong>Total Profit</strong></td>
                                      @endif
                                      
                                                </tr>
                                </thead>
                                <tbody>
                                  <!-- foreach ($order->lineItems as $line) or some such thing here -->

                                  @foreach($piad_reports as $order)
                                  <tr>
                                    <td>
                                        @foreach($items as $item)
                                          @if($order->item_id == $item->id )
                                              {{ $item->name }}
                                          @endif
                                        @endforeach
                                    </td>
                                    <td class="text-center">{{ $order->quantity }}</td>
                                    <td class="text-center">${{ $order->total_price }}</td>

                                    @if(Auth::user()->isAdmin())
                                       <td class="text-right">${{ $order->profit }}</td>
                                    @endif

                                  </tr>
                                  @endforeach
                                              
                                  <tr>
                                    @if(Auth::user()->isAdmin())
                                    <td class="thick-line"></td>
                                    @endif  
                                    <td class="thick-line"></td>
                                    <td class="thick-line text-center"><strong>Total Revenue</strong></td>
                                    <td class="thick-line text-right">${{ $piad_reports->pluck('total_price')->sum() }}</td>
                                  </tr>

                                  @if(Auth::user()->isAdmin())
                                  <tr>
                                    <td class="no-line"></td>
                                    <td class="no-line"></td>
                                    <td class="no-line text-center"><strong>Total Cost</strong></td>
                                    <td class="no-line text-right">${{ $paid_cost }}</td>
                                  </tr>
                                  <tr>
                                    <td class="no-line"></td>
                                    <td class="no-line"></td>
                                    <td class="no-line text-center"><strong>Total Profit</strong></td>
                                    <td class="no-line text-right">${{ $piad_reports->pluck('profit')->sum() }}</td>
                                  </tr>
                                  @endif
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

              </div>

        </div>



        <div class="card">

          

              <div class="card-body card-block">

                   
                    
                    <div class="row">
                      <div class="col-md-12">
                        <div class="panel panel-default">
                          <div class="panel-heading" style="margin-bottom: 20px">
                            <h3 class="panel-title"><strong>Loan Report Result</strong></h3>
                            <h6>Date: From <span style="color: #F73035">{{ $stdate }}</span> to <span style="color: #F73035">{{$endate}}</span></h6>
                          </div>
                          <div class="panel-body">
                            <div class="table-responsive">
                              <table class="table table-condensed">
                                <thead>
                                                <tr>
                                      <td><strong>Item Name</strong></td>
                                      <td class="text-center"><strong>Total Quantity</strong></td>
                                      <td class="text-right"><strong>Total Price</strong></td>
                                    
                                      
                                                </tr>
                                </thead>
                                <tbody>
                                  <!-- foreach ($order->lineItems as $line) or some such thing here -->

                                  @foreach($loan_reports as $order)
                                  <tr>
                                    <td>
                                        @foreach($items as $item)
                                          @if($order->item_id == $item->id )
                                              {{ $item->name }}
                                          @endif
                                        @endforeach
                                    </td>
                                    <td class="text-center">{{ $order->quantity }}</td>
                                    <td class="text-right">${{ $order->total_price }}</td>
                            
                                  </tr>
                                  @endforeach
                                              
                                  <tr>
                                    <td class="thick-line"></td>
                                   
                                    <td class="thick-line text-center"><strong>Unpaid Amount</strong></td>
                                    <td class="thick-line text-right">${{ $loan_reports->pluck('total_price')->sum() }}</td>
                                  </tr>
                                    
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

              </div>

        </div>

@endsection