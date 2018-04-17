@extends('sale.master')

@section('content')

<div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Sale</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li class="active">Add Items To Invoice</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>


    


    <div class="col-sm-8 col-md-8 col-lg-8" >


        



        <div class="row" style="margin-top: 10px; background-color: #ffffff">

            <div class="col-lg-12">
                <div class="card">



                    <div class="card-header">


                       

                            <div class="row">
                               

                                    <form class="navbar-form" role="search" method="post" action="/search/item">
                        
                                        <div class="input-group add-on" style="width: 500px; margin-left: 50%" >

                                            {{ csrf_field() }}

                                          <input class="form-control" placeholder="Item code or item name" name="search" id="search" type="text" autofocus>
                                          
                                          <div class="input-group-btn">
                                            <button class="btn" type="submit" style="border-top-right-radius: 5px; margin-left: 4px; background-color: #22A7F0; color: #fff">Search</button>
                                          </div>

                                        </div>

                                        

                                    </form>
                            
                       
                                
                            </div>


                            <div class="row" style="margin-top: 20px">


                                    <form method="post" action="/buyer/order">

                                          {{csrf_field()}}

                                        <div class="input-group add-on" style="width: 500px; margin-left: 50%">
                                            <select class="form-control" name="buyer">
                                                <option value="0">Standard Buyer</option>
                                                
                                                @foreach($buyers as $buyer)
                                                    <option value="{{$buyer->id}}">{{ $buyer->place_name }}</option>
                                                @endforeach

                                            </select>

                                            <select class="form-control" name="payment">
                                                <option value="1">Paid</option>
                                                <option value="0">Loan</option>
                                            </select>

                                            <div class="input-group-btn">
                                            <button class="btn" type="submit" style="border-top-right-radius: 5px; margin-left: 4px;background-color: #26C281; color: #fff">Apply</button>
                                          </div>
                                            
                                         </div>

                                    </form>
                                                                
                                
                            </div>




                            
                        
 

                        
                    </div>





                    @if(isset($items))
                    <div class="card-body">
                        <table class="table table-bordered">
                          <thead>
                            <tr>
                              <th scope="col">#</th>
                              <th scope="col">Name</th>
                              <th scope="col">Code</th>
                              <th scope="col">Quantity</th>
                              <th scope="col">Minimum Price</th>
                              <th scope="col">Miximum Price</th>
                              <th scope="col">Item  Category</th>
                              <th scope="col">Color Category</th>
                              <th scope="col">Material Category</th>
                              
                              <th scope="col">Add</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($items as $key=>$item)
                                <tr>
                                  <td scope="row">{{ ++$key }}</td>

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
                                  
                                 

                                  
                                   


                                  <td>
                                    <a href="/add/basket/{{$item->id}}">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                                Add
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
                    @endif





                    @if(session('$many_items') or count($many_items) > 0)
                    <div class="card-body">
                        <table class="table table-bordered">
                          <thead>
                            <tr>
                              <th scope="col">#</th>
                              <th scope="col">Name</th>
                              <th scope="col">Code</th>
                              <th scope="col">Quantity</th>
                              <th scope="col">Minimum Price</th>
                              <th scope="col">Miximum Price</th>
                              <th scope="col">Item  Category</th>
                              <th scope="col">Color Category</th>
                              <th scope="col">Material Category</th>
                              
                              <th scope="col">Add</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($many_items as $key=>$item)
                                <tr>
                                  <td scope="row">{{ ++$key }}</td>

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
                                  
                                 

                                  
                                   


                                  <td>
                                    <a href="/add/basket/{{$item->id}}">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                                Add
                                        </button>
                                    </a>
                                  </td>


                                </tr>
                            @endforeach


                              
                            
          
                          </tbody>
                        </table>
                    </div>









                    <div style="margin-left: auto; margin-right: auto;">
                        
                    </div>
                    @endif

                    
                </div>
            </div>   


            
        </div>




                    
    </div>




    <div class="col-sm-4 col-md-3 col-lg-4" style="background-color: #fff; margin-top: 10px;">
        <div class="panel panel-default">
            <div class="panel-heading" style="padding: 16px; background-color: #757D75; width: 100%;">
                <h3 class="text-center"><strong style="color: #fff">Order Summary</strong></h3>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-condensed" >
                        <thead>
                            <tr>
                                <td><strong>Item Name</strong></td>
                                <td class="text-center"><strong>Item Price</strong></td>
                                <td class="text-center"><strong>Item Quantity</strong></td> 
                                <td class="text-center"><strong>Total</strong></td>
                                <td class="text-right"><strong></strong></td>
                                
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($baskets as $basket)
                            <tr>
                                <td>{{ $basket->item->name }}</td>

                                <td class="text-center">
                                    ${{ $basket->price }}

                                        @if($basket->price == $basket->item->max_price)

                                         <a href="/discount/basket/{{ $basket->id }}">
                                            <i class="fa fa-arrow-circle-down" style="color: #22A7F0; margin-left: 5px;"></i>
                                        </a>

                                        @endif
                                </td>

                                <td class="text-center">

                                    <form method="post" action="/update/quantity/{{ $basket->id }}">

                                            {{ csrf_field() }}

                                          <input type="number" name="quantity" value="{{ $basket->quantity }}" style="width: 50px"> 

                                          <button type="submit"><i class="fa fa-check-square" style="color: #26C281;"></i></button>

                                                                                          
                                    </form>
                                    
                                </td>

                               
                                <td class="text-center">
                                    ${{ $basket->total_price }}
                                </td>

                                <td class="text-right">
                                    
                                   

                                    <a href="/delete/basket/{{ $basket->id }}">
                                        <i class="fa fa-minus-circle" style="color: #C91F37;"></i>
                                    </a>

                                </td>

                            </tr>
                            @endforeach


                            <tr>
                                <td colspan="5"><strong style="font-size: 15pt; float: right;">

                                  <span style="margin-right: 15px;">Total</span> ${{ $baskets->pluck('total_price')->sum() }}
                                </strong></td>
                            </tr>

                            <tr>
                                  @if($baskets->count() > 0)
                                    @if($baskets->first()->payment_type == 0 && $basket->first()->buyer_id >0)
                                      <td colspan="5">
                                        <p>sell to {{ $baskets->first()->buyer->place_name }} as loan</p>
                                      </td>
                                    @endif
                                  @endif
                            </tr>
                           
                            
                        </tbody>
                    </table>
                </div>

                    <div class="panel-heading" style="padding: 10px; margin-bottom: 3px ;background-color: #26C281">
                        <h3 class="text-center">
                            <strong style="color: #fff">
                                    <a href="{{ route('order_confirm') }}" style="color: #fff">Confirm</a>
                            </strong>
                        </h3>
                    </div>

                    <div class="panel-heading" style="padding: 10px; background-color: #C91F37; margin-bottom: 15px ;">
                        <h3 class="text-center">
                            <strong style="color: #fff">
                                <a class="del" href="{{ route('cancel_order') }}" style="color: #fff" >Cancel</a> 
                            </strong>
                        </h3>
                    </div>



            </div>
        </div>
    </div>




@endsection


