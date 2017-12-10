@extends('layouts.layout')

@section('content')

<div class="row">

<div class="col-md-12 ">

<form action=" {{route('todos.save', ['id' => $todo->id])}} " method="post">

    {{csrf_field()}}
    <input type="text" name="todo" value=" {{$todo->todo}} " class="form-control input-lg" placeholder="Create a new Todo">
</form>


</div>

</div>

@stop