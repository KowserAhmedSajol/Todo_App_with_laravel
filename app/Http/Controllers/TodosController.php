<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Todo;
class TodosController extends Controller
{
    public function show(){
        $todos = Todo::all();
        return view('todos.index')->with('todos',$todos);
    }
    public function destroy($id){
        $todos = Todo::find($id)->delete();
        session()->flash('success', 'Data Deleted Successfully');
        return redirect('todos');
    }
    public function view($id){
        $todos = Todo::find($id);
        return view('todos.view')->with('todo',$todos);
    }
    public function marking($request){
        $data = Todo::find($request);
        $data->completed = true;
        $data->save();
        session()->flash('success', 'Data Updated Successfully');
        return redirect('todos');
    }
    public function create(){
        return view('todos.create');
    }
    public function store(){
        $this->validate(request(), [
            'name' => 'required| min:6',
            'description' => 'required'
        ]);
        $data = request()->all();
        $todo = new Todo();
        $todo->name = $data['name'];
        $todo->description = $data['description'];
        $todo->completed = false;
        $todo->save();
        session()->flash('success', 'Data Added Successfully');

        return redirect('todos');
    }
    public function edit($req){
        $todos = Todo::find($req);
        return view('todos.create')->with('todo',$todos);
    }
    public function update($id) {
        $this->validate(request(), [
            'name' => 'required|min:6',
            'description' => 'required'
        ]);
        $data = request()->all();
        $todos = Todo::find($id);
        $todos->name = $data['name'];
        $todos->description = $data['description'];
        $todos->save();
        session()->flash('success', 'Data Updated Successfullly');
        return redirect('todos');
    }
}
