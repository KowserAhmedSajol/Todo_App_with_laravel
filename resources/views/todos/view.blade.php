@extends('layouts.app')
@section('title')
<title>TODOS-APP::View Page</title>
@endsection
@section('content')
<h1 class="text-center">{{ $todo->name}} </h1>
       
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6"> 
                    <div class="card">
                        <div class="card-header">
                            TO DO ---> Details <span class="float-right">
                                @if($todo->completed == 0)
                                    <a href="/todos/marking/{{$todo->id}}" class="btn btn-warning btn-sm">Mark Completed</a>
                                @else
                                    <a href="" class="btn btn-info disabled btn-sm">Completed</a>

                                @endif
                            </span>
                        </div>
                        <div class="card-body">
                            {{ $todo->description}}<hr/>
                            <a class="btn btn-primary btn-sm" href="/todos/edit/{{$todo->id}}">Edit</a>
                            <a class="btn btn-danger btn-sm" href="/todos/delete/{{ $todo->id}}">Delete</a>
                        </div>

                    </div>
                    
                
                </div>   
            </div>
        </div>
@endsection

