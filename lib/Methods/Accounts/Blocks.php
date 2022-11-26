<?php

namespace MrWilsonsWorkshop\Mastodon\Methods\Accounts;

use MrWilsonsWorkshop\Mastodon\Methods\Method;


/**
 * Class Blocks
 *
 * View your blocks
 *
 * @see https://docs.joinmastodon.org/methods/accounts/blocks
 */
class Blocks extends Method
{
    /**
     * API endpoint
     *
     * @var string
     */
    private $endpoint = 'blocks';


    /**
     * Blocked users
     *
     * @param string $maxID Return results older than ID
     * @param string $sinceID Return results newer than ID
     * @param int $limit Maximum number of results
     *
     * @return array Array of Account
     */
    public function get(string $maxID = '', string $sinceID = '', int $limit = 40): array
    {
        $endpoint = "{$this->endpoint}";

        return array_map(function ($data) {
            return new \MrWilsonsWorkshop\Mastodon\Entities\Account($data);
        }, $this->api->get($endpoint, [
            'max_id'   => $maxID,
            'since_id' => $sinceID,
            'limit'    => $limit,
        ]));
    }
}
