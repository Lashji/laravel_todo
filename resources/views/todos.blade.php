@extends('layouts.layout') @section('content')


<div class="row">
    <div class="col-lg-6 col-lg-offset-3">
    <form method="POST" action="/create/todo">
        <input type="text" name="todo" id="" class="form-control input-lg" placeholder="Create a new Todo">
        <input type="submit">
    </form>
        
    </div>
</div>

<hr> @foreach($todos as $todo) {{$todo->todo}}
<hr> @endforeach @stop