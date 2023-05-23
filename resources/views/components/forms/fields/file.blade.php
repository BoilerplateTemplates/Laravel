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
		
		<input type="file"
		       id="{{ $name }}"
		       name="{{ $name }}"
		       @isset($required) required @endisset
		       class="form-input block w-full bg-zinc-50 border-0 border-zinc-50 p-2 focus:ring-0 placeholder-zinc-400 rounded-md
			        {{ $inputStyles ?? null }}
			        {{ isset($notes) ? 'rounded-b-none border-b-0' : null }}
			        {{ ($errors->has($name) || isset($errorTest)) ? 'border-red-600' : null }}
				"/>
	</div>
	
	@isset($notes)
		<x-forms.notes :text="$notes"/>
	@endisset
	
	@if ($errors->has($name) || isset($errorTest))
		<x-forms.error :text="$errorTest ?? $errors->first($name)"/>
	@endif
</div>
