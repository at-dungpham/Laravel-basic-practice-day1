@extends('index')

@section('content')
	<a href="{{ route('category') }}">Category</a><br>	
	<a href="{{ route('createProduct') }}">Create product</a>
	<table>
		<tr>
			<td>id</td>
			<td>name</td>
			<td>quantity</td>
			<td>description</td>
			<td>category_id</td>
		</tr>	
	@foreach ($index as $value)
		<tr>
			<td> <a href="{{ route('showProduct', ['id' => $value->id]) }}">{{ $value->id }}</a> </td>
			<td> {{ $value->name }} </td>
			<td> {{ $value->quanlity }} </td>
			<td> {{ $value->description }} </td>
			<td> {{ $value->category_id }} </td>
			<td>
				<form action="{{ route('deleteProduct', ['id' => $value->id]) }}" method="POST">
					@csrf
					@method('DELETE')
					<button type="submit">delete</button>
				</form>
			</td>
			<td> <a href="{{ route('editProduct', ['id' => $value->id]) }}">edit</a> </td>	
		</tr>
	@endforeach
	</table>
@endsection