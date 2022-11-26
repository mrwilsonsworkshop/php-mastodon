<?php

namespace MrWilsonsWorkshop\Mastodon\Methods\Instance;

use MrWilsonsWorkshop\Mastodon\Methods\Method;


/**
 * Class CustomEmojis
 *
 * Each site can define and upload its own custom emoji to be attached to profiles or statuses
 *
 * @see https://docs.joinmastodon.org/methods/instance/custom_emojis
 */
class CustomEmojis extends Method
{
    /**
     * API endpoint
     *
     * @var string
     */
    private $endpoint = 'custom_emojis';


    /**
     * Custom emoji
     *
     * Returns custom emojis that are available on the server
     *
     * @return array Array of Emoji
     */
    public function get(): array
    {
        $endpoint = "{$this->endpoint}";

        return array_map(function ($data) {
            return new \MrWilsonsWorkshop\Mastodon\Entities\Emoji($data);
        }, $this->api->get($endpoint));
    }
}
