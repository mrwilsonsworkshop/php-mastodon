<?php

namespace MrWilsonsWorkshop\Mastodon\Traits\Methods;


trait OEmbed
{
    /**
     * @return \MrWilsonsWorkshop\Mastodon\Methods\OEmbed\OEmbed;
     */
    public function oembed(): \MrWilsonsWorkshop\Mastodon\Methods\OEmbed\OEmbed
    {
        return new \MrWilsonsWorkshop\Mastodon\Methods\OEmbed\OEmbed($this);
    }
}
