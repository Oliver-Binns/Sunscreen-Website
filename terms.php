<?php
	use phpHTML\UICore\UIDiv;
	use phpHTML\UICore\UIHeading;
	use phpHTML\UICore\UILink;
	use phpHTML\UICore\UIPage\UINav;
	use phpHTML\UICore\UIPage\UIPage;
	use phpHTML\UICore\UIPage\UIPageBody;
	use phpHTML\UICore\UIPage\UIPageHead;
	use phpHTML\UICore\UIParagraph;

	include('include.php');

	echo new UIPage(
		new UIPageHead("Sunscreen - Terms & Conditions", ['https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css', 'css/styles.css'], ['<meta name="viewport" content="width=device-width">']),
		new UIPageBody(
			[
				new UINav('', [new UILink('Sunscreen')], [], [], UINav::FIXED_NONE, false),
				new UIDiv([
					new UIHeading(5, 'Usage of Sunscreen'),
					new UIParagraph(
						'Welcome to Sunscreen. If you continue to use this app, you are agreeing to comply with and be bound by the following terms and conditions of use, which together with our privacy policy govern Sunscreen\'s relationship with you in relation to this app. If you disagree with any part of these terms and conditions, please do not use our app.'
					),
					new UIHeading(5, 'What Sunscreen offers.'),
					new UIParagraph(
						'The Sunscreen app is offered as is. The developers of sunscreen make no guarantee for future updates or support. Sunscreen and it\'s individual features are subject to change without notice. Everyone\'s skin is different so Sunscreen gives general guidance and use only. Use common sense and appropriate sunscreen to avoid over exposure and sunburn. Your use of any information or materials in this app is entirely at your own risk, for which we shall not be liable. It shall be your own responsibility to ensure that any products, services or information available through this website meet your specific requirements.'),
					new UIHeading(5, 'Our Responsibility'),
					new UIParagraph(
						'Neither we nor any third parties provide any warranty or guarantee as to the accuracy, timeliness, performance, completeness or suitability of the information and materials found or offered on this website for any particular purpose. You acknowledge that such information and materials may contain inaccuracies or errors and we expressly exclude liability for any such inaccuracies or errors to the fullest extent permitted by law. Sunscreen no guarantee and accepts no responsibility for your health at any time. Should you start to burn, cover up or go inside immediately. For specialist advice please consult your GP.'
					),
					new UIHeading(5, 'Enforcement'),
					new UIParagraph('Your use of this app and any dispute arising out of such use of the website is subject to the laws of England, Northern Ireland, Scotland and Wales.')
				], 'container')
			]
		)
	);