<?php

/** @var rex_addon $this */

// add success message after add-on install
$this->setProperty('successmsg', rex_i18n::rawMsg('demo_base_success_message', '<a href="' . rex_url::backendPage('demo_base') . '">' . $this->i18n('demo_base_title') . '</a>'));

// copy backup files
rex_dir::copy(
    $this->getPath('backups'),
    rex_addon::get('backup')->getDataPath()
);

// update config
// merge current config with additional config

// Background information:
// We need the demo to be installed first of all to fetch required packages and import data.
// To make this happen, we need to keep the config free of external dependencies and use an
// additional config which will be merged into the config when the demo is installed.
$config = array_replace_recursive(
    rex_file::getConfig($this->getPath('package.yml')),
    rex_file::getConfig($this->getPath('package.setup.yml'))
);

rex_file::putConfig($this->getPath('package.yml'), $config);
