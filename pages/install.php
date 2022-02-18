<?php

/** @var rex_addon $this */

/* setup process */

if (rex_post('install', 'boolean')) {
    $errors = rex_demo_base::install();

    // show result messages
    if (count($errors) > 0) {
        echo rex_view::error('<p>' . $this->i18n('installation_error') . '</p><ul><li>' . implode('</li><li>', $errors) . '</li></ul>');
    } else {
        echo rex_view::success('<p>' . $this->i18n('installation_success') . '</p>');
    }
}

/* setup info */

$content = '<p>' . $this->i18n('install_description') . '</p>';
$content .= '<p><button class="btn btn-send" type="submit" name="install" value="1"><i class="rex-icon fa-download"></i> ' . $this->i18n('install_button') . '</button></p>';

$fragment = new rex_fragment();
$fragment->setVar('title', $this->i18n('install_heading'), false);
$fragment->setVar('body', $content, false);
$content = $fragment->parse('core/page/section.php');

$content = '
<form action="' . rex_url::currentBackendPage() . '" method="post" data-confirm="' . $this->i18n('confirm_setup') . '">
    ' . $content . '
</form>';

echo $content;

/* package info from README.md */

$content = '';

$package = rex_package::get($this->getName());
$name = $package->getPackageId();
$version = $package->getVersion();
$author = $package->getAuthor();
$supportPage = $package->getSupportPage();

if (is_readable($package->getPath('README.'. rex_i18n::getLanguage() .'.md'))) {
    [$readmeToc, $readmeContent] = rex_markdown::factory()->parseWithToc(rex_file::require($package->getPath('README.'. rex_i18n::getLanguage() .'.md')), 2, 3, [
        rex_markdown::SOFT_LINE_BREAKS => false,
        rex_markdown::HIGHLIGHT_PHP => true,
    ]);
    $fragment = new rex_fragment();
    $fragment->setVar('content', $readmeContent, false);
    $fragment->setVar('toc', $readmeToc, false);
    $content .= $fragment->parse('core/page/docs.php');
} elseif (is_readable($package->getPath('README.md'))) {
    [$readmeToc, $readmeContent] = rex_markdown::factory()->parseWithToc(rex_file::require($package->getPath('README.md')), 2, 3, [
        rex_markdown::SOFT_LINE_BREAKS => false,
        rex_markdown::HIGHLIGHT_PHP => true,
    ]);
    $fragment = new rex_fragment();
    $fragment->setVar('content', $readmeContent, false);
    $fragment->setVar('toc', $readmeToc, false);
    $content .= $fragment->parse('core/page/docs.php');
} else {
    $content .= rex_view::info(rex_i18n::msg('package_no_help_file'));
}

if (!empty($content)) {
    $fragment = new rex_fragment();
    $fragment->setVar('title', rex_i18n::msg('package_help') . ' ' . $name, false);
    $fragment->setVar('body', $content, false);
    echo $fragment->parse('core/page/section.php');
}

/* credits */

$credits = '';
$credits .= '<dl class="dl-horizontal">';
$credits .= '<dt>' . rex_i18n::msg('credits_name') . '</dt><dd>' . htmlspecialchars($name) . '</dd>';

if ($version) {
    $credits .= '<dt>' . rex_i18n::msg('credits_version') . '</dt><dd>' . $version . '</dd>';
}
if ($author) {
    $credits .= '<dt>' . rex_i18n::msg('credits_author') . '</dt><dd>' . htmlspecialchars($author) . '</dd>';
}
if ($supportPage) {
    $credits .= '<dt>' . rex_i18n::msg('credits_supportpage') . '</dt><dd><a href="' . $supportPage . '" onclick="window.open(this.href); return false;">' . $supportPage . '</a></dd>';
}

$credits .= '</dl>';

$fragment = new rex_fragment();
$fragment->setVar('title', rex_i18n::msg('credits'), false);
$fragment->setVar('body', $credits, false);
echo $fragment->parse('core/page/section.php');
