@extends('base') 
@section('main')
<div class="container-fluid admin-container">
    <div class="row admin-header">

        <div class="col-sm-2 col-xs-12 user-box">
        <div class="inside-box">
        <p>User</p>
        </div>
        </div>
        <div class="col-sm-10 col-xs-12 cat-box">
        <div class="inside-box">
        <h1>Projects</h1>
        </div>
        </div>
    </div>
    <div class="row admin-content">
    <div class="col-md-2 col-sm-12 col-xs-12 admin-sidebar sidebar left">
            <ul class="list-sidebar bg-defoult">
              <li class='mains'> <a href="#" data-toggle="collapse" data-target="#dashboard" class="collapsed active" > <i class="fa fa-th-large"></i> <span class="nav-label"> Public-Pages </span> <span class="fa fa-chevron-left pull-right"></span> </a>
              <ul class="sub-menu collapse" id="dashboard">
                <li><a href="#">Home</a></li>
                <li><a href="#">Projects</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
              </ul>
            </li>
            <li class='mains'> <a href="#" data-toggle="collapse" data-target="#products" class="collapsed active" > <i class="fa fa-bar-chart-o"></i> <span class="nav-label">Admin-Pages</span> <span class="fa fa-chevron-left pull-right"></span> </a>
            <ul class="sub-menu collapse" id="products">
              <li class="active"><a href="#">Projects</a></li>
              <li><a href="{{ route('werken.users')}}">Admins</a></li>
              <li><a href="#">Statistics</a></li>
            
            </ul>
          </li>
        
        <li class="mains"> <a href="{{url('logout')}}"> <i class="fa fa-user"></i> <span class="nav-label">Log Out</span></a> </li>

    </ul>
    </div>
    <div class="col-md-10  col-sm-12 col-xs-12 admin-table">
        <table class="table table-striped ">
            <thead> 
                <tr>
                    <td>ID</td>
                    <td>Title</td> 
                    <td>Blog</td>
                    <td>Url</td>
                    <td>Image</td>
                    <td colspan = 2>Actions</td>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user) 
                <tr>
                    <td>{{$werk->id}}</td> 
                    <td>{{$werk->title}}</td> 
                    <td>{{$werk->blog}}</td> 
                    <td>{{$werk->url}}</td> 
                    <td>{{$werk->file}}</td> 
                    <td><a href="{{ route('werken.edit',$werk->id)}}" class="btn btn-warning">Edit</a></td> 
                    <td>
                        <form action="{{ route('werken.destroy', $werk->id)}}" method="post">
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
    
</div>
@endsection