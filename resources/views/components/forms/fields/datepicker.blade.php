{{-- Styles are held in public/vendor/flatpickr/css/flatpickr.css --}}
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
		
		<x-forms.fields.hidden field="{{ $name }}" :value="$value ?? null"/>
		
		<x-flatpickr
			:id="$name"
			date-format="Y-m-d"
			alt-format="d/m/Y"
			:min-date="isset($futureDatesOnly) ? today() : null"
			:max-date="isset($pastDatesOnly) ? today() : null"
			:first-day-of-week="1"
			:multiple="isset($multiple)"
			:clearable="!isset($unclearable)"
			placeholder="{{ __((isset($placeholder)) ? $placeholder : $label) }}"
			onChange="handleDatePickerChange"
		/>
	</div>
	
	@isset($notes)
		<x-forms.notes :text="$notes"/>
	@endisset
	
	@if ($errors->has($name) || isset($errorTest))
		<x-forms.error :text="$errorTest ?? $errors->first($name)"/>
	@endif
</div>


@push('styles')
	@include('flatpickr::components.style')
@endpush

@push('scripts')
	@include('flatpickr::components.script')
	
	<script>
		function handleDatePickerChange(selectedDates, dateStr, instance) {
			document.querySelector('input[name="{{ $name }}"]').value = dateStr;
		}
	</script>
@endpush
