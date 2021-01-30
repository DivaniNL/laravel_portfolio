@extends('base') 
@section('main')
<div class="container-fluid admin-container">
    <div class="row admin-header">
        <div class="col-sm-2 col-xs-12 user-box">
            <div class="inside-box">
                <p>{{ Auth::user()->name }}</p>
            </div>
        </div>
        <div class="col-sm-10 col-xs-12 cat-box">
            <div class="inside-box">
                <h1>Add User:</h1>
            </div>
        </div>
    </div>
    <div class="row admin-content">
        <div class="col-md-2 col-sm-12 col-xs-12 admin-sidebar sidebar left">
        <ul class="list-sidebar bg-defoult">
              <li class='mains'> <a href="#" data-toggle="collapse" data-target="#dashboard" class="collapsed active" > <i class="fa fa-th-large"></i> <span class="nav-label"> Public-Pages </span> <span class="fa fa-chevron-left pull-right"></span> </a>
              <ul class="sub-menu collapse" id="dashboard">
                <li><a href="/home">Home</a></li>
                <li><a href="/dashboard">Projects</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="/contact">Contact</a></li>
              </ul>
            </li>
            <li class='mains'> <a href="#" data-toggle="collapse" data-target="#products" class="collapsed active" > <i class="fa fa-bar-chart-o"></i> <span class="nav-label">Admin-Pages</span> <span class="fa fa-chevron-left pull-right"></span> </a>
            <ul class="sub-menu collapse" id="products">
              <li class="#"><a href="{{ route('werken.index')}}">Projects</a></li>
              <li class="active"><a href="/users/index">Admins</a></li>
              <li><a href="#">Statistics</a></li>
            
            </ul>
          </li>
        
        <li class="mains"> <a href="{{url('logout')}}"> <i class="fa fa-user"></i> <span class="nav-label">Log Out</span></a> </li>

        </ul>
        </div>
        <div class="col-md-8  col-sm-8 col-xs-8 signup-form">
        <form action="{{ route('users.store') }}" method="POST" id="regForm">
           {{ csrf_field() }}
           <div class="form-group">
               <div class="input-group">
                   <span class="input-group-addon"><i class="fa fa-user"></i></span>
                   <input type="text" class="form-control" name="name" id="inputName" placeholder="Username" required="required">
               </div>
               @if ($errors->has('name'))
                   <span class="error">{{ $errors->first('name') }}</span>
               @endif
           </div>
           <div class="form-group">
               <div class="input-group">
                   <span class="input-group-addon"><i class="fa fa-paper-plane"></i></span>
                   <input type="email" class="form-control" name="email" id="inputEmail" placeholder="E-mail address" required="required">
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
           <button type="submit" class="btn btn-success btn-block btn-lg">Add</button>
           </div>
       </form>
        </div>
    </div>
    <div class="admin-footer">
    <p>Copyright &copy; 2020 - <?php echo date('Y')?> Divani-Development. All Rights Reserved </p>
</div>
</div>
@endsection