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

	<table style="width:100%">
		<thead>
			<th></th>
			<th>Urgent</th>

			<th>Not Urgent</th>
		</thead>
		<tbody>
			<tr>
				<td class=".matrix-left-th">
					Important
				</td>
				<td class="matrix-td">
					Quadrant Top Left
				</td>
				<td class="matrix-td">
					Quadrant Top Right
				</td>				
			</tr>
			<tr>
				<td class=".matrix-left-th">
					Not Important
				</td>
				<td class="matrix-td">
					Quadrant Top Left
				</td>
				<td class="matrix-td">
					Quadrant Top Right
				</td>				
			</tr>
		</tbody>
	</table>

@stop