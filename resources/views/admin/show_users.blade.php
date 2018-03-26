@extends('layouts.master')


@section('content')

    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Users</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li class="active">All Users</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>


	<div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <strong class="card-title">Employees</strong>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th scope="col">Number</th>
                      <th scope="col">First Name</th>
                      <th scope="col">Last Name</th>
                      <th scope="col">Email</th>
                      <th scope="col">Phone</th>
                      <th scope="col">Gender</th>
                      <th scope="col">Job Title</th>
                      <th scope="col">Update</th>
                      <th scope="col">Password</th>
                      <th scope="col">Status</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                  	@foreach($users as $key=>$user)
	                    <tr>
	                      <th scope="row">{{ ++$key }}</th>
	                      <td>{{ ucfirst($user->fname) }}</td>
	                      <td>{{ ucfirst($user->lname) }}</td>
	                      <td>{{ $user->email }}</td>
	                      <td>0{{ $user->phone }}</td>
	                      <td>{{ ucfirst($user->gender) }}</td>
	                      <td>
                            
                              @foreach($user->roles as $role)

                                {{ ucfirst($role->type) }}

                              @endforeach
                            
                        </td>

	                      <td>
	                      	<a href="/update/user/{{ $user->id }}">
	                      	<button type="submit" class="btn btn-primary btn-sm">
        				          		Update
        				        	</button>
        				        	</a>
	                      </td>

                        <td>

                          <a href="/reset/password/{{ $user->id }}">
                            <button type="submit" class="btn btn-danger btn-sm">
                                Reset
                            </button>
                          </a>

                        </td>

	                      <td>
	                      	<a href="/activation/user/{{$user->id}}" style="<?php if($user->status){echo 'color: green';}else{echo 'color: red';}?>">
	                      		@if($user->status)

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

        </div>
    </div>


@endsection