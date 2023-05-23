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
		
		<select
			id="{{ $name }}"
			name="{{ $name }}"
			{{ isset($required) ? 'required' : null }}
			{{ isset($multiple) ? 'multiple size="6"' : null }}
			placeholder="{{ __((isset($placeholder)) ? $placeholder : $label) }}"
			class="form-select block w-full bg-zinc-50 border-0 border-zinc-50 p-2 focus:ring-0 placeholder-zinc-400 rounded-md
			        {{ $inputStyles ?? null }}
			        {{ isset($notes) ? 'rounded-b-none border-b-0' : null }}
			        {{ ($errors->has($name) || isset($errorTest)) ? 'border-red-600' : null }}
	            "
			{{ $attributes }}>
			
			@isset($nullValue)
				<option value="" {{ ($value == null) ? 'selected' : null }} disabled>{{ $nullValue }}</option>
			@endisset
			
			@if (isset($dataWithKeys) && isset($data))
				@foreach($data as $dataKey => $row)
					<option value="{{ $dataKey }}"
					        @if (isset($multiple) && in_array($dataKey, $value))
						        selected
					        @elseif ($dataKey == $value)
						        selected
						@endif>
						{{ (isset($modifier) && $modifier === 'ucfirst-values') ? ucfirst($row) : $row }}
					</option>
				@endforeach
			@elseif (isset($dataAsNestedArray) && isset($data))
				@foreach($data as $row)
					<option value="{{ $row['value'] }}"
					        @if (isset($multiple) && in_array($row['value'], $value))
						        selected
					        @elseif ($row['value'] == $value)
						        selected
						@endif>
						{{ (isset($modifier) && $modifier === 'ucfirst-values') ? ucfirst($row['label']) : $row['label'] }}
					</option>
				@endforeach
			@elseif (isset($data))
				@foreach($data as $row)
					<option value="{{ $row }}"
					        @if (isset($multiple) && in_array($row, $value))
						        selected
					        @elseif ($row == $value)
						        selected
						@endif>
						{{ (isset($modifier) && $modifier === 'ucfirst-values') ? ucfirst($row) : $row }}
					</option>
				@endforeach
			@endif
		</select>
	</div>
	
	@isset($notes)
		<x-forms.notes :text="$notes"/>
	@endisset
	
	@if ($errors->has($name) || isset($errorTest))
		<x-forms.error :text="$errorTest ?? $errors->first($name)"/>
	@endif
</div>
