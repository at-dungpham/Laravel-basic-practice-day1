@extends('index')

@section('content')
	<a href="{{ route('product') }}">Product</a>
	@if ($errors->any())
	    <div>
	        <ul>
	            @foreach ($errors->all() as $error)
	                <li>{{ $error }}</li>
	            @endforeach
	        </ul>
	    </div>
	@endif
	<form action="{{ route('storeProduct') }}" method="POST">
		@csrf
		<label for="">name</label>
		<input type="text" value="" name="name">
		<label for="">quantity</label>
		<input type="text" value="" name="quanlity">
		<label for="">description</label>
		<input type="text" value="" name="description">
		<label for="">Category_id</label>
		<input type="text" value="" name="category_id">
		<input type="submit" value="create">
	</form>
@endsection