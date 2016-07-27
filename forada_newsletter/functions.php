function add_mailchimp_popup_form() {
	?>
	<script type="text/javascript" src="//s3.amazonaws.com/downloads.mailchimp.com/js/signup-forms/popup/embed.js" data-dojo-config="usePlainJson: true, isDebug: false"></script><script type="text/javascript">require(["mojo/signup-forms/Loader"], function(L) { L.start({"baseUrl":"mc.us2.list-manage.com","uuid":"c7c484cc38a433a8b3c4cb744","lid":"f33e919b4f"}) })</script>
	<?php
}

add_action( 'wp_footer', 'add_mailchimp_popup_form' );