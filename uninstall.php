<?php

/** @var rex_addon $this */

// read configs
$config1 = rex_file::getConfig($this->getPath('package.yml'));
$config2 = rex_file::getConfig($this->getPath('package.setup.yml'));

// reduce packages to initial version
$packages = array_diff(
    $config1['requires']['packages'],
    $config2['requires']['packages']
);

// update config with initial packages
$config1['requires']['packages'] = $packages;

// remove setup data
unset($config1['setup']);

// save config
rex_file::putConfig($this->getPath('package.yml'), $config1);
