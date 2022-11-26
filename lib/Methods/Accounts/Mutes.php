<?php

namespace MrWilsonsWorkshop\Mastodon\Methods\Accounts;

use MrWilsonsWorkshop\Mastodon\Methods\Method;


/**
 * Class Mutes
 *
 * View your mutes
 *
 * @see https://docs.joinmastodon.org/methods/accounts/mutes
 */
class Mutes extends Method
{
    /**
     * API endpoint
     *
     * @var string
     */
    private $endpoint = 'mutes';


    /**
     * Muted accounts
     *
     * Accounts the user has muted
     *
     * @param int $limit Maximum number of results to return per page
     * @param string $maxID Return results older than ID
     * @param string $sinceID Return results newer than ID
     *
     * @return array Array of Account
     */
    public function get(int $limit = 40, string $maxID = '', string $sinceID = ''): array
    {
        $endpoint = "{$this->endpoint}";

        return array_map(function ($data) {
            return new \MrWilsonsWorkshop\Mastodon\Entities\Account($data);
        }, $this->api->get($endpoint, [
            'limit'    => $limit,
            'max_id'   => $maxID,
            'since_id' => $sinceID,
        ]));
    }
}
