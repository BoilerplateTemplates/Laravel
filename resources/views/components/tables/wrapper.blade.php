<div class="mt-2 flex flex-col">
	<div class="overflow-x-auto">
		<div class="inline-block min-w-full py-2 align-middle">
			<div class="overflow-hidden">
				<table class="min-w-full divide-y divide-zinc-400 mb-4">
					{{ $slot }}
				</table>
				
				@if (isset($pagination))
					{!! $pagination !!}
				@endif
			</div>
		</div>
	</div>
</div>
