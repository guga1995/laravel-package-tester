<?php

return [
	/**
	 * This value decides to log or not to log requests.
	 */
	'debug' => [
		'enable' => env('ONWAY_DEBUG', true),
		'channel' => env('ONWAY_DEBUG_CHANNEL', null)
	],

	/**
	 * Should be provided by onway tech stuff.
	 */
	'username' => env('ONWAY_USER', 'supergmiri'),

	// /**
	//  * Should be provided by onway tech stuff.
	//  */
	// 'key' => env('ONWAY_KEY', 'qtLMsI85AKBqkE3OTJCvrkSw1kIlR1G5y3C1jmrEysTyfN2iHX'),

		/**
	 * Should be provided by onway tech stuff.
	 */
	'key' => env('ONWAY_KEY', 'G8AjFm4sivsSwPsK3p3dFtrv27aXinkJR8tCGQPpdukDWz1DcQ'),

	/**
	 * This is the url provided by onway.ge developer
	 */
	'base_api_url' => env('ONWAY_BASE_API_URL', 'https://onway.ge/index.php')
];
