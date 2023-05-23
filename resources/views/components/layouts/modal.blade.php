@props(['id', 'maxWidth'])

@php
	$id = $id ?? md5($attributes->wire('model'));
	
	$maxWidth = [
		'sm' => 'sm:max-w-sm',
		'md' => 'sm:max-w-md',
		'lg' => 'sm:max-w-lg',
		'xl' => 'sm:max-w-xl',
		'2xl' => 'sm:max-w-2xl',
	][$maxWidth ?? 'xl']
@endphp

<div
	x-data="{
        show: @entangle($attributes->wire('model')).defer,
    }"
	x-init="$watch('show', value => {
        if (value) {
            document.body.classList.add('overflow-y-hidden');
        } else {
            document.body.classList.remove('overflow-y-hidden');
        }
    })"
	x-on:close.stop="show = false"
	x-on:keydown.escape.window="show = false"
	x-show="show"
	id="{{ $id }}"
	class="fixed inset-0 z-50 overflow-y-auto px-4 py-6 sm:px-0"
	x-cloak>
	<div class="fixed inset-0 z-10 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
		<div class="flex min-h-screen items-end justify-center px-4 pt-4 pb-20 text-center sm:block sm:p-0">
			<div x-show="show" class="fixed inset-0 transform transition-all"
			     x-on:click="show = false"
			     x-transition:enter="ease-out duration-300"
			     x-transition:enter-start="opacity-0"
			     x-transition:enter-end="opacity-100"
			     x-transition:leave="ease-in duration-200"
			     x-transition:leave-start="opacity-100"
			     x-transition:leave-end="opacity-0">
				<div class="absolute inset-0 bg-zinc-900 opacity-80"></div>
			</div>
			
			<span class="hidden sm:inline-block sm:h-screen sm:align-middle" aria-hidden="true">&#8203;</span>
			
			<div x-show="show"
			     class="inline-block align-bottom bg-white rounded-lg px-8 py-8 text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle {{ $maxWidth }} sm:w-full"
			     x-transition:enter="ease-out duration-300"
			     x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
			     x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
			     x-transition:leave="ease-in duration-200"
			     x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
			     x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95">
				{{ $slot }}
			</div>
		</div>
	</div>
</div>
