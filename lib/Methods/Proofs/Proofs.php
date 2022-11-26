<?php

namespace MrWilsonsWorkshop\Mastodon\Methods\Proofs;

use MrWilsonsWorkshop\Mastodon\Methods\Method;


/**
 * Class Proofs
 *
 * For use by identity providers
 *
 * @see https://docs.joinmastodon.org/methods/proofs
 */
class Proofs extends Method
{
    /**
     * API endpoint
     *
     * @var string
     */
    private $endpoint = 'api/proofs';


    /**
     * View identity proof
     *
     * @return array Custom response defined by provider
     */
    public function get(): array
    {
        $endpoint = "{$this->endpoint}";

        return $this->api->get($endpoint);
    }
}
