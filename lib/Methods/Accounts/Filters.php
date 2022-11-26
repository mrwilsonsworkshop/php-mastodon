<?php

namespace MrWilsonsWorkshop\Mastodon\Methods\Accounts;

use MrWilsonsWorkshop\Mastodon\Methods\Method;


/**
 * Class Filters
 *
 * Create and manage filters
 *
 * @see https://docs.joinmastodon.org/methods/accounts/filters
 */
class Filters extends Method
{
    /**
     * API endpoint
     *
     * @var string
     */
    private $endpoint = 'filters';


    /**
     * View all filters
     *
     * @return \MrWilsonsWorkshop\Mastodon\Entities\Filter Filter
     */
    public function all(): \MrWilsonsWorkshop\Mastodon\Entities\Filter
    {
        $endpoint = "{$this->endpoint}";

        return new \MrWilsonsWorkshop\Mastodon\Entities\Filter($this->api->get($endpoint));
    }


    /**
     * View a single filter
     *
     * @param string $id
     *
     * @return \MrWilsonsWorkshop\Mastodon\Entities\Filter Filter
     */
    public function get(string $id): \MrWilsonsWorkshop\Mastodon\Entities\Filter
    {
        $endpoint = "{$this->endpoint}/{$id}";

        return new \MrWilsonsWorkshop\Mastodon\Entities\Filter($this->api->get($endpoint));
    }


    /**
     * Create a filter
     *
     * @param string $phrase Text to be filtered
     * @param array $context Array of enumerable strings `home`, `notifications`, `public`, `thread`. At least one context must be specified
     * @param bool $irreversible Should the server irreversibly drop matching entities from home and notifications?
     * @param bool $wholeWord Consider word boundaries?
     * @param int $expiresIn Number of seconds from now the filter should expire. Otherwise, null for a filter that doesn't expire
     *
     * @return \MrWilsonsWorkshop\Mastodon\Entities\Filter Filter
     */
    public function create(string $phrase, array $context, bool $irreversible = false, bool $wholeWord = true, int $expiresIn = 0): \MrWilsonsWorkshop\Mastodon\Entities\Filter
    {
        $endpoint = "{$this->endpoint}";

        return new \MrWilsonsWorkshop\Mastodon\Entities\Filter($this->api->post($endpoint, [
            'phrase'       => $phrase,
            'context'      => $context,
            'irreversible' => $irreversible,
            'whole_word'   => $wholeWord,
            'expires_in'   => $expiresIn,
        ]));
    }


    /**
     * Update a filter
     *
     * @param string $id ID of the filter in the database
     * @param string $phrase Text to be filtered
     * @param array $context Array of enumerable strings `home`, `notifications`, `public`, `thread`. At least one context must be specified
     * @param bool $irreversible Should the server irreversibly drop matching entities from home and notifications?
     * @param bool $wholeWord Consider word boundaries?
     * @param int $expiresIn Number of seconds from now the filter should expire. Otherwise, null for a filter that doesn't expire
     *
     * @return \MrWilsonsWorkshop\Mastodon\Entities\Filter Filter
     */
    public function update(string $id, string $phrase, array $context, bool $irreversible, bool $wholeWord, int $expiresIn): \MrWilsonsWorkshop\Mastodon\Entities\Filter
    {
        $endpoint = "{$this->endpoint}/{$id}";

        return new \MrWilsonsWorkshop\Mastodon\Entities\Filter($this->api->put($endpoint));
    }


    /**
     * Remove a filter
     *
     * @param string $id ID of the filter in the database
     *
     * @return \MrWilsonsWorkshop\Mastodon\Entities\Filter Filter
     */
    public function remove(string $id): \MrWilsonsWorkshop\Mastodon\Entities\Filter
    {
        $endpoint = "{$this->endpoint}/{$id}";

        return new \MrWilsonsWorkshop\Mastodon\Entities\Filter($this->api->delete($endpoint));
    }
}
