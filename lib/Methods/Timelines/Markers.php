<?php

namespace MrWilsonsWorkshop\Mastodon\Methods\Timelines;

use MrWilsonsWorkshop\Mastodon\Methods\Method;


/**
 * Class Markers
 *
 * Save and restore your position in timelines
 *
 * @see https://docs.joinmastodon.org/methods/timelines/markers
 */
class Markers extends Method
{
    /**
     * API endpoint
     *
     * @var string
     */
    private $endpoint = 'markers';


    /**
     * Get saved timeline position
     *
     * @param array $timeline Array of markers to fetch. String enum anyOf `home`, `notifications`. If not provided, an empty object will be returned
     *
     * @return \MrWilsonsWorkshop\Mastodon\Entities\Marker Marker
     */
    public function get(array $timeline): \MrWilsonsWorkshop\Mastodon\Entities\Marker
    {
        $endpoint = "{$this->endpoint}";

        return new \MrWilsonsWorkshop\Mastodon\Entities\Marker($this->api->get($endpoint, [
            'timeline' => $timeline,
        ]));
    }


    /**
     * Save position in timeline
     *
     * @param string $homeLastReadID ID of the last status read in the home timeline
     * @param string $notificationsLastReadID ID of the last notification read
     *
     * @return \MrWilsonsWorkshop\Mastodon\Entities\Marker Marker
     */
    public function save(string $homeLastReadID = '', string $notificationsLastReadID = ''): \MrWilsonsWorkshop\Mastodon\Entities\Marker
    {
        $endpoint = "{$this->endpoint}";

        return new \MrWilsonsWorkshop\Mastodon\Entities\Marker($this->api->post($endpoint, [
            'home[last_read_id]' => $title,
            'notifications[last_read_id]' => $notificationsLastReadID,
        ]));
    }
}
