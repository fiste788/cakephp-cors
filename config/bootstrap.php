<?php

use Cake\Core\Configure;

/**
 * Configuration
 */
Configure::load('Cors.default', 'default');

$defaultConfig = (array) Configure::consume('Cors-default');
$personnalConfig = (array) Configure::consume('Cors');
$config = array_merge($defaultConfig, $personnalConfig);

Configure::write('Cors', $config);

if ($config['exceptionRenderer']) {
    Configure::write('Error.baseExceptionRenderer', Configure::read('Error.exceptionRenderer'));
    Configure::write('Error.exceptionRenderer', $config['exceptionRenderer']);
}
