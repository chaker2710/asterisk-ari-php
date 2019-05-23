<?php

/** @copyright 2019 ng-voice GmbH */

namespace NgVoice\AriClient\Models\Message;

use NgVoice\AriClient\Models\Bridge;

/**
 * Notification that a bridge has been created.
 *
 * @package NgVoice\AriClient\Models\Message
 */
final class BridgeCreated extends Event
{
    /**
     * @var Bridge
     */
    private $bridge;

    /**
     * @return Bridge
     */
    public function getBridge(): Bridge
    {
        return $this->bridge;
    }

    /**
     * @param Bridge $bridge
     */
    public function setBridge(Bridge $bridge): void
    {
        $this->bridge = $bridge;
    }
}