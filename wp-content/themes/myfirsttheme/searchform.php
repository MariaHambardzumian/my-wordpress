<form role="search" method="get" id="searchform" action="<?php echo home_url('/');?>">
	<div>
		<input type="text" value="<?php echo $_GET['s']; ?>" name="s" id="s">
		<input type="submit" id="searchsubmit" value="Search">
	</div>
</form>