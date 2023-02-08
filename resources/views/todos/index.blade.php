@extends('layouts.app')
@section('title')
<title>TODOS-APP::Show Page</title>
@endsection
@section('content')
<div class="container col-md-8 mx-auto" >
            <h1 style="text-align:center; margin:50px; font-size:50px;">Todo view</h1>
            <div class="card">
                <div class="card-header" style="font-size: large; font-weight: bold; ">
                Todo Item  
                @if (session()->has('success')) 
                    <div class="alert alert-success"> 
                        {{session()->get('success')}}
                    </div>
                @endif  
                    
                </div>
                <div class="card-body">  
                <a href="/todos/create"  class="btn btn-primary btn-lg btn-block mb-2">Add New TODO</a>
                <table class="table table-dark">
                    <thead">
                        <th >Name</th>
                        <th >Status</th>
                        <th colspan="3">Action</th>
                    </thead>
                    <tbody>
                    @foreach($todos as $todo) 
                    <tr>
                        <td>{{ $todo->name}}</td>
                        <td>
                           @if($todo->completed == 1) 
                            Completed
                           @else
                            Not Completed
                           @endif
                        </td> 
                        <td>
                            <a class="btn btn-success btn-sm" href="/todos/view/{{ $todo->id}}">View</a>
                        </td>
                        <td>
                            <a class="btn btn-primary btn-sm" href="/todos/edit/{{$todo->id}}">Edit</a>
                        </td> 
                        <td>
                            <a class="btn btn-danger btn-sm" href="/todos/delete/{{ $todo->id}}">Delete</a>
                        </td> 
                        <td>  
                            @if($todo->completed == 0)
                                <a href="/todos/marking/{{$todo->id}}" class="btn btn-warning btn-sm">Mark Completed</a>
                            @else
                                <a href="" class="btn btn-info btn-sm disabled">Marked Completed</a>

                            @endif
                         
                        </td> 
                    </tr>
                    @endforeach
                    </tbody> 
                </table>
                </div>
            </div>
        </div>
@endsection