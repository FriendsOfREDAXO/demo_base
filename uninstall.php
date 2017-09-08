<?php

/** @var rex_addon $this */

// read configs
$config1 = rex_file::getConfig($this->getPath('package.yml'));
$config2 = rex_file::getConfig($this->getPath('package.setup.yml'));

$packages1 = $config1['requires']['packages'];
$packages2 = $config2['requires']['packages'];

if (!is_array($packages1)) $packages1 = array();
if (!is_array($packages2)) $packages2 = array();

// reduce packages to initial version
$packages = array_diff(
    $packages1,
    $packages2
);

// update config with initial packages or delete if empty
if (count($packages) > 0) {
    $config1['requires']['packages'] = $packages;
} else {
    unset($config1['requires']['packages']);
}

// remove setup data
unset($config1['setup']);

// save config
rex_file::putConfig($this->getPath('package.yml'), $config1);
