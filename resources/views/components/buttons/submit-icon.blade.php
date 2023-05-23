<button type="submit"
	{{ $attributes->class(['inline-flex items-center justify-center rounded-full uppercase border border-transparent bg-brand-primary p-1 text-sm font-semibold text-white hover:bg-brand-highlight hover:text-brand-primary']) }}>
	<x-icon
		class="h-6 w-6 flex-shrink-0"
		:name="$icon"
		variant="regular"
	/>
</button>
