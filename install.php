<?php

/** @var rex_addon $this */

// read configs
$config1 = rex_file::getConfig($this->getPath('package.yml'));
$config2 = rex_file::getConfig($this->getPath('package.setup.yml'));

// merge packages and requires sections
$packages = $config1['requires']['packages'] + $config2['requires']['packages'];
$requires = $config1['requires'] + $config2['requires'];

// merge configs
$config = array_merge(
    $config1,
    $config2
);

// update config with requires and packages
$config['requires'] = $requires;
$config['requires']['packages'] = $packages;

// save config
rex_file::putConfig($this->getPath('package.yml'), $config);

// copy backup files
rex_dir::copy(
    $this->getPath('backups'),
    rex_addon::get('backup')->getDataPath()
);
