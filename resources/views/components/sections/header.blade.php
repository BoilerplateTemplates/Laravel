<div class="flex flex-row items-center gap-2 {{ (!isset($description)) ? 'mb-6' : null }}">
	<x-typography.heading4 :text="$title" :class="(!isset($count)) ? 'my-1' : null" />
	@if (isset($count))
		<x-badge :count="$count"/>
	@endif
</div>

@if (isset($description))
	<x-typography.paragraph class="mb-6 text-sm">
		{{ $description }}
	</x-typography.paragraph>
@endif
