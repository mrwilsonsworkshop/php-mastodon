<?php

namespace MrWilsonsWorkshop\Mastodon\Traits\Methods;


trait Accounts
{
    /**
     * @return \MrWilsonsWorkshop\Mastodon\Methods\Accounts\Accounts;
     */
    public function accounts(): \MrWilsonsWorkshop\Mastodon\Methods\Accounts\Accounts
    {
        return new \MrWilsonsWorkshop\Mastodon\Methods\Accounts\Accounts($this);
    }


    /**
     * @return \MrWilsonsWorkshop\Mastodon\Methods\Accounts\Bookmarks;
     */
    public function bookmarks(): \MrWilsonsWorkshop\Mastodon\Methods\Accounts\Bookmarks
    {
        return new \MrWilsonsWorkshop\Mastodon\Methods\Accounts\Bookmarks($this);
    }


    /**
     * @return \MrWilsonsWorkshop\Mastodon\Methods\Accounts\Favourites;
     */
    public function favourites(): \MrWilsonsWorkshop\Mastodon\Methods\Accounts\Favourites
    {
        return new \MrWilsonsWorkshop\Mastodon\Methods\Accounts\Favourites($this);
    }


    /**
     * @return \MrWilsonsWorkshop\Mastodon\Methods\Accounts\Mutes;
     */
    public function mutes(): \MrWilsonsWorkshop\Mastodon\Methods\Accounts\Mutes
    {
        return new \MrWilsonsWorkshop\Mastodon\Methods\Accounts\Mutes($this);
    }


    /**
     * @return \MrWilsonsWorkshop\Mastodon\Methods\Accounts\Blocks;
     */
    public function blocks(): \MrWilsonsWorkshop\Mastodon\Methods\Accounts\Blocks
    {
        return new \MrWilsonsWorkshop\Mastodon\Methods\Accounts\Blocks($this);
    }


    /**
     * @return \MrWilsonsWorkshop\Mastodon\Methods\Accounts\DomainBlocks;
     */
    public function domainBlocks(): \MrWilsonsWorkshop\Mastodon\Methods\Accounts\DomainBlocks
    {
        return new \MrWilsonsWorkshop\Mastodon\Methods\Accounts\DomainBlocks($this);
    }


    /**
     * @return \MrWilsonsWorkshop\Mastodon\Methods\Accounts\Filters;
     */
    public function filters(): \MrWilsonsWorkshop\Mastodon\Methods\Accounts\Filters
    {
        return new \MrWilsonsWorkshop\Mastodon\Methods\Accounts\Filters($this);
    }


    /**
     * @return \MrWilsonsWorkshop\Mastodon\Methods\Accounts\Reports;
     */
    public function reports(): \MrWilsonsWorkshop\Mastodon\Methods\Accounts\Reports
    {
        return new \MrWilsonsWorkshop\Mastodon\Methods\Accounts\Reports($this);
    }


    /**
     * @return \MrWilsonsWorkshop\Mastodon\Methods\Accounts\FollowRequests;
     */
    public function followRequests(): \MrWilsonsWorkshop\Mastodon\Methods\Accounts\FollowRequests
    {
        return new \MrWilsonsWorkshop\Mastodon\Methods\Accounts\FollowRequests($this);
    }


    /**
     * @return \MrWilsonsWorkshop\Mastodon\Methods\Accounts\Endorsements;
     */
    public function endorsements(): \MrWilsonsWorkshop\Mastodon\Methods\Accounts\Endorsements
    {
        return new \MrWilsonsWorkshop\Mastodon\Methods\Accounts\Endorsements($this);
    }


    /**
     * @return \MrWilsonsWorkshop\Mastodon\Methods\Accounts\FeaturedTags;
     */
    public function featuredTags(): \MrWilsonsWorkshop\Mastodon\Methods\Accounts\FeaturedTags
    {
        return new \MrWilsonsWorkshop\Mastodon\Methods\Accounts\FeaturedTags($this);
    }


    /**
     * @return \MrWilsonsWorkshop\Mastodon\Methods\Accounts\Preferences;
     */
    public function preferences(): \MrWilsonsWorkshop\Mastodon\Methods\Accounts\Preferences
    {
        return new \MrWilsonsWorkshop\Mastodon\Methods\Accounts\Preferences($this);
    }


    /**
     * @return \MrWilsonsWorkshop\Mastodon\Methods\Accounts\Suggestions;
     */
    public function suggestions(): \MrWilsonsWorkshop\Mastodon\Methods\Accounts\Suggestions
    {
        return new \MrWilsonsWorkshop\Mastodon\Methods\Accounts\Suggestions($this);
    }
}
