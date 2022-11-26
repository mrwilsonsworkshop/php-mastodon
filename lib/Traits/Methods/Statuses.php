<?php

namespace MrWilsonsWorkshop\Mastodon\Traits\Methods;


trait Statuses
{

    /**
     * @return \MrWilsonsWorkshop\Mastodon\Methods\Statuses\Statuses;
     */
    public function statuses(): \MrWilsonsWorkshop\Mastodon\Methods\Statuses\Statuses
    {
        return new \MrWilsonsWorkshop\Mastodon\Methods\Statuses\Statuses($this);
    }


    /**
     * @return \MrWilsonsWorkshop\Mastodon\Methods\Statuses\Media;
     */
    public function media(): \MrWilsonsWorkshop\Mastodon\Methods\Statuses\Media
    {
        return new \MrWilsonsWorkshop\Mastodon\Methods\Statuses\Media($this);
    }


    /**
     * @return \MrWilsonsWorkshop\Mastodon\Methods\Statuses\Polls;
     */
    public function polls(): \MrWilsonsWorkshop\Mastodon\Methods\Statuses\Polls
    {
        return new \MrWilsonsWorkshop\Mastodon\Methods\Statuses\Polls($this);
    }


    /**
     * @return \MrWilsonsWorkshop\Mastodon\Methods\Statuses\ScheduledStatuses;
     */
    public function scheduledStatuses(): \MrWilsonsWorkshop\Mastodon\Methods\Statuses\ScheduledStatuses
    {
        return new \MrWilsonsWorkshop\Mastodon\Methods\Statuses\ScheduledStatuses($this);
    }
}
