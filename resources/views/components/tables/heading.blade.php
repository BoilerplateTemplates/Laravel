<th scope="col" {{ (isset($width) ? 'width=' . $width : null) }}>
	<div
		{{ $attributes->class(['flex flex-row items-center py-2 px-2 text-left text-sm font-semibold text-zinc-900']) }}>
		@if (isset($field))
			<a href="#" wire:click.prevent="sortBy('{{ $field }}')">{{ __($title) }}</a>
		@else
			{{ __($title) }}
		@endif
		
		@if (isset($field))
			<div class="ml-2">
				@if ($currentField === $field)
					<a href="#" wire:click.prevent="sortBy('{{ $field }}')">
						@if ($direction === 'asc')
							<x-icon
								name="caret-circle-down"
								class="h-{{ $iconSize ?? 6 }} w-{{ $iconSize ?? 6 }}"
								type="regular"
							/>
						@elseif($direction === 'desc')
							<x-icon
								name="caret-circle-up"
								class="h-{{ $iconSize ?? 6 }} w-{{ $iconSize ?? 6 }}"
								type="regular"
							/>
						@endif
					</a>
				@endif
			</div>
		@endif
	</div>
</th>
