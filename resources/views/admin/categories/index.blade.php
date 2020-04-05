list categories<br>
{{ (session('status')) ? session('status') : '' }}
@foreach($categories as $category)
	{{ $category['title'] }}
	{{ $category['order'] }}
	<a href="{{ route('categories.edit',$category) }}" title="">edit</a>
	<form action="{{ route('categories.destroy', $category) }}" method="post">
        @csrf
        @method('delete')
        <button type="button" onclick="confirm('{{ __("Are you sure you want to delete this record") }}') ? this.parentElement.submit() : ''">
                    {{ __('Delete') }}
        </button>
           
    </form>
@endforeach