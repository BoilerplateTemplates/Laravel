<x-layouts.main>
	<x-sections.row
		border="zinc-200">
		<x-sections.header
			title="Typography"
			description="Examples of the five main styles"
			count="5"
		/>
		
		<x-typography.heading1 text="Heading H1" class="mb-2"/>
		<x-typography.heading2 text="Heading H2" class="mb-2"/>
		<x-typography.heading3 text="Heading H3" class="mb-2"/>
		<x-typography.heading4 text="Heading H4" class="mb-2"/>
		
		<x-typography.paragraph>
			Some text here
		</x-typography.paragraph>
	</x-sections.row>
	
	<x-sections.row
		border="zinc-200">
		<x-sections.header
			title="Buttons"
			description="Examples of the four main styles"
			count="4"
		/>
		
		<div class="grid grid-cols-1 gap-6 sm:grid-cols-4">
			<div>
				<x-buttons.link action="#" text="Link" class="w-full"/>
			</div>
			<div>
				<x-buttons.link-small action="#" text="Link (Small)"/>
			</div>
			<div>
				<x-buttons.submit text="Submit" class="w-full"/>
			</div>
			<div>
				<x-buttons.submit-icon icon="user"/>
			</div>
		</div>
	</x-sections.row>
	
	<x-sections.row>
		<x-sections.header
			title="Icons"
			description="Examples of various icon styles"
			count="16"
		/>
		
		<div class="grid grid-cols-8 gap-6 sm:grid-cols-16">
			<x-icon name="user" regular class="h-8 w-8"/>
			<x-icon name="user" class="h-8 w-8"/>
			<x-icon name="user" light class="h-8 w-8"/>
			<x-icon name="user" fill class="h-8 w-8 text-brand-highlight"/>
			<x-icon name="airplane" regular class="h-8 w-8"/>
			<x-icon name="airplane" class="h-8 w-8"/>
			<x-icon name="airplane" light class="h-8 w-8"/>
			<x-icon name="airplane" fill class="h-8 w-8 text-brand-highlight"/>
			<x-icon name="crown" regular class="h-8 w-8"/>
			<x-icon name="crown" class="h-8 w-8"/>
			<x-icon name="crown" light class="h-8 w-8"/>
			<x-icon name="crown" fill class="h-8 w-8 text-brand-highlight"/>
			<x-icon name="hand-waving" regular class="h-8 w-8"/>
			<x-icon name="hand-waving" class="h-8 w-8"/>
			<x-icon name="hand-waving" light class="h-8 w-8"/>
			<x-icon name="hand-waving" fill class="h-8 w-8 text-brand-highlight"/>
		</div>
	</x-sections.row>
	
	<x-sections.row>
		<x-sections.header
			title="Forms"
			count="18"
		/>
		
		<div class="mb-6 grid gap-6 grid-col-1 sm:grid-cols-3">
			<x-forms.fields.input
				type="text"
				label="Input field"
				name="input"
			/>
			<x-forms.fields.input
				type="text"
				label="Input field"
				name="input"
				required
			/>
			<x-forms.fields.input
				type="text"
				label="Input field with error"
				name="input"
				errorTest="This field should be filled in"
			/>
			<x-forms.fields.input
				type="text"
				label="Input field with leading"
				name="input"
				leading="$"
			/>
			<x-forms.fields.input
				type="text"
				label="Input field with trailing"
				name="input"
				trailing="%"
			/>
			<x-forms.fields.input
				type="text"
				label="Input field with leading & trailing"
				name="input"
				leading="+"
				trailing="%"
			/>
			<x-forms.fields.input
				type="text"
				label="Input field"
				name="input"
				notes="Notes sit under an input field"
			/>
			<x-forms.fields.input
				type="text"
				label="Input field"
				placeholder="Different placeholder"
				name="input"
				notes="Field has a different placeholder to the label"
			/>
		</div>
		<div class="mb-6 grid gap-6 grid-col-1 sm:grid-cols-3">
			<x-forms.fields.datepicker
				type="text"
				label="Date picker field"
				placeholder="Different placeholder"
				name="date_range"
			/>
			<x-forms.fields.file
				type="text"
				label="Input field"
				placeholder="Different placeholder"
				name="input"
				notes="Field has a different placeholder to the label"
			/>
		</div>
		<div class="mb-6 grid gap-6 grid-col-1 sm:grid-cols-2">
			<x-forms.fields.select
				label="Select field"
				name="input"
			/>
			<x-forms.fields.select
				label="Select field"
				name="input"
				required
			/>
			<x-forms.fields.select
				label="Select field"
				placeholder="Different placeholder"
				name="input"
				notes="Field has a different placeholder to the label"
			/>
			<x-forms.fields.select
				label="Select field with error"
				name="input"
				errorTest="This field should be filled in"
			/>
		</div>
		<div class="mb-24 grid gap-6 grid-col-1 sm:grid-cols-2">
			<x-forms.fields.textarea
				label="Textarea field"
				name="input"
			/>
			<x-forms.fields.textarea
				label="Textarea field"
				name="input"
				required
			/>
			<x-forms.fields.textarea
				label="Textarea field with error"
				name="input"
				errorTest="This field should be filled in"
			/>
			<x-forms.fields.textarea
				label="Textarea field"
				placeholder="Different placeholder"
				name="input"
				rows="3"
				notes="Field has a different placeholder to the label"
			/>
		</div>
	</x-sections.row>
</x-layouts.main>
