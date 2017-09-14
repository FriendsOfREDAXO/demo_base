<?php

/** @var rex_addon $this */

// update config
// remove additional config from base config
$config = array_diff_recursive(
    rex_file::getConfig($this->getPath('package.yml')),
    rex_file::getConfig($this->getPath('package.setup.yml'))
);

rex_file::putConfig($this->getPath('package.yml'), $config);


// Computes the difference of two arrays recursively
// https://gist.github.com/t3chnik/6b3b14d3859d810c02f4
function array_diff_recursive($aArray1, $aArray2)
{
    $aReturn = array();
    foreach ($aArray1 as $mKey => $mValue) {
        if (array_key_exists($mKey, $aArray2)) {
            if (is_array($mValue)) {
                $aRecursiveDiff = array_diff_recursive($mValue, $aArray2[$mKey]);
                if (count($aRecursiveDiff)) {
                    $aReturn[$mKey] = $aRecursiveDiff;
                }
            } else {
                if ($mValue != $aArray2[$mKey]) {
                    $aReturn[$mKey] = $mValue;
                }
            }
        } else {
            $aReturn[$mKey] = $mValue;
        }
    }
    return $aReturn;
}
