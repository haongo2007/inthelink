<div class="dropdown">
    <a class="btn btn-lg btn-icon-only" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fa fa-ellipsis-v"></i>
    </a>
    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
        <form action="{{ route('categories.destroy', $row) }}" method="post">
            @csrf
            @method('delete')
            <a class="dropdown-item" href="{{ route('categories.edit', $row) }}">{{ __('Edit') }}</a>
            <button type="button" class="dropdown-item" onclick="confirm('{{ __("Are you sure you want to delete this record") }}') ? this.parentElement.submit() : ''">
                        {{ __('Delete') }}
            </button>
               
        </form>
    </div>
</div>