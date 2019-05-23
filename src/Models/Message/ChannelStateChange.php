<?php

/** @copyright 2019 ng-voice GmbH */

namespace NgVoice\AriClient\Models\Message;

use NgVoice\AriClient\Models\Channel;

/**
 * Notification of a channel's state change.
 *
 * @package NgVoice\AriClient\Models\Message
 */
final class ChannelStateChange extends Event
{
    /**
     * @var Channel
     */
    private $channel;

    /**
     * @return Channel
     */
    public function getChannel(): Channel
    {
        return $this->channel;
    }

    /**
     * @param Channel $channel
     */
    public function setChannel(Channel $channel): void
    {
        $this->channel = $channel;
    }
}