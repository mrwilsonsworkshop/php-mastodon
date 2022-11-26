<?php

namespace MrWilsonsWorkshop\Mastodon\Methods\Accounts;

use MrWilsonsWorkshop\Mastodon\Methods\Method;


/**
 * Class Bookmarks
 *
 * View your bookmarks
 *
 * @see https://docs.joinmastodon.org/methods/accounts/bookmarks
 */
class Bookmarks extends Method
{
    /**
     * API endpoint
     *
     * @var string
     */
    private $endpoint = 'bookmarks';


    /**
     * Bookmarked statuses
     *
     * Statuses the user has bookmarked
     *
     * @param int $limit Max number of results to return
     * @param string $maxID Return results older than ID
     * @param string $sinceID Return results newer than ID
     * @param string $minID Return results immediately newer than ID
     *
     * @return array Array of Status
     */
    public function get(int $limit = 20, string $maxID = '', string $sinceID = '', string $minID = ''): array
    {
        $endpoint = "{$this->endpoint}";

        return array_map(function ($data) {
            return new \MrWilsonsWorkshop\Mastodon\Entities\Status($data);
        }, $this->api->get($endpoint, [
            'limit'    => $limit,
            'max_id'   => $maxID,
            'since_id' => $sinceID,
            'min_id'   => $minID,
        ]));
    }
}
