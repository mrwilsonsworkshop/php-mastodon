<?php

namespace MrWilsonsWorkshop\Mastodon\Methods\Timelines;

use MrWilsonsWorkshop\Mastodon\Methods\Method;


/**
 * Class Conversations
 *
 * Direct conversations with other participants
 *
 * Currently, just threads containing a post with "direct" visibility
 *
 * @see https://docs.joinmastodon.org/methods/timelines/conversations
 */
class Conversations extends Method
{
    /**
     * API endpoint
     *
     * @var string
     */
    private $endpoint = 'conversations';


    /**
     * Show conversation
     *
     * @param string $maxID Return results older than this ID
     * @param string $sinceID Return results newer than this ID
     * @param string $minID Return results immediately newer than this ID
     * @param int $limit Maximum number of results
     *
     * @return array Array of Conversation
     */
    public function get(string $maxID, string $sinceID, string $minID, int $limit = 20): array
    {
        $endpoint = "{$this->endpoint}";

        return array_map(function ($data) {
            return new \MrWilsonsWorkshop\Mastodon\Entities\Conversation($data);
        }, $this->api->get($endpoint, [
            'max_id'   => $maxID,
            'since_id' => $sinceID,
            'min_id'   => $minID,
            'limit'    => $limit,
        ]));
    }


    /**
     * Remove conversation
     *
     * @param string $id ID of the conversation in the database
     *
     * @return array empty object
     */
    public function remove(string $id): array
    {
        $endpoint = "{$this->endpoint}/{$id}";

        return $this->api->delete($endpoint);
    }


    /**
     * Mark as read
     *
     * @param string $id ID of the conversation in the database
     *
     * @return \MrWilsonsWorkshop\Mastodon\Entities\Conversation Conversation
     */
    public function read(string $id): \MrWilsonsWorkshop\Mastodon\Entities\Conversation
    {
        $endpoint = "{$this->endpoint}/{$id}/read";

        return new \MrWilsonsWorkshop\Mastodon\Entities\Conversation($this->api->post($endpoint));
    }
}
