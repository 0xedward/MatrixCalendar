@extends('layouts.app')

<link href="/css/matrix.css" rel="stylesheet">

@section('title','Matrix')

@section('content')

@if(!empty($tasks))
    <ul>
    @foreach($tasks as $MatrixTask)
    
    <li>{{$MatrixTask->d}}</li>

    @endforeach
    </ul>
@endif
@stop