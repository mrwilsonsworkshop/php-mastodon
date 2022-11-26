<?php

namespace MrWilsonsWorkshop\Mastodon\Methods\Instance;

use MrWilsonsWorkshop\Mastodon\Methods\Method;


/**
 * Class Instance
 *
 * Informational endpoint to discover information about a Mastodon website
 *
 * @see https://docs.joinmastodon.org/methods/instance
 */
class Instance extends Method
{
    /**
     * API endpoint
     *
     * @var string
     */
    private $endpoint = 'instance';


    /**
     * Fetch instance
     *
     * Information about the server
     *
     * @return \MrWilsonsWorkshop\Mastodon\Entities\Instance Instance
     */
    public function get(): \MrWilsonsWorkshop\Mastodon\Entities\Instance
    {
        $endpoint = "{$this->endpoint}";

        return new \MrWilsonsWorkshop\Mastodon\Entities\Instance($this->api->get($endpoint));
    }


    /**
     * List of connected domains
     *
     * Domains that this instance is aware of
     *
     * @return array Array of String
     */
    public function peers(): array
    {
        $endpoint = "{$this->endpoint}/peers";

        return $this->api->get($endpoint);
    }


    /**
     * Weekly activity
     *
     * Instance activity over the last 3 months, binned weekly
     *
     * @return array Array of Activity
     */
    public function activity(): array
    {
        $endpoint = "{$this->endpoint}/activity";

        return array_map(function ($data) {
            return new \MrWilsonsWorkshop\Mastodon\Entities\Activity($data);
        }, $this->api->post($endpoint));
    }
}
