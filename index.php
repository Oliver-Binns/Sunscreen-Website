<?php
	use phpHTML\UICore\UILink;
	use phpHTML\UICore\UIPage\UINav;
	use phpHTML\UICore\UIPage\UIPage;
	use phpHTML\UICore\UIPage\UIPageBody;
	use phpHTML\UICore\UIPage\UIPageHead;

	include('include.php');

	echo new UIPage(
			new UIPageHead("Sunscreen - Information Sources", ['https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css', 'css/styles.css'], ['<meta name="viewport" content="width=device-width">']),
			new UIPageBody(
					[
							new UINav('', [new UILink('Sunscreen')], [], [], UINav::FIXED_NONE, false),
					]
			)
	);