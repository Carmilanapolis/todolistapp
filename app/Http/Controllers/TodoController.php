<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    public function index(){
        $todos = Todo::orderBy('completed')->get();
        return view('todo.index')->with(['todos' => $todos]);
    }

    public function create(){
        return view('create');
    }

    public function upload(Request $request){
        $request->validate([
            'title' => 'required|max:255'
        ]);
        $todo = $request->title;
        Todo::create(['title' => $todo]);
        return redirect()->back()->with('success', "Created successfully!");
    }

    public function edit ($id){
        $todo = Todo::find($id);
        return view('todo.edit')->with(['id' => $id, 'todo' => $todo]);
    }

    public function update(Request $request){
        $request->validate([
            'title' => 'required|max:255'
        ]);
        $updateTodo = Todo::find($request->id);
        $updateTodo->update(['title' => $request->title]);
        return redirect('/index')->with('success', "Updated successfully!");
    }
   
    public function delete($id){
        $todo = Todo::find($id);
        $todo->delete();
        return redirect()->back()->with('success', "Deleted successfully!"); 
    }
}
