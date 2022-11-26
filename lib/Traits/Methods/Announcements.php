<?php

namespace MrWilsonsWorkshop\Mastodon\Traits\Methods;


trait Announcements
{
    /**
     * @return \MrWilsonsWorkshop\Mastodon\Methods\Announcements\Announcements;
     */
    public function announcements(): \MrWilsonsWorkshop\Mastodon\Methods\Announcements\Announcements
    {
        return new \MrWilsonsWorkshop\Mastodon\Methods\Announcements\Announcements($this);
    }
}
