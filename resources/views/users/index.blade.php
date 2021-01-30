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
        <h1>Admins</h1>
        </div>
        </div>
    </div>
    <div class="row admin-content">
        <div class="col-md-2 col-sm-12 col-xs-12 admin-sidebar sidebar left">
            <ul class="list-sidebar bg-defoult">
              <li class='mains'> <a href="#" data-toggle="collapse" data-target="#dashboard" class="collapsed active" > <i class="fa fa-th-large"></i> <span class="nav-label"> Public-Pages </span> <span class="fa fa-chevron-left pull-right"></span> </a>
              <ul class="sub-menu collapse" id="dashboard">
                <li><a href="/">Home</a></li>
                <li><a href="/dashboard">Projects</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="/contact">Contact</a></li>
              </ul>
            </li>
            <li class='mains'> <a href="#" data-toggle="collapse" data-target="#products" class="collapsed active" > <i class="fa fa-bar-chart-o"></i> <span class="nav-label">Admin-Pages</span> <span class="fa fa-chevron-left pull-right"></span> </a>
            <ul class="sub-menu collapse" id="products">
              <li><a href="../werken">Projects</a></li>
              <li class="active"><a href="#">Admins</a></li>
              <li><a href="#">Statistics</a></li>
            
            </ul>
          </li>
        
        <li class="mains"> <a href="{{url('logout')}}"> <i class="fa fa-user"></i> <span class="nav-label">Log Out</span></a> </li>

        </ul>
    </div>
    <div class="col-md-9  col-sm-12 col-xs-12 admin-table">
        <br>
    <a class="btn btn-success btn-lg btn-block" href="/users/create">Add new user <i class="fa fa-plus"></i></a>
        <table class="table table-striped ">
            <thead> 
                <tr>
                    <td>ID</td>
                    <td>Name</td> 
                    <td>Email</td>

                    <td colspan = 2>Actions</td>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user) 
                <tr>
                    <td>{{$user->id}}</td> 
                    <td>{{$user->name}}</td> 
                    <td>{{$user->email}}</td> 
                    <td><a href="{{ route('users.edit',$user->id)}}" class="btn btn-warning">Edit</a></td> 
                    <td>
                        <form action="{{ route('users.destroy', $user->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button> 
                        </form>
                    </td> 
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </div>
    <div class="admin-footer">
    <p>Copyright &copy; 2020 - <?php echo date('Y')?> Divani-Development. All Rights Reserved </p>
</div>
</div>
@endsection