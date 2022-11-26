<?php

namespace MrWilsonsWorkshop\Mastodon\Methods\Instance;

use MrWilsonsWorkshop\Mastodon\Methods\Method;


/**
 * Class Trends
 *
 * View hashtags that are currently being used more frequently than usual
 *
 * @see https://docs.joinmastodon.org/methods/instance/trends
 */
class Trends extends Method
{
    /**
     * API endpoint
     *
     * @var string
     */
    private $endpoint = 'trends';


    /**
     * Trending tags
     *
     * Tags that are being used more frequently within the past week
     *
     * @param int $limit Maximum number of results to return
     *
     * @return array Array of Tag with History
     */
    public function get(int $limit = 10): array
    {
        $endpoint = "{$this->endpoint}";

        return array_map(function ($data) {
            return new \MrWilsonsWorkshop\Mastodon\Entities\Tag($data);
        }, $this->api->get($endpoint, [
            'limit' => $limit,
        ]));
    }
}
