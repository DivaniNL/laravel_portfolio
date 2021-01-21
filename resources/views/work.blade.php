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
                    <td>description</td>
                </tr>
            </thead>
            <tbody>
                @foreach($werken as $werk) 
                <tr>
                    <td>{{$werk->id}}</td> 
                    <td>{{$werk->title}}</td> 
                    <td>{{$werk->description}}</td> 
                     
                </tr>
                @endforeach
            </tbody>
        </table>
        <ul class="project_images">
        @foreach($werken as $werk) 
        <li><a href="//{{$werk->url}}">
            <img class = "image_project" src="{{ asset('storage/images/'.$werk->file) }}" alt="Image"/>
            </a> 
        </li>
                    
                     

                @endforeach
                </ul>
    </div>
</div>
@endsection