<?php
	use phpHTML\UICore\UIDiv;
	use phpHTML\UICore\UILink;
	use phpHTML\UICore\UIPage\UINav;
	use phpHTML\UICore\UIPage\UIPage;
	use phpHTML\UICore\UIPage\UIPageBody;
	use phpHTML\UICore\UIPage\UIPageHead;
	use phpHTML\UICore\UIParagraph;

	include('include.php');

	echo new UIPage(
		new UIPageHead("Sunscreen - Privacy", ['https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css', 'css/styles.css'], ['<meta name="viewport" content="width=device-width">']),
		new UIPageBody(
			[
				new UINav('', [new UILink('Sunscreen')], [], [], UINav::FIXED_NONE, false),
				new UIDiv(
					new UIParagraph(
						'Sunscreen asks you to share health and location data with us so that we can provide a better user experience and display guidance that is relevant to you. We take your privacy very seriously and, as such, do not sell, give, trade or otherwise distribute any of your data to any third parties. When you use the app, we will send your current location (to the nearest kilometre) and your skin type to our secure server (hosted in London, UK) via SSL (an encrypted link) where is will be stored with an anonymous device token. This will allow us to send you push notification reminders about when you will need to apply sunscreen. If you have any queries regarding Sunscreen\'s stance on privacy, feel free to email us at <a href="mailto:privacy@oliverbinns.info">privacy@oliverbinns.info</a>.'
					), 'container'
				)
			]
		)
	);
?>
