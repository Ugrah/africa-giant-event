<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<div class="row">
	hey
	<script>
		var greetDate = new Date();
		var hrsGreet = greetDate.getHours();

		var greet;
		if (hrsGreet < 12)
			greet = "<?php echo _l('good_morning'); ?>";
		else if (hrsGreet >= 12 && hrsGreet <= 17)
			greet = "<?php echo _l('good_afternoon'); ?>";
		else if (hrsGreet >= 17 && hrsGreet <= 24)
			greet = "<?php echo _l('good_evening'); ?>";
		if(greet) {
			// document.getElementById('greeting').innerHTML =
			// '<b>' + greet + ' <?php // echo $contact->firstname; ?>!</b>';
		}
	</script>
