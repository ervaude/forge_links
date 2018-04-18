<?php
declare(strict_types=1);
namespace DanielGoerz\ForgeLinks\Typolink;

use TYPO3\CMS\Frontend\Typolink\AbstractTypolinkBuilder;

/**
 * Builds a TypoLink to a forge number
 */
class ForgeLinkBuilder extends AbstractTypolinkBuilder
{
    /**
     * @inheritdoc
     */
    public function build(array &$linkDetails, string $linkText, string $target, array $conf): array
    {
        $url = 'https://forge.typo3.org/issues/' . ltrim($linkDetails['forge'], 'forge:');
        $target = '_blank';
        return [$url, $linkText, $target];
    }
}
