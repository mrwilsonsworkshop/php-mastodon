<?php

namespace MrWilsonsWorkshop\Mastodon\Traits\Methods;


trait Timelines
{
    /**
     * @return \MrWilsonsWorkshop\Mastodon\Methods\Timelines\Timelines;
     */
    public function timelines(): \MrWilsonsWorkshop\Mastodon\Methods\Timelines\Timelines
    {
        return new \MrWilsonsWorkshop\Mastodon\Methods\Timelines\Timelines($this);
    }


    /**
     * @return \MrWilsonsWorkshop\Mastodon\Methods\Timelines\Conversations;
     */
    public function conversations(): \MrWilsonsWorkshop\Mastodon\Methods\Timelines\Conversations
    {
        return new \MrWilsonsWorkshop\Mastodon\Methods\Timelines\Conversations($this);
    }


    /**
     * @return \MrWilsonsWorkshop\Mastodon\Methods\Timelines\Lists;
     */
    public function lists(): \MrWilsonsWorkshop\Mastodon\Methods\Timelines\Lists
    {
        return new \MrWilsonsWorkshop\Mastodon\Methods\Timelines\Lists($this);
    }


    /**
     * @return \MrWilsonsWorkshop\Mastodon\Methods\Timelines\Markers;
     */
    public function markers(): \MrWilsonsWorkshop\Mastodon\Methods\Timelines\Markers
    {
        return new \MrWilsonsWorkshop\Mastodon\Methods\Timelines\Markers($this);
    }
}
