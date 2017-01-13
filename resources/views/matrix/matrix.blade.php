@extends('layouts.app')

<link href="/css/matrix.css" rel="stylesheet">

@section('title','Matrix')

@section('content')



@if(!empty($tasks))
    <ul>
    @foreach($tasks as $task)

    <li>{{$task->task}}</li>

    @endforeach
    </ul>
@endif

@stop