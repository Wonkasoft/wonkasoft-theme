<?php
/**
 *  This is the search form template
 */
?>

<form role="search" method="get" class="search-form" action="<?php echo home_url(); ?>">
	<label>
		<span class="screen-reader-text">Search for:</span>
		<input type="search" class="search-field" placeholder="Search …" value="" name="s">
	</label>
	<input type="submit" class="search-submit" value="Search">
</form>
<i id="search-btn-toggle" class="fa fa-search"></i>