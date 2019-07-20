<form role="search" method="get" class="search-form" action="<?php echo home_url('/'); ?>">
	<fieldset class="search-form__fieldset">
		<label>
			<input
				type="search"
				class="search-form__field"
				placeholder="Type and hit enter..."
				value="<?php echo esc_attr(get_search_query()); ?>"
				name="s"
				title="Search for:"
			/>
		</label>
	</fieldset>
</form>
