@extends('index')

@section('content')
	<a href="{{ route('product') }}">Product</a>
	<a href="{{ route('category') }}">Category</a>
	<table>
		<tr>
			<td>id</td>
			<td>name</td>
			<td>quantity</td>
			<td>description</td>
			<td>category_id</td>
		</tr>
		@foreach ($categoryProduct as $value)
			<tr>
				<td> <a href="{{ route('showProduct', ['id' => $value->id]) }}">{{ $value->id }}</a> </td>
				<td>{{ $value->name }}</td>
				<td>{{ $value->quanlity }}</td>
				<td>{{ $value->description }}</td>
				<td>{{ $value->category_id }}</td>
			</tr>
		@endforeach		
	</table>
@endsection