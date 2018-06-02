@extends('layouts.master')


@section('content')

    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Password</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li class="active">Reset Password</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>



	<div id="pay-invoice">
	      <div class="card-body">
	          <div class="card-title">
	              <h3 class="text-center">Chanage <strong style="color: #F72F34">{{ ucfirst($user->fname) }} {{ ucfirst($user->lname) }}'s</strong> Password	</h3>
	          </div>
	          <hr>

	          <form action="/reset/password/{{ $user->id }}" method="post">

	          		{{ csrf_field() }}
	           

	              <div class="form-group">
	                  <label for="new_password" class="control-label mb-1">New Password</label>
	                  <input id="new_password" name="password" type="password" class="form-control">
	              </div>


	              <div class="form-group">
	                  <label for="new_password_again" class="control-label mb-1">New Password Again</label>
	                  <input id="new_password_again" name="password_confirmation" type="password" class="form-control">
	              </div>
	            

	              <div>
	                  <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
	                      <span id="payment-button-amount">Change Password</span>
	                      <span id="payment-button-sending" style="display:none;">Sending…</span>
	                  </button>
	              </div>


		             <div class="form-group">

							@include('layouts.errors')

					</div>
	          </form>

	      </div>
	</div>


@endsection