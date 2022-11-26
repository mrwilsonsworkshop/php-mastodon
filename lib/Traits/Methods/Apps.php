<?php

namespace MrWilsonsWorkshop\Mastodon\Traits\Methods;


trait Apps
{
    /**
     * @return \MrWilsonsWorkshop\Mastodon\Methods\Apps\Apps;
     */
    public function apps(): \MrWilsonsWorkshop\Mastodon\Methods\Apps\Apps
    {
        return new \MrWilsonsWorkshop\Mastodon\Methods\Apps\Apps($this);
    }


    /**
     * @return \MrWilsonsWorkshop\Mastodon\Methods\Apps\OAuth;
     */
    public function oauth(): \MrWilsonsWorkshop\Mastodon\Methods\Apps\OAuth
    {
        return new \MrWilsonsWorkshop\Mastodon\Methods\Apps\OAuth($this);
    }
}
