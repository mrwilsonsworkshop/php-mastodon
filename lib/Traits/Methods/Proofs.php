<?php

namespace MrWilsonsWorkshop\Mastodon\Traits\Methods;


trait Proofs
{
    /**
     * @return \MrWilsonsWorkshop\Mastodon\Methods\Proofs\Proofs;
     */
    public function proofs(): \MrWilsonsWorkshop\Mastodon\Methods\Proofs\Proofs
    {
        return new \MrWilsonsWorkshop\Mastodon\Methods\Proofs\Proofs($this);
    }
}
