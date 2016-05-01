<?php
	use phpHTML\UICore\UIDiv;
	use phpHTML\UICore\UIHeading;
	use phpHTML\UICore\UILink;
	use phpHTML\UICore\UIList;
	use phpHTML\UICore\UIPage\UINav;
	use phpHTML\UICore\UIPage\UIPage;
	use phpHTML\UICore\UIPage\UIPageBody;
	use phpHTML\UICore\UIPage\UIPageHead;
	use phpHTML\UICore\UIParagraph;

	include('include.php');

	echo new UIPage(
		new UIPageHead("Sunscreen - Information Sources", ['https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css', 'css/styles.css'], ['<meta name="viewport" content="width=device-width">']),
		new UIPageBody(
			[
				new UINav('', [new UILink('Sunscreen')], [], [], UINav::FIXED_NONE, false),
				new UIDiv(
					[
						new UIParagraph(
						'In order to make sure that Sunscreen gives accurate data, we get data from the official bodies in various countries. To ensure transparency, our full list of sources is available here. If you have any queries regarding Sunscreen\'s sources of information, feel free to email us at <a href="mailto:privacy@oliverbinns.info">privacy@oliverbinns.info</a>.'),
						new UIHeading(5, 'Cancer Research UK'),
						new UIList(
							[
								new UILink('Am I at risk of sunburn?', 'http://www.cancerresearchuk.org/about-cancer/causes-of-cancer/sun-uv-and-cancer/am-i-at-risk-of-sunburn', '', '_blank'),
								new UILink('Ways to enjoy the sun safely', 'http://www.cancerresearchuk.org/about-cancer/causes-of-cancer/sun-uv-and-cancer/ways-to-enjoy-the-sun-safely', '', '_blank')
							]),
						new UIHeading(5, 'US Environmental Protection Agency'),
						new UIList([
							new UILink('UV Index Scale', 'https://www.epa.gov/sunsafety/uv-index-scale-1', '', '_blank')
						]),
						new UIHeading(5, 'UK National Health Service'),
						new UIList([
							new UILink('Sun safety Q&amp;A', 'http://www.nhs.uk/Livewell/travelhealth/Pages/SunsafetyQA.aspx', '', '_blank')
						]),
						new UIHeading(5, 'Weather Underground'),
						new UIList([
							new UILink('UV Index Forecast', 'https://www.wunderground.com/', '', '_blank')
						])
					], 'container'
				)
			]
		)
	);