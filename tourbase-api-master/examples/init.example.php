<?php

// FOR THE EXAMPLES TO WORK, RENAME THIS TO init.i.php AND ADD THE REQUIRED INFORMATION

// load Arctic API
require_once __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'includes' . DIRECTORY_SEPARATOR . 'Api.php';

// initiate Arctic API
// PARAMETERS:
//      installation_name:  the subdomain of your Arctic installation (e.g., "float" if your installation is float.arcticres.com)
//      API username and password: used to authenticate against the installation and determine permission levels
//      Client ID and secret: the credentials used to authenticate your app, does not affect permission levels
\Arctic\Api::init('INSTALLATION_NAME','API_USERNAME','API_PASSWORD',array(
	'client_id'		=>	'CLIENT_ID',
	'client_secret'	=>	'CLIENT_SECRET'
));

