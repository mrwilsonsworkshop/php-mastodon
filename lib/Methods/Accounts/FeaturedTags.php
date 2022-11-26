<?php

namespace MrWilsonsWorkshop\Mastodon\Methods\Accounts;

use MrWilsonsWorkshop\Mastodon\Methods\Method;


/**
 * Class FeaturedTags
 *
 * Feature tags that you use frequently
 *
 * @see https://docs.joinmastodon.org/methods/accounts/featured_tags
 */
class FeaturedTags extends Method
{
    /**
     * API endpoint
     *
     * @var string
     */
    private $endpoint = 'featured_tags';


    /**
     * View your featured tags
     *
     * @return array Array of FeaturedTag
     */
    public function get(): array
    {
        $endpoint = "{$this->endpoint}";

        return array_map(function ($data) {
            return new \MrWilsonsWorkshop\Mastodon\Entities\FeaturedTag($data);
        }, $this->api->get($endpoint));
    }


    /**
     * Feature a tag
     *
     * @param string $name The hashtag to be featured
     *
     * @return \MrWilsonsWorkshop\Mastodon\Entities\FeaturedTag FeaturedTag
     */
    public function feature(string $name): \MrWilsonsWorkshop\Mastodon\Entities\FeaturedTag
    {
        $endpoint = "{$this->endpoint}";

        return new \MrWilsonsWorkshop\Mastodon\Entities\FeaturedTag($this->api->post($endpoint, [
            'name' => $name,
        ]));
    }


    /**
     * Unfeature a tag
     *
     * @param string $id The ID of the FeaturedTag to be unfeatured
     *
     * @return array empty object
     */
    public function unfeature(string $id): array
    {
        $endpoint = "{$this->endpoint}/{$id}";

        return $this->api->delete($endpoint);
    }


    /**
     * Suggested tags to feature
     *
     * Shows your 10 most-used tags, with usage history for the past week
     *
     * @return array Array of Tag with History
     */
    public function suggestions(): array
    {
        $endpoint = "{$this->endpoint}/suggestions";

        return array_map(function ($data) {
            return new \MrWilsonsWorkshop\Mastodon\Entities\Tag($data);
        }, $this->api->get($endpoint));
    }
}
