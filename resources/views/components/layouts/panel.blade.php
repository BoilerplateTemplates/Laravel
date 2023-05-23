@props(['id', 'maxWidth'])

@php
	$id = $id ?? md5($attributes->wire('model'));
	
	$maxWidth = [
		'sm' => 'sm:max-w-sm',
		'md' => 'sm:max-w-md',
		'lg' => 'sm:max-w-lg',
		'xl' => 'sm:max-w-xl',
		'2xl' => 'sm:max-w-2xl',
		'3xl' => 'sm:max-w-3xl',
		'4xl' => 'sm:max-w-4xl',
	][$maxWidth ?? 'xl']
@endphp

<section
	x-data="{
        show: @entangle($attributes->wire('model')).defer,
        shiftPressed: false
    }"
	x-init="$watch('show', value => {
        if (value) {
            document.body.classList.add('overflow-y-hidden');
        } else {
            document.body.classList.remove('overflow-y-hidden');
        }
    })"
	x-on:close.stop="show = false"
	x-on:keydown.shift="shiftPressed = true"
	x-on:keyup.shift="shiftPressed = false"
	x-on:keydown.enter.prevent="if (shiftPressed) { $event.target.value = $event.target.value + '\n' }"
	x-show="show"
	id="{{ $id }}"
	class="fixed inset-0 z-40 overflow-hidden" aria-labelledby="slide-over-title" role="dialog" aria-modal="true"
	x-cloak>
	<div class="absolute inset-0 overflow-hidden">
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
		
		<div class="fixed inset-y-0 right-0 flex max-w-full pl-0 sm:pl-16"
		     x-show="show"
		     x-transition:enter="transform transition ease-in-out duration-300 sm:duration-500"
		     x-transition:enter-start="translate-x-full"
		     x-transition:enter-end="translate-x-0"
		     x-transition:leave="transform transition ease-in-out duration-300 sm:duration-500"
		     x-transition:leave-start="translate-x-0"
		     x-transition:leave-end="translate-x-full">
			<div class="w-screen {{ $maxWidth }}">
				{{ $slot }}
			</div>
		</div>
	</div>
</section>
