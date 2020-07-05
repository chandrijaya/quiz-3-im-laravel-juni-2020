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
              <h2 class="login-heading mb-4">Register</h2>
               <form action="{{url('post-registration')}}" method="POST" id="regForm">
                @csrf
                <div class="form-label-group">
                    <input type="text" id="inputName" name="name" class="form-control" placeholder="Full name" autofocus>
                    <label for="inputName">Name</label>
   
                    @if ($errors->has('name'))
                    <span class="error">{{ $errors->first('name') }}</span>
                    @endif       
   
                </div> 
                
                <div class="form-label-group">
                    <input type="text" id="inputUserName" name="username" class="form-control" placeholder="User name" autofocus>
                    <label for="inputUserName">User name</label>
   
                    @if ($errors->has('username'))
                    <span class="error">{{ $errors->first('username') }}</span>
                    @endif       
   
                </div> 

                <div class="form-label-group">
                  <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" >
                  <label for="inputEmail">Email address</label>
 
                  @if ($errors->has('email'))
                  <span class="error">{{ $errors->first('email') }}</span>
                  @endif    
                </div> 
 
                <div class="form-label-group">
                  <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password">
                  <label for="inputPassword">Password</label>
                   
                  @if ($errors->has('password'))
                  <span class="error">{{ $errors->first('password') }}</span>
                  @endif  
                </div>
 
                <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit">Sign Up</button>
                <div class="text-center">If you have an account?
                  <a class="small" href="{{url('login')}}">Sign In</a></div>
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