<?php

namespace MrWilsonsWorkshop\Mastodon\Methods\Statuses;

use MrWilsonsWorkshop\Mastodon\Methods\Method;


/**
 * Class Statuses
 *
 * Publish, interact, and view information about statuses
 *
 * @see https://docs.joinmastodon.org/methods/statuses
 */
class Statuses extends Method
{
    /**
     * API endpoint
     *
     * @var string
     */
    private $endpoint = 'statuses';


    /**
     * Publish new status
     *
     * Post a new status
     *
     * @return array Status. When `scheduled_at` is present, ScheduledStatus is returned instead
     */
    // public function post(): array
    // {
    //     $endpoint = "{$this->endpoint}/{$id}";

    //     return $this->api->post($endpoint);
    // }


    /**
     * View specific status
     *
     * View information about a status
     *
     * @param string $id Local ID of a status in the database
     *
     * @return \MrWilsonsWorkshop\Mastodon\Entities\Status Status
     */
    public function get(string $id): \MrWilsonsWorkshop\Mastodon\Entities\Status
    {
        $endpoint = "{$this->endpoint}/{$id}";

        return new \MrWilsonsWorkshop\Mastodon\Entities\Status($this->api->get($endpoint));
    }


    /**
     * Delete status
     *
     * Delete one of your own statuses
     *
     * @param string $id Local ID of a status in the database. Must be owned by authenticated account
     *
     * @return \MrWilsonsWorkshop\Mastodon\Entities\Status Status with source `text` and `media_attachments` or `poll`
     */
    public function delete(string $id): \MrWilsonsWorkshop\Mastodon\Entities\Status
    {
        $endpoint = "{$this->endpoint}/{$id}";

        return new \MrWilsonsWorkshop\Mastodon\Entities\Status($this->api->delete($endpoint));
    }


    /**
     * Parent and child statuses
     *
     * View statuses above and below this status in the thread
     *
     * @param string $id Local ID of a status in the database
     *
     * @return \MrWilsonsWorkshop\Mastodon\Entities\Context Context
     */
    public function context(string $id): \MrWilsonsWorkshop\Mastodon\Entities\Context
    {
        $endpoint = "{$this->endpoint}/{$id}/context";

        return new \MrWilsonsWorkshop\Mastodon\Entities\Context($this->api->get($endpoint));
    }


    /**
     * Boosted by
     *
     * View who boosted a given status
     *
     * @param string $id Local ID of a status in the database
     *
     * @return array Array of Account
     */
    public function rebloggedBy(string $id): array
    {
        $endpoint = "{$this->endpoint}/{$id}/reblogged_by";

        return array_map(function ($data) {
            return new \MrWilsonsWorkshop\Mastodon\Entities\Account($data);
        }, $this->api->get($endpoint));
    }


    /**
     * Favourited by
     *
     * View who favourited a given status
     *
     * @param string $id Local ID of a status in the database
     *
     * @return array Array of Account
     */
    public function favouritedBy(string $id): array
    {
        $endpoint = "{$this->endpoint}/{$id}/favourited_by";

        return array_map(function ($data) {
            return new \MrWilsonsWorkshop\Mastodon\Entities\Account($data);
        }, $this->api->get($endpoint));
    }


    /**
     * Favourite
     *
     * Add a status to your favourites list
     *
     * @param string $id Local ID of a status in the database
     *
     * @return \MrWilsonsWorkshop\Mastodon\Entities\Status Status
     */
    public function favourite(string $id): \MrWilsonsWorkshop\Mastodon\Entities\Status
    {
        $endpoint = "{$this->endpoint}/{$id}/favourite";

        return new \MrWilsonsWorkshop\Mastodon\Entities\Status($this->api->post($endpoint));
    }


    /**
     * Undo favourite
     *
     * Remove a status from your favourites list
     *
     * @param string $id Local ID of a status in the database
     *
     * @return \MrWilsonsWorkshop\Mastodon\Entities\Status Status
     */
    public function unfavourite(string $id): \MrWilsonsWorkshop\Mastodon\Entities\Status
    {
        $endpoint = "{$this->endpoint}/{$id}/unfavourite";

        return new \MrWilsonsWorkshop\Mastodon\Entities\Status($this->api->post($endpoint));
    }


