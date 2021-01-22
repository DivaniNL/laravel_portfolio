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
                <h1>Change Project:</h1>
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
              <li class="active"><a href="{{ route('werken.index')}}">Projects</a></li>
              <li><a href="/users/index">Admins</a></li>
              <li><a href="#">Statistics</a></li>
            
            </ul>
          </li>
        
        <li class="mains"> <a href="{{url('logout')}}"> <i class="fa fa-user"></i> <span class="nav-label">Log Out</span></a> </li>

        </ul>
        </div>
        <div class="col-md-8  col-sm-8 col-xs-8 signup-form">
        <form method="post" action="{{ route('werken.update',[$werk->id]) }}">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-header"></i></span>
                        <input type="text" placeholder = "Title" class="form-control" name="title"/> 
                    </div>
                </div>  
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fas fa-pen"></i></span>
                        <input type="text" placeholder = "description" class="form-control" name="description"/> 
                    </div>
                </div>  
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-link"></i></span>
                        <input type="text" placeholder = "Url" class="form-control" name="url"/> 
                    </div>
                </div>  
                <div class="custom-file form-group">
                    <input type="file" name="file" class="custom-file-input" id="chooseFile">
                    <label class="custom-file-label" for="chooseFile">Select file</label>
                </div>
                <br><br>
                <button type="submit" class="btn btn-success btn-block btn-lg">Add</button>
            </form>
        </div>
    </div>
</div>
@endsection