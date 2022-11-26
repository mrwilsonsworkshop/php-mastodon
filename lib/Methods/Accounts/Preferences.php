<?php

namespace MrWilsonsWorkshop\Mastodon\Methods\Accounts;

use MrWilsonsWorkshop\Mastodon\Methods\Method;


/**
 * Class Preferences
 *
 * Preferred common behaviors to be shared across clients
 *
 * @see https://docs.joinmastodon.org/methods/accounts/preferences
 */
class Preferences extends Method
{
    /**
     * API endpoint
     *
     * @var string
     */
    private $endpoint = 'preferences';


    /**
     * Views user preferences
     *
     * Preferences defined by the user in their account settings
     *
     * @return \MrWilsonsWorkshop\Mastodon\Entities\Preferences Preferences by key and value
     */
    public function get(): \MrWilsonsWorkshop\Mastodon\Entities\Preferences
    {
        $endpoint = "{$this->endpoint}";

        return new \MrWilsonsWorkshop\Mastodon\Entities\Preferences($this->api->get($endpoint));
    }
}
