@extends('index')

@section('content')
	<a href="{{ route('product') }}">Product</a>
	@if(session()->has('success'))
	    <div class="alert alert-success">
	        {{ session()->get('success') }}
	    </div>
	@endif	
	<table>
		<tr>
			<td>id</td>
			<td>name</td>
		</tr>
		@foreach ($index as $value)
			<tr>
				<td>{{ $value->id }}</td>
				<td><a href="{{ route('productCategory', ['id' => $value->id]) }}">{{ $value->name }}</a>
				</td>
				<td>
					<form action="{{ route('deleteCategory', ['id' => $value->id]) }}" method="POST">
						@csrf
						@method('DELETE')
						<input type="submit" value="delete">
					</form>
				</td>
			</tr>		
		@endforeach
	</table>
	{{ $index->links() }}
@endsection