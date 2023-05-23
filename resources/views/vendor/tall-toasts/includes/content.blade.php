<div
	class="overflow-hidden z-50 px-4 py-4 bg-zinc-100 rounded border-l-8 cursor-pointer pointer-events-auto select-none hover:bg-white"
	x-bind:class="{
                    'border-zinc-400': toast.type === 'debug',
                    'border-blue-400': toast.type === 'info',
                    'border-green-400': toast.type === 'success',
                    'border-yellow-400': toast.type === 'warning',
                    'border-red-600': toast.type === 'danger'
                  }">
	<div class="flex justify-between items-center space-x-5">
		<div class="flex-1 mr-2">
			<div
				class="font-sans-titles uppercase text-xl"
				x-show="toast.title !== undefined"
				x-html="toast.title"
			></div>
			
			<div
				class="text-sm"
				x-show="toast.message !== undefined"
				x-html="toast.message"
			></div>
		</div>
		
		<template x-if="toast.type==='debug'">
			<x-icon name="bug" regular class="w-8 h-8 text-zinc-600"/>
		</template>
		
		<template x-if="toast.type==='info'">
			<x-icon name="info" bold class="w-8 h-8 text-blue-400"/>
		</template>
		
		<template x-if="toast.type==='success'">
			<x-icon name="check" bold class="w-8 h-8 text-green-400"/>
		</template>
		
		<template x-if="toast.type==='warning'">
			<x-icon name="warning" bold class="w-8 h-8 text-yellow-400"/>
		</template>
		
		<template x-if="toast.type==='danger'">
			<x-icon name="warning" bold class="w-8 h-8 text-red-600"/>
		</template>
	</div>
</div>
