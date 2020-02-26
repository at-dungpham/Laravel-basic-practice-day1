@extends('index')

@section('content')
	<a href="{{ route('product') }}">Product</a><br>
	<a href="{{ route('category') }}">Category</a>
	<table>
		<thead>
			<tr>
				<td>id</td>
				<td>name</td>
				<td>quantity</td>
				<td>description</td>
				<td>category_id</td>
			</tr>
		</thead>
		<tbody>
			<form action="{{ route('updateProduct', ['id' => $editIdProduct->id]) }}" method="POST">
				@csrf
				<tr>
					<td><p>{{ $editIdProduct->id }}</p></td>
					<td><input type="text" name="name" value="{{ $editIdProduct->name }}"></td>
					<td><input type="text" name="quanlity" value="{{ $editIdProduct->quanlity }}"></td>
					<td><input type="text" name="description" value="{{ $editIdProduct->description }}"></td>
					<td><input type="text" name="category_id" value="{{ $editIdProduct->category_id }}"></td>
					<td><input type="submit" value="update"></td>
				</tr>
			</form>
		</tbody>
	</table>
@endsection