<?php
defined('TYPO3_MODE') || die('Access denied.');

$GLOBALS['TYPO3_CONF_VARS']['SYS']['linkHandler']['forge']
    = \DanielGoerz\ForgeLinks\LinkHandling\ForgeLinkHandler::class;

$GLOBALS['TYPO3_CONF_VARS']['FE']['typolinkBuilder']['forge']
    = \DanielGoerz\ForgeLinks\Typolink\ForgeLinkBuilder::class;

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['TYPO3\CMS\Core\LinkHandling\LinkService']['resolveByStringRepresentation'][]
    = 'DanielGoerz\ForgeLinks\LinkHandling\ForgeLinkHandler->resolveByStringRepresentation';

// Register new link handler
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('
    TCEMAIN.linkHandler {
        forge {
            handler = DanielGoerz\\ForgeLinks\\LinkHandler\\ForgeLinkHandler
            label = Forge Issue Number
            displayAfter = mail
        }
    }
');
