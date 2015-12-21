<?php

/** @var rex_addon $this */

rex_dir::copy(
    $this->getPath('backups'),
    rex_addon::get('backup')->getDataPath()
);
