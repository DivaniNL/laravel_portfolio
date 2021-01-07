@extends('base') 
@section('main')
<div class="row">
    <div class="col-sm-12">
        <h1 class="display-3">View non-admin</h1> 
        <table class="table table-striped">
            <thead> 
                <tr>
                    <td>ID</td>
                    <td>Title</td> 
                    <td>Blog</td>
                </tr>
            </thead>
            <tbody>
                @foreach($werken as $werk) 
                <tr>
                    <td>{{$werk->id}}</td> 
                    <td>{{$werk->title}}</td> 
                    <td>{{$werk->blog}}</td> 
                     
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection