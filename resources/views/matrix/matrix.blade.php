@extends('layouts.app')
@section('title','Matrix')


@section('styles')
	<link href="/css/matrix.css" rel="stylesheet">
@stop


@section('content')
	<h2>Eisenhower Matrix</h2>	
	@if(!empty($tasks))
	    <ul>
	    @foreach($tasks as $task)

	    <li>{{$task->task}}</li>

	    @endforeach
	    </ul>
	@endif

<table>
        <tr>
            <th class="smally">/</th>
            <th>URGENT</th>
            <th>NOT URGENT</th>
        </tr>
        <tr>
            <td height="50" class="vertical_td"><div class="rotate">IMPORTANT</div></td>
            <td style="background:#CFF09E;">Quadrant 1</td>#D5DED9
            <td>Quadrant 2</td>
        </tr>

        <tr>
            <td height="5"><div class="rotate">NOT IMPORTANT</div></td>
            <td>Quadrant 1</td>
            <td>Quadrant 2</td>
        </tr>
</table>

@stop