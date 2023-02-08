@extends('layouts.app')
@section('title')
<title>TODOS-APP::Create Page</title>
@endsection
@section('content')
<div class="container">
    <h1 class="text-center"> {{ isset($todo) ? 'Update' : 'Create New'}} Post</h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">

                <div class="card-header">
                    {{ isset($todo) ? 'Update' : 'Create New'}}
                     TODO
                </div>

                <div class="card-body">
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul class="list-group">
                                @foreach($errors->all() as $error)
                                <li class="list-group-item">
                                    {{$error}}
                                </li>  
                                @endforeach
                            </ul>
                            

                        </div>
                    @endif
                    <form action="/store-todos/{{ isset($todo) ? $todo->id : ''}}" method="post">
                        @csrf
                        <div class="form-group">
                            <input class="form-control" name="name" placeholder="name" value="{{ isset($todo) ? $todo->name : ''}}" />
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" type="text" name="description" placeholder="description" rows="5" cols="5">{{ isset($todo) ? $todo->description : '' }}</textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-success btn-block" type="submit">{{ isset($todo) ? 'Update' : 'Create' }} TODO</button>
                        </div>

                    </form>

                </div>

            </div>
        </div>

    </div>


</div>
@endsection

<div class="container">

</div>