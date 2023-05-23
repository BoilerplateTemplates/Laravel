<label for="{{ $field }}" class="absolute -top-2 left-2 -mt-px inline-block bg-white px-1 text-xs font-normal {{ $styles ?? null }}">
	{{ __($text) }}
	
	@if ($required === true)
		<span class="mx-2 font-normal normal-case">* {{ __('required') }}</span>
	@endif
</label>

