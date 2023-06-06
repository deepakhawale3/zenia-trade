<?php

return [
	'bitcoin_credential' => [
		 'api_code' => "a67d5819-ddf9-48b4-bece-a46d11f0d1a2000",
        'guid' => "",
        'main_password' => "",
        //'url' => env('MIX_DOMAIN_URL'),
		'url' => "https://www.thehscc.co.uk",
        'xpub' => "",
        'block_key' => '',
        // 'public_key'=>'',
        // 'private_key'=>'',
        // 'public_key' => 'c927d7bf217a967520481003613fd2ec6a6251d60b7c1e29354bc02739e82759',
        // 'private_key' => '99ba20da01eaa54Ca73B4598ebaB29D57A16402CdBd9c2478AeB40A347f24a86',
		'public_key' => 'ea3f0c00d932e1a68167591df52a72e03c82c3d1245039f63a8780c01effd7db',
        'private_key' => 'f7285a39905301C9787a78ffc9AA3592d01F0767b5547C584d4022ac32D85e29',
        'coin_apiKey' => '',
        'coin_apiSecret' => '',
        'sender_public_key' => 'de8933d6ebc359848389dffe888cf348078640096d5716a8309852cb365f71b1',
        'sender_private_key' => '1d9c19ec202eAacdeFF961B5Ec3738b1a0E48f863d515958F687f914a3d36e64',
        'sender_coin_apiKey' => '',
        'sender_coin_apiSecret' => '',

	],
	'settings' => [
		'projectname' => 'HSCC',
		'from_email' => 'noreply@thehscc.co.uk',
		'linkexpire' => '24',
		'to_email' => 'noreply@thehscc.co.uk',
		'domain' => env('MIX_DOMAIN_URL'),
		// 'domainpath-vue' => 'https://www.leochains.com/leochains',
		// 'domainpath-vue' => 'http://localhost:8080/',
		'domainpath-vue' => env('APP_URL').'hscc/',
		'domainpath' => env('APP_URL'),
		'authKey' => '188786AuuEM7txc05a38d5d5',
		'senderId' => '',
		'enquiry_email' => 'support@thehscc.co.uk',
		'OTP_interval' => '+2 minutes',
		'sms_username' => '',
		'sms_pwd' => '',
		'sms_route' => 'trans1',
		'present_img' => 'present.png',
		'absent_img' => 'absent.png',
		'binary_income_per' => 10,
		'homepageDate' => ' 2018-02-23 00:00:00',
		'per_page_limit' => 10,
		'present_img' => 'present.png',
		'absent_img' => 'absent.png',
		'block_img' => 'block.png',
		'binary_income_per' => 10,
		'no_topup' => 'no_topup.png',
		'yellow_img' => 'yellow.png',
		'aws_url' =>'https://thehscc.s3.amazonaws.com/',
		'otpExpireMit'=>3,
		'adminOtpExpireHr' => 2,

		'flight_api'=>'https://api.amadeus.com',
      	'flight_client_id'=>'32SHYXdILwqUJCmvAet68rnTnAi6jd7A',
      	'flight_client_secret'=>'5OlZV43rTMXyBv0t',
      	'flight_grant_type'=>'client_credentials',

		'RECAPTCHA_SITE_KEY' => '6LfR3ZElAAAAANPjCabKZjXNH-KZEOAaXOMzhbAd',
		'RECAPTCHA_SECRET_KEY' => '6LfR3ZElAAAAAC3ZdhLvbOORmPRTEP_eNP9MRj2P',
		'RECAPTCHA_SITE_KEY_v2' => '6LdHxpElAAAAANVACA5_5qL1oY-QaCcaxAwx1UjI',
		'RECAPTCHA_SECRET_KEY_v2' => '6LdHxpElAAAAAEJTtREfRp6m2j5s2QaF3BZzRVFh',

		'RECAPTCHA_SITE_KEY_live' => '6LcWpJQlAAAAACeq-KmbHb3l8lngJxneYyF4AM2F',
		'RECAPTCHA_SECRET_KEY_live' => '6LcWpJQlAAAAAL4K6fRwrkY9fOFp_S1_ahJD_jMm',
		'RECAPTCHA_SITE_KEY_v2_live' => '6LfCpZQlAAAAACFx9vKF8pvRZHTxhKuv9o9c7I5R',
		'RECAPTCHA_SECRET_KEY_v2_live' => '6LfCpZQlAAAAAFagSBrf8YSLj8iSJjtepZF0wazO',

	],
	'statuscode' => [
		200 => ['code' => 200, 'status' => 'OK'],
		401 => ['code' => 401, 'status' => 'UNAUTHORIZED'],
		402 => ['code' => 402, 'status' => 'AUTHORIZED'],
		403 => ['code' => 403, 'status' => 'Invalid'],
		404 => ['code' => 404, 'status' => 'Not Found'],
		409 => ['code' => 409, 'status' => 'CONFLICT'],
		407 => ['code' => 407, 'status' => 'Internal error'],
		408 => ['code' => 408, 'status' => 'Internal server error'],
	],
	'crypto_currency' => [
		"Bitcoin" => "BTC",
		"Etherium" => "ETH",
		"Ripple" => "XRP",
		"BitcoinCash" => "BCH",
		"Litecoin" => "LTC",
		"NEO" => "NEO",
		"Cardano" => "ADA",
		"Stellar" => "XLM",
		"IOTA" => "IOTA",
	],
	'crypto_exchanger' => [
		"HitBTC" => "HitBTC",
		"Vebitcoin" => "Vebitcoin",
		"Cex" => "Cex",
		//"Cryptonator" => "Cryptonator",
		"Buyucoin" => "Buyucoin",
		"GateIO" => "GateIO",
		"CoinEgg" => "CoinEgg",
	],
	'crypto_currency_buy_sell' => [
		"Etherium" => "ETH",
		"Dash" => "DASH",
		"Dogecoin" => "DOGE",
		"Litecoin" => "LTC",
		"Zcash" => "ZEC",
		"Bitcoin" => "BTC",
	],
	'folder_settings' => [
		"userfolder" => "user",
	],
	'perfectmoney_credential' => [
		"PAYEE_ACCOUNT" => "",
		"PAYEE_NAME" => "",
		"PAYMENT_UNITS" => "USD",
		"STATUS_URL" => "",
		"PAYMENT_URL" => "",
		"NOPAYMENT_URL" => "",
	],
	'client_id' => '7',
	'client_secret' => '',
];
?>
