<?php
return [
	/*
	|--------------------------------------------------------------------------
	| Allowed Domains
	|--------------------------------------------------------------------------
	|
	| This value is a list of domains that are allowed to access the api in the
	| form of adding CORS headers to the requests. A star can also be added
	| to this list to allow all domains.
	*/
	'allowed' => ['http://localhost:8080', 'http://docker.dev'],
	/*
	|--------------------------------------------------------------------------
	| Denied Domains
	|--------------------------------------------------------------------------
	|
	| This value is a list of domains that are denied to access the api.
	| All domains in this list will overrule the domains in the allowed list.
	*/
	'denied' => [],
];