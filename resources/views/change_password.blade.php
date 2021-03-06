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
    </div>




<div id="pay-invoice">
      <div class="card-body">
          <div class="card-title">
              <h3 class="text-center">Chanage Your Password	</h3>
          </div>
          <hr>

          <form action="/password/{{Auth::user()->id}}" method="post">

          		{{ csrf_field() }}
             
              <div class="form-group">
                  <label for="current_password" class="control-label mb-1">Current Password</label>
                  <input id="cc-current_password" name="current_password" type="password" class="form-control">
              </div>


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