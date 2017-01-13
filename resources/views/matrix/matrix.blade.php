@extends('layouts.app')

<link href="/css/matrix.css" rel="stylesheet">

@section('title','Matrix')

@section('content')

@if(!empty($tasks))
    <ul>
    @foreach($task as $tasks)
    
    <li>{{$task}}</li>

    @endforeach
    </ul>
@endif
@stop