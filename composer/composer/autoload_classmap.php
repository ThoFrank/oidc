<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = $vendorDir;

return array(
    'Composer\\InstalledVersions' => $vendorDir . '/composer/InstalledVersions.php',
    'OCA\\OIDCIdentityProvider\\Controller\\LoginRedirectorController' => $baseDir . '/../lib/Controller/LoginRedirectorController.php',
    'OCA\\OIDCIdentityProvider\\Controller\\OIDCApiController' => $baseDir . '/../lib/Controller/OIDCApiController.php',
    'OCA\\OIDCIdentityProvider\\Controller\\UserInfoController' => $baseDir . '/../lib/Controller/UserInfoController.php',
    'OCA\\OIDCIdentityProvider\\Controller\\DiscoveryController' => $baseDir . '/../lib/Controller/DiscoveryController.php',
    'OCA\\OIDCIdentityProvider\\Controller\\JwksController' => $baseDir . '/../lib/Controller/JwksController.php',
    'OCA\\OIDCIdentityProvider\\Controller\\LogoutController' => $baseDir . '/../lib/Controller/LogoutController.php',
    'OCA\\OIDCIdentityProvider\\Controller\\PageController' => $baseDir . '/../lib/Controller/PageController.php',
	// 'OCA\\OIDCIdentityProvider\\Controller\\JwtLoginController' => $baseDir . '/../lib/Controller/JwtLoginController.php',
	'OCA\\OIDCIdentityProvider\\Controller\\JwtGenerator' => $baseDir . '/../lib/Controller/JwtGenerator.php',
    'OCA\\OIDCIdentityProvider\\Controller\\SettingsController' => $baseDir . '/../lib/Controller/SettingsController.php',
    'OCA\\OIDCIdentityProvider\\BackgroundJob\\CleanupExpiredTokens' => $baseDir . '/../lib/BackgroundJob/CleanupExpiredTokens.php',
    'OCA\\OIDCIdentityProvider\\BackgroundJob\\CleanupGroups' => $baseDir . '/../lib/BackgroundJob/CleanupGroups.php',
	'OCA\\OIDCIdentityProvider\\Db\\AccessToken' => $baseDir . '/../lib/Db/AccessToken.php',
    'OCA\\OIDCIdentityProvider\\Db\\AccessTokenMapper' => $baseDir . '/../lib/Db/AccessTokenMapper.php',
    'OCA\\OIDCIdentityProvider\\Db\\Client' => $baseDir . '/../lib/Db/Client.php',
    'OCA\\OIDCIdentityProvider\\Db\\ClientMapper' => $baseDir . '/../lib/Db/ClientMapper.php',
	'OCA\\OIDCIdentityProvider\\Db\\Group' => $baseDir . '/../lib/Db/Group.php',
    'OCA\\OIDCIdentityProvider\\Db\\GroupMapper' => $baseDir . '/../lib/Db/GroupMapper.php',
    'OCA\\OIDCIdentityProvider\\Db\\RedirectUri' => $baseDir . '/../lib/Db/RedirectUri.php',
    'OCA\\OIDCIdentityProvider\\Db\\RedirectUriMapper' => $baseDir . '/../lib/Db/RedirectUriMapper.php',
	'OCA\\OIDCIdentityProvider\\Db\\LogoutRedirectUri' => $baseDir . '/../lib/Db/LogoutRedirectUri.php',
    'OCA\\OIDCIdentityProvider\\Db\\LogoutRedirectUriMapper' => $baseDir . '/../lib/Db/LogoutRedirectUriMapper.php',
    'OCA\\OIDCIdentityProvider\\Exceptions\\AccessTokenNotFoundException' => $baseDir . '/../lib/Exceptions/AccessTokenNotFoundException.php',
    'OCA\\OIDCIdentityProvider\\Exceptions\\ClientNotFoundException' => $baseDir . '/../lib/Exceptions/ClientNotFoundException.php',
	'OCA\\OIDCIdentityProvider\\Exceptions\\RedirectUriNotFoundException' => $baseDir . '/../lib/Exceptions/RedirectUriNotFoundException.php',
    'OCA\\OIDCIdentityProvider\\Migration\\CreateKeys' => $baseDir . '/../lib/Migration/CreateKeys.php',
    'OCA\\OIDCIdentityProvider\\Migration\\Version0001Date20220209222100' => $baseDir . '/../lib/Migration/Version0001Date20220209222100.php',
    'OCA\\OIDCIdentityProvider\\Migration\\Version0002Date20220301210900' => $baseDir . '/../lib/Migration/Version0002Date20220301210900.php',
    'OCA\\OIDCIdentityProvider\\Migration\\Version0003Date20220927082100' => $baseDir . '/../lib/Migration/Version0003Date20220927082100.php',
	'OCA\\OIDCIdentityProvider\\Migration\\Version0004Date20220928082100' => $baseDir . '/../lib/Migration/Version0004Date20220928082100.php',
	'OCA\\OIDCIdentityProvider\\Migration\\Version0005Date20221009082100' => $baseDir . '/../lib/Migration/Version0005Date20221009082100.php',
	'OCA\\OIDCIdentityProvider\\Migration\\Version0006Date20221011082100' => $baseDir . '/../lib/Migration/Version0006Date20221011082100.php',
	'OCA\\OIDCIdentityProvider\\Migration\\Version0007Date20230121172100' => $baseDir . '/../lib/Migration/Version0007Date20230121172100.php',
	'OCA\\OIDCIdentityProvider\\Migration\\Version0008Date20230204190000' => $baseDir . '/../lib/Migration/Version0008Date20230204190000.php',
	'OCA\\OIDCIdentityProvider\\Migration\\Version0009Date20230401232100' => $baseDir . '/../lib/Migration/Version0009Date20230401232100.php',
	'OCA\\OIDCIdentityProvider\\Settings\\Admin' => $baseDir . '/../lib/Settings/Admin.php',
);
