<?php

/** @var rex_addon $this */

$content = '';

$fragment = new \rex_fragment();
$fragment->setVar('title', $this->i18n('demo_base_description_install_heading'), false);
$fragment->setVar('body', rex_i18n::rawMsg('demo_base_description_install_body', rex_url::backendPage('backup/import/server')), false);
$content = $fragment->parse('core/page/section.php');

echo $content;
