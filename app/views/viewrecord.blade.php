<!DOCTYPE html>
<html>
<title>View Users</title>
<body>
	<table>
		@extends('layout')

		@section ('content')

		@foreach($viewrecord as $data)
		<tr>
			<td>{{$data -> recieveby}}</td>
			<td>{{$data -> for}}</td>
			<td>{{$data -> subject}}</td>
		</tr>
		@endforeach
		@stop
	</table>




</body>
</html>