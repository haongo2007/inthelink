<form action="{{ route('categories.update',$categories) }}" method="post" accept-charset="utf-8">
    @method('put')
	@csrf
	<label>order</label>
	<input type="number" name="order" value="{{ $categories->order }}">
	<label>title</label>
	<input type="text" name="title" value="{{ $categories->title }}">
	<button type="submit">submit</button>
</form>