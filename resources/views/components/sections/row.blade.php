@if (isset($background))
	<div {{ $attributes->class(['bg-' . $background . ' pt-8 pb-12']) }}>
		<div class="mx-auto max-w-7xl px-4 xl:px-0">
			{{ $slot }}
		</div>
	</div>
@elseif (isset($border))
	<div {{ $attributes->class(['border-' . $border . ' border-b pt-8 pb-12']) }}>
		<div class="mx-auto mt-4 mb-8 max-w-7xl px-4 xl:px-0">
			{{ $slot }}
		</div>
	</div>
@else
	<div {{ $attributes->class(['mx-auto mt-8 mb-12 max-w-7xl px-4 xl:px-0']) }}>
		{{ $slot }}
	</div>
@endif
