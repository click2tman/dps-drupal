<?php

/**
 * Load services definition file.
 */
$settings['container_yamls'][] = __DIR__ . '/services.yml';

/**
 * Include the Pantheon-specific settings file.
 *
 * n.b. The settings.pantheon.php file makes some changes
 *      that affect all envrionments that this site
 *      exists in.  Always include this file, even in
 *      a local development environment, to insure that
 *      the site settings remain consistent.
 */
include __DIR__ . "/settings.pantheon.php";

/**
 * If there is a local settings file, then include it
 */
$local_settings = __DIR__ . "/settings.local.php";
if (file_exists($local_settings)) {
  include $local_settings;
}
$settings['install_profile'] = 'standard';

$settings['file_private_path'] = '../files-private';

$settings['file_public_path'] = 'sites/default/files';

$config_directories['vcs'] = '../config/default';

$config_directories = array(
  CONFIG_SYNC_DIRECTORY => '../config/default/',
);

$settings['hash_salt'] = 'ja7DFFidVUxDhwTC0BHC6u4Y1Nn63FPlfwkrkC256f-VmBTJTjraeZgHykOdQKFyDWMlnVIIew';

#$settings['trusted_host_patterns'] = array(
#  '^.+\.drupal.tambalamin\.local$',
#  '^.drupal.tambalamin\.local$',
#  '^.+\.dpswww1.drupal.tambalamin\.local$',
#  '^.dpswww1.drupal.tambalamin\.local$',
#  '^.+\.dpswww2.drupal.tambalamin\.local$',
#  '^.dpswww2.drupal.tambalamin\.local$',
#);

