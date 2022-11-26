<?php

namespace MrWilsonsWorkshop\Mastodon\Traits\Methods;


trait Instance
{
    /**
     * @return \MrWilsonsWorkshop\Mastodon\Methods\Instance\Instance;
     */
    public function instance(): \MrWilsonsWorkshop\Mastodon\Methods\Instance\Instance
    {
        return new \MrWilsonsWorkshop\Mastodon\Methods\Instance\Instance($this);
    }


    /**
     * @return \MrWilsonsWorkshop\Mastodon\Methods\Instance\Trends;
     */
    public function trends(): \MrWilsonsWorkshop\Mastodon\Methods\Instance\Trends
    {
        return new \MrWilsonsWorkshop\Mastodon\Methods\Instance\Trends($this);
    }


    /**
     * @return \MrWilsonsWorkshop\Mastodon\Methods\Instance\Directory;
     */
    public function directory(): \MrWilsonsWorkshop\Mastodon\Methods\Instance\Directory
    {
        return new \MrWilsonsWorkshop\Mastodon\Methods\Instance\Directory($this);
    }


    /**
     * @return \MrWilsonsWorkshop\Mastodon\Methods\Instance\CustomEmojis;
     */
    public function customEmojis(): \MrWilsonsWorkshop\Mastodon\Methods\Instance\CustomEmojis
    {
        return new \MrWilsonsWorkshop\Mastodon\Methods\Instance\CustomEmojis($this);
    }
}
