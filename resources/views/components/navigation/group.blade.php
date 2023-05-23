<div x-data="{ open: false }" class="bg-zinc-800 rounded-md"
     :class="{ 'bg-zinc-700 rounded-md' : open, 'bg-zinc-800 rounded-md': !open }">
	<button type="button"
	        class="text-zinc-50 hover:bg-zinc-900 hover:text-zinc-100 group w-full flex items-center pl-2 pr-1 py-2 text-left text-sm rounded-md"
	        @click="open = !open">
		<x-icon class="mr-3 h-5 w-5 flex-shrink-0 text-zinc-100 group-hover:text-zinc-200"
		        :name="$icon"/>
		<span class="flex-1">{{ $name }}</span>
		<x-icon
			class="ml-3 h-5 w-5 flex-shrink-0 transform transition-colors duration-150 ease-in-out group-hover:text-zinc-400 text-zinc-300"
			name="caret-circle-right"
			variant="regular"
			x-bind:class="{ 'text-zinc-200 rotate-90': open, 'text-zinc-100': !open }"/>
	</button>
	<div x-show="open" x-cloak>
		{{ $slot }}
	</div>
</div>
