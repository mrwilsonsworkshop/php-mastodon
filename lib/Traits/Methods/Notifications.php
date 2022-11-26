<?php

namespace MrWilsonsWorkshop\Mastodon\Traits\Methods;


trait Notifications
{
    /**
     * @return \MrWilsonsWorkshop\Mastodon\Methods\Notifications\Notifications;
     */
    public function notifications(): \MrWilsonsWorkshop\Mastodon\Methods\Notifications\Notifications
    {
        return new \MrWilsonsWorkshop\Mastodon\Methods\Notifications\Notifications($this);
    }
}
