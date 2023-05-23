<div class="{{ $wrapperStyles ?? null }}">
	<div
		class="relative rounded-md border border-zinc-300 {{ isset($notes) ? 'rounded-b-none border-b-0' : null }} bg-white px-3 pt-3 pb-2 focus-within:border-brand-highlight focus-within:ring-1 focus-within:ring-brand-highlight">
		@isset($label)
			<x-forms.label
				:field="$name"
				:text="$label"
				:styles="$labelStyles ?? null"
				:required="isset($required)"
			/>
		@endisset
		
		@isset($leading)
			<div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3.5 pt-1">
				<span class="text-zinc-500 sm:text-sm sm:leading-5 pl-2">
					{{ $leading }}
				</span>
			</div>
		@endisset
		
		<input
			id="{{ $name }}"
			type="{{ $type }}"
			name="{{ $name }}"
			autocomplete="{{ $name }}"
			placeholder="{{ __((isset($placeholder)) ? $placeholder : $label) }}"
			class="form-input block w-full bg-zinc-50 border-0 border-zinc-50 p-2 focus:ring-0 placeholder-zinc-400 rounded-md
			        {{ $inputStyles ?? null }}
			        {{ ($errors->has($name) || isset($errorTest)) ? 'border-red-600' : null }}
		            {{ isset($leading) ? 'pl-6' : null }}"
			@isset($value) value="{{ $value }}" @endisset
			@isset($required)
				required
			@endisset
			{{ $attributes }} />
		
		@isset($trailing)
			<div class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
				<span class="text-zinc-500 sm:text-sm sm:leading-5 pr-2">
					{{ $trailing }}
				</span>
			</div>
		@endisset
	</div>
	
	@isset($notes)
		<x-forms.notes :text="$notes"/>
	@endisset
	
	@if ($errors->has($name) || isset($errorTest))
		<x-forms.error :text="$errorTest ?? $errors->first($name)"/>
	@endif
</div>
