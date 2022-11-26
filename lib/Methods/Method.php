<?php

namespace MrWilsonsWorkshop\Mastodon\Methods;


/**
 * Class Method
 *
 * Base class for API methods
 */
abstract class Method
{
    /**
     * API gateway
     *
     * @var \MrWilsonsWorkshop\Mastodon\Api
     */
    protected $api;


    /**
     * Constructor
     */
    public function __construct(\MrWilsonsWorkshop\Mastodon\Api $api)
    {
        # Relay API access
        $this->api = $api;
    }
}
