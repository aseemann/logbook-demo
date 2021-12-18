<?php

$GLOBALS['TYPO3_CONF_VARS']['LOG']['writerConfiguration'] = [];

if (false === is_array($GLOBALS['TYPO3_CONF_VARS']['LOG']['writerConfiguration'][\TYPO3\CMS\Core\Log\LogLevel::DEBUG])) {
    $GLOBALS['TYPO3_CONF_VARS']['LOG']['writerConfiguration'][\TYPO3\CMS\Core\Log\LogLevel::DEBUG] = [];
}

$GLOBALS['TYPO3_CONF_VARS']['LOG']['writerConfiguration'][\TYPO3\CMS\Core\Log\LogLevel::DEBUG]
[\ASeemann\PhpLiveLog\Connector\TYPO3\LogWriter::class] = [
    'ignorePattern' => '.*Frontend.*'
];

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_div.php']['devLog'] = [];
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_div.php']['devLog'][]
    = \ASeemann\PhpLiveLog\Connector\TYPO3\DevLogger::class . "->devLogger";
