@extends('layouts.app')
@section('content')
    <a href="/todo/{{$todo->id}}" class="btn btn-default">Go Back</a>
    <h3>Edit Form todo</h3>
    {!! Form::open(['action'=>['TodosController@update',$todo->id],'method'=>'POST']) !!}
    {{ Form::bsText('text', $todo->text)}}
    {{ Form::bsTextArea('body', $todo->body) }}
    {{ Form::bsText('due', $todo->due) }}
    {{ Form::hidden('_method', 'PUT') }}
    {{ Form::bsSubmit('submit',['class'=>'btn btn-primary']) }}
    {!! Form::close() !!}
@endsection