
@extends('layouts.master')

@section('content')
<div class="container-fluid">
  <div class="row no-gutter">
    <div class="d-none d-md-flex col-md-3"></div>
    <div class="col-md-8 col-lg-6">
      <div class="login d-flex align-items-center py-5">
        <div class="container">
          <div class="row">
            <div class="col-md-9 col-lg-8 mx-auto">
              <h3 class="login-heading mb-4">Login Account</h3>
               <form action="{{url('post-login')}}" method="POST" id="logForm">
 
                 {{ csrf_field() }}
 
                <div class="form-label-group">
                  <input type="username" name="username" id="inputUserName" class="form-control" placeholder="User name" >
                  <label for="inputUserName">User Name / Email</label>
 
                  @if ($errors->has('username'))
                  <span class="error">{{ $errors->first('username') }}</span>
                  @endif    
                </div> 
 
                <div class="form-label-group">
                  <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password">
                  <label for="inputPassword">Password</label>
                   
                  @if ($errors->has('password'))
                  <span class="error">{{ $errors->first('password') }}</span>
                  @endif  
                </div>
 
                <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit">Sign In</button>
                <div class="text-center">If you don't have an account?
                  <a class="small" href="{{url('registration')}}">Sign Up</a></div>
                  <div class="text-center">Back to 
                    <a class="small" href="{{url('')}}">Home</a></div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
 
@endsection

@push('scripts')

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

@endpush