<form action="{{ route('categories.store') }}" method="post" accept-charset="utf-8">
	@csrf
	<label>order</label>
	<input type="number" name="order">
	<label>title</label>
	<input type="text" name="title">
	<button type="submit">submit</button>
</form>