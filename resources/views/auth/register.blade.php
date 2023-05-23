<x-layouts.main>
	<x-sections.row class="py-12">
		<div class="grid grid-cols-2 gap-16">
			<form method="post" action="{{ action(App\Http\Controllers\Auth\Register\StoreController::class) }}">
				@csrf
				@method('POST')
				
				<x-forms.fields.input
					type="text"
					label="Name"
					name="name"
					placeholder="Your name"
					required
					wrapper-styles="mb-8"
				/>
				
				<x-forms.fields.input
					type="email"
					label="Email"
					name="email"
					placeholder="Your email address"
					required
					wrapper-styles="mb-8"
				/>
				
				<x-forms.fields.input
					type="password"
					label="Password"
					name="password"
					placeholder="Your password"
					required
					wrapper-styles="mb-8"
				/>
				
				<x-forms.fields.input
					type="password"
					label="Confirm your password"
					name="confirm_password"
					required
					wrapper-styles="mb-8"
				/>
				
				<x-buttons.submit text="Create Account"/>
			</form>
		</div>
	</x-sections.row>
</x-layouts.main>
