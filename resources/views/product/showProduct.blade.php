@extends('index')

@section('content')
	<a href="{{ route('product') }}">Product</a>
	<table>
		<tr>
			<td>id</td>
			<td>name</td>
			<td>quantity</td>
			<td>description</td>
			<td>category_id</td>
		</tr>
		<tr>
			<td>{{ $showIdProduct->id }}</td>
			<td>{{ $showIdProduct->name }}</td>
			<td>{{ $showIdProduct->quanlity }}</td>
			<td>{{ $showIdProduct->description }}</td>
			<td>{{ $showIdProduct->category_id }}</td>
		</tr>
	</table>
@endsection