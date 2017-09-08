<?php

/** @var rex_addon $this */

// copy backup files
rex_dir::copy(
    $this->getPath('backups'),
    rex_addon::get('backup')->getDataPath()
);


// read configs
$config1 = rex_file::getConfig($this->getPath('package.yml'));
$config2 = rex_file::getConfig($this->getPath('package.setup.yml'));

$requires1 = $config1['requires'];
$requires2 = $config2['requires'];
$packages1 = $config1['requires']['packages'];
$packages2 = $config2['requires']['packages'];

if (!is_array($requires1)) $requires1 = array();
if (!is_array($requires2)) $requires2 = array();
if (!is_array($packages1)) $packages1 = array();
if (!is_array($packages2)) $packages2 = array();

// merge requires and packages sections
$requires = $requires1 + $requires2;
$packages = $packages1 + $packages2;

// merge configs
$config = array_merge(
    $config1,
    $config2
);

// update config with requires and packages
if (count($requires) > 0) $config['requires'] = $requires;
if (count($packages) > 0) $config['requires']['packages'] = $packages;

// save config
rex_file::putConfig($this->getPath('package.yml'), $config);
