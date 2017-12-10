@extends('layouts.layout') 
@section('content')


<div class="row">
    <div class="col-lg-6 col-lg-offset-3">
        <form method="post" action="/create/todo">
            {{csrf_field()}}
            <input type="text" name="todo" class="form-control input-lg" placeholder="Create a new Todo">
        </form>

    </div>
</div>

<hr> @foreach($todos as $todo) {{$todo->todo}}

<a href="{{ route('todo.delete', ['id' => $todo->id])}} " class="btn btn-danger btn-xs"> delete </a>
<a href="{{ route('todo.update', ['id' => $todo->id])}} " class="btn btn-success btn-xs"> update </a>
@if(!$todo->completed)
<a href=" {{route('todos.completed', ['id' => $todo->id])}} " class="btn btn-xs btn-primary">Mark as Completed</a>

@else

<span class="text-success">Completed!</span>

@endif
<hr> @endforeach @stop