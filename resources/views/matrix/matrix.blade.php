@extends('layouts.app')
@section('title','Matrix')


@section('styles')
	<link href="/css/matrix.css" rel="stylesheet">
@stop


@section('content')
</div>
	
	@if(!empty($tasks))
	    <ul>
	    @foreach($tasks as $task)

	    <li>{{$task->task}}</li>

	    @endforeach
	    </ul>
	@endif
<center>
    <table>
            <tr>
                <th class="smally"> </th>
                <th style="background:#D5DED9;">URGENT</th>
                <th style="background:#D5DED9;">NOT URGENT</th>
            </tr>
            <tr>
                <td style="background:#D5DED9;" class="vertical_td"><div class="rotate">IMPORTANT</div></td>
                <td style="background:#CFF09E;">Quadrant 1</td>
                <td style="background:#80aaef;">Quadrant 2</td>
            </tr>
    
            <tr>
                <td style="background:#D5DED9;" class="vertical_td"><div class="rotate">NOT IMPORTANT</div></td>
                <td style="background:#f5fb5f;">Quadrant 3</td>
                <td style="background:#ff7277;">Quadrant 4</td>
            </tr>
    </table>
</center>

@stop