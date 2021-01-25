@extends('base') 
@section('main')
<div class="container-fluid admin-container">
    <div class="row admin-header">

        <div class="col-sm-2 col-xs-12 user-box">
       
        </div>
        <div class="col-sm-10 col-xs-12 cat-box">
        <div class="inside-box">
        <h1>Admin</h1>
        </div>
        </div>
    </div>
    <div class="row admin-content">
    <div class="col-md-2 col-sm-12 col-xs-12 admin-sidebar sidebar left">
        <ul class="list-sidebar bg-defoult">
        <li class="mains"> <a href="{{url('home')}}"> <i class="fa fa-home"></i> <span class="nav-label">Home</span></a> </li>
        <li class="mains"> <a href="{{url('dashboard')}}"> <i class="fa fa-th-large"></i> <span class="nav-label">Projects</span></a> </li>
        <li class="mains"> <a href="{{url('about')}}"> <i class="fa fa-user"></i> <span class="nav-label">About</span></a> </li>
        <li class="mains"> <a href="{{url('contact')}}"> <i class="fa fa-phone"></i> <span class="nav-label">Contact</span></a> </li>



        </ul>
    </div>
    <div class="col-md-8  col-sm-12 col-xs-12 signup-form">
    <form action="{{url('post-login')}}" method="POST" id="logForm">
           {{ csrf_field() }}
           <h2>Login Account</h2>
           <p class="lead">Please fill in credentials to login.</p>
           <div class="form-group">
               <div class="input-group">
                   <span class="input-group-addon"><i class="fa fa-paper-plane"></i></span>
                   <input type="email" class="form-control" name="email" id="inputEmail" placeholder="Email Address" required="required">
               </div>
               @if ($errors->has('email'))
                   <span class="error">{{ $errors->first('email') }}</span>
               @endif
           </div>
           <div class="form-group">
               <div class="input-group">
                   <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                   <input type="password" class="form-control" name="password" id="inputPassword" placeholder="Password" required="required">
               </div>
               @if ($errors->has('password'))
                   <span class="error">{{ $errors->first('password') }}</span>
               @endif
           </div>
           <div class="form-group">
               <button type="submit" class="btn btn-primary btn-block btn-lg">Log In</button>
           </div>
           @if(session()->has('message'))
    <div class="alert alert-danger">
        {!! session()->get('message') !!}
    </div>
@endif
       </form>
    </div>
    </div>
    <div class="admin-footer">
    <p>Copyright &copy; 2020 - <?php echo date('Y')?> Dylan van Nierop. All Rights Reserved </p>
</div>
</div>
@endsection
       
