@extends('layouts.app')
@section('content')
  <h3>Create Form for Todo</h3>
  {!! Form::open(['action'=>'TodosController@store', 'method'=>'POST']) !!}
    {{ Form::bsText('text')}}
    {{ Form::bsTextArea('body') }}
    {{ Form::bsText('due') }}
    {{ Form::bsSubmit('submit',['class'=>'btn btn-primary']) }}
  {!! Form::close() !!}
@endsection