<?php
declare(strict_types=1);
namespace DanielGoerz\ForgeLinks\LinkHandling;

use TYPO3\CMS\Core\LinkHandling\LinkHandlingInterface;

/**
 * Resolves links to forge issue numbers
 */
class ForgeLinkHandler implements LinkHandlingInterface
{

    /**
     * Returns the link to a forge number as a string
     *
     * @param array $parameters
     * @return string
     */
    public function asString(array $parameters): string
    {
        return 'forge:' . $parameters['forge'];
    }

    /**
     * Returns the forge number without the "forge:" prefix
     * in the 'forge' property of the array.
     *
     * @param array $data
     * @return array
     */
    public function resolveHandlerData(array $data): array
    {
        return ['forge' => substr($data['forge'], 6)];
    }

    /**
     * @param array $params
     * @return void
     */
    public function resolveByStringRepresentation(&$params)
    {
        if (stripos($params['urn'], 'forge:') !== 0) {
            return;
        }
        $params['result'] = $this->resolveHandlerData(['forge' => $params['urn']]);
        $params['result']['type'] = 'forge';
    }
}
