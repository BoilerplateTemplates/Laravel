@if (in_array($permission, $roles))
	<a href="{{ $action }}"
	   class="group flex w-full items-center rounded-md py-2 pl-10 pr-2 text-sm text-zinc-50 hover:bg-zinc-600 hover:bg-opacity-50 hover:text-zinc-100">
		{{ $name }}
	</a>
@endif
