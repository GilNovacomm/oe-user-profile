<?php
// Enable PHP error display.
ini_set('display_errors', 'on');
ini_set('error_display', E_ALL);

$config['system.logging']['error_level'] = 'verbose';

// Enable Drupal error logging.
$config['system.logging']['error_level'] = 'all';

// Trusted host patterns.
$settings['trusted_host_patterns'] = [
  '^.+$',
];

// Include development services.
$settings['container_yamls'][] = DRUPAL_ROOT . '/sites/default/development.services.yml';

// Allow rebuilding cache by visiting /rebuild.php.
$settings['rebuild_access'] = TRUE;

// Disable caching.
$settings['cache']['bins']['render'] = 'cache.backend.null';
$settings['cache']['bins']['dynamic_page_cache'] = 'cache.backend.null';
$settings['cache']['bins']['page'] = 'cache.backend.null';

// Disable CSS / JS aggregation.
$config['system.performance']['css']['preprocess'] = FALSE;
$config['system.performance']['js']['preprocess'] = FALSE;
$config['system.performance']['cache']['page']['max-age'] = 0;

// Disable "shield".
// Disable shield.
$config['shield.settings']['credentials']['shield']['user'] =
$config['shield.settings']['credentials']['shield']['pass'] =
  '';

// Stage file proxy.
// $config['stage_file_proxy.settings']['origin'] = 'https://example.com';

// Hash salt.
// If a hash salt is not configured, you can generate one with:
// drush eval 'echo Drupal\Component\Utility\Crypt::randomBytesBase64(55) . "\n";'
// $settings['hash_salt'] = 'HASH-SALT-GOES-HERE';