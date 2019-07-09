<form role="search" method="get" class="search-form" action="<?php echo home_url('/'); ?>">
	<fieldset>
		<label>
			<input
				type="search"
				class="search-form__field"
				placeholder="SEARCH ..."
				value="<?php echo esc_attr(get_search_query()); ?>"
				name="s"
				title="Search for:"
			/>
		</label>
		<button class="search-form__submit">
			<span class="search-form__icon" aria-hidden="true">
				?
			</span>
			<span class="screen-reader-text">
				<?php echo esc_html( 'Search' ); ?>
			</span>
		</button>
	</fieldset>
</form>
