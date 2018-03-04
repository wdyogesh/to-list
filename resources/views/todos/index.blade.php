@extends('layouts.app')
@section('content')
<h2>Todo lists</h2>
@if(count($todos)>0)
    @foreach($todos as $todo)
        <div class="well">
            <a href="/todo/{{$todo->id}}"><h3>{{$todo->text}}</h3></a>
            <span class="label label-danger">{{$todo->due}}</span>
            {{$todo->text}}
        </div>
    @endforeach
@endif
@endsection