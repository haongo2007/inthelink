<div class="dropdown">
    <a class="btn btn-lg btn-icon-only" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fa fa-ellipsis-v"></i>
    </a>
    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
    	@if($row->type == 'sample')
	        @if($row->status == 0)
	        	<a class="dropdown-item" href="{{ route('supplier.requests.sample.update',['id' => $row->id , 'stt' => 1]) }}">{{ __('Accept') }}</a>
	        	<a class="dropdown-item" href="{{ route('supplier.requests.sample.update',['id' => $row->id , 'stt' => 2]) }}">{{ __('Decline') }}</a>
	        @elseif($row->status == 2)
	        	<a class="dropdown-item" href="{{ route('supplier.requests.sample.update',['id' => $row->id , 'stt' => 1]) }}">{{ __('Accept') }}</a>
	    	@else	
	        	<a class="dropdown-item" href="{{ route('supplier.requests.sample.update',['id' => $row->id , 'stt' => 2]) }}">{{ __('Decline') }}</a>
	        @endif
        @else
	        @if($row->status == 0)
	        	<a class="dropdown-item" href="{{ route('supplier.requests.sell.update',['id' => $row->id , 'stt' => 1]) }}">{{ __('Accept') }}</a>
	        	<a class="dropdown-item" href="{{ route('supplier.requests.sell.update',['id' => $row->id , 'stt' => 2]) }}">{{ __('Decline') }}</a>
	        @elseif($row->status == 2)
	        	<a class="dropdown-item" href="{{ route('supplier.requests.sell.update',['id' => $row->id , 'stt' => 1]) }}">{{ __('Accept') }}</a>
	    	@else	
	        	<a class="dropdown-item" href="{{ route('supplier.requests.sell.update',['id' => $row->id , 'stt' => 2]) }}">{{ __('Decline') }}</a>
	        @endif
	    @endif
    </div>
</div>