    /**
     * Boost
     *
     * Reshare a status
     *
     * @param string $id Local ID of a status in the database
     * @param string $visibility any visibility except limited or direct (i.e. `public`, `unlisted`, `private`)
     *
     * @return \MrWilsonsWorkshop\Mastodon\Entities\Status Status
     */
    public function reblog(string $id, string $visibility = 'public'): \MrWilsonsWorkshop\Mastodon\Entities\Status
    {
        $endpoint = "{$this->endpoint}/{$id}/reblog";

        return new \MrWilsonsWorkshop\Mastodon\Entities\Status($this->api->post($endpoint, [
            'visibility' => $visibility,
        ]));
    }


    /**
     * Undo boost
     *
     * Undo a reshare of a status
     *
     * @param string $id Local ID of a status in the database
     *
     * @return \MrWilsonsWorkshop\Mastodon\Entities\Status Status
     */
    public function unreblog(string $id): \MrWilsonsWorkshop\Mastodon\Entities\Status
    {
        $endpoint = "{$this->endpoint}/{$id}/unreblog";

        return new \MrWilsonsWorkshop\Mastodon\Entities\Status($this->api->post($endpoint));
    }


    /**
     * Bookmark
     *
     * Privately bookmark a status
     *
     * @param string $id ID of the status in the database
     *
     * @return \MrWilsonsWorkshop\Mastodon\Entities\Status Status
     */
    public function bookmark(string $id): \MrWilsonsWorkshop\Mastodon\Entities\Status
    {
        $endpoint = "{$this->endpoint}/{$id}/bookmark";

        return new \MrWilsonsWorkshop\Mastodon\Entities\Status($this->api->post($endpoint));
    }


    /**
     * Undo bookmark
     *
     * Remove a status from your private bookmarks
     *
     * @param string $id ID of the status in the database
     *
     * @return \MrWilsonsWorkshop\Mastodon\Entities\Status Status
     */
    public function unbookmark(string $id): \MrWilsonsWorkshop\Mastodon\Entities\Status
    {
        $endpoint = "{$this->endpoint}/{$id}/unbookmark";

        return new \MrWilsonsWorkshop\Mastodon\Entities\Status($this->api->post($endpoint));
    }


    /**
     * Mute conversation
     *
     * Do not receive notifications for the thread that this status is part of. Must be a thread in which you are a participant
     *
     * @param string $id Local ID of a status in the database
     *
     * @return \MrWilsonsWorkshop\Mastodon\Entities\Status Status
     */
    public function mute(string $id): \MrWilsonsWorkshop\Mastodon\Entities\Status
    {
        $endpoint = "{$this->endpoint}/{$id}/mute";

        return new \MrWilsonsWorkshop\Mastodon\Entities\Status($this->api->post($endpoint));
    }


    /**
     * Unmute conversation
     *
     * Start receiving notifications again for the thread that this status is part of
     *
     * @param string $id Local ID of a status in the database
     *
     * @return \MrWilsonsWorkshop\Mastodon\Entities\Status Status
     */
    public function unmute(string $id): \MrWilsonsWorkshop\Mastodon\Entities\Status
    {
        $endpoint = "{$this->endpoint}/{$id}/unmute";

        return new \MrWilsonsWorkshop\Mastodon\Entities\Status($this->api->post($endpoint));
    }


    /**
     * Pin to profile
     *
     * Feature one of your own public statuses at the top of your profile
     *
     * @param string $id Local ID of a status in the database. The status should be public and authored by the authorized account
     *
     * @return \MrWilsonsWorkshop\Mastodon\Entities\Status Status
     */
    public function pin(string $id): \MrWilsonsWorkshop\Mastodon\Entities\Status
    {
        $endpoint = "{$this->endpoint}/{$id}/pin";

        return new \MrWilsonsWorkshop\Mastodon\Entities\Status($this->api->post($endpoint));
    }


    /**
     * Unpin to profile
     *
     * Unfeature a status from the top of your profile
     *
     * @param string $id Local ID of a status in the database
     *
     * @return \MrWilsonsWorkshop\Mastodon\Entities\Status Status
     */
    public function unpin(string $id): \MrWilsonsWorkshop\Mastodon\Entities\Status
    {
        $endpoint = "{$this->endpoint}/{$id}/unpin";

        return new \MrWilsonsWorkshop\Mastodon\Entities\Status($this->api->post($endpoint));
    }
}
