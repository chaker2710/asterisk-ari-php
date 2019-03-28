<?php

/**
 * @author Lukas Stermann
 * @copyright ng-voice GmbH (2018)
 */

namespace NgVoice\AriClient\Model\Message;


use NgVoice\AriClient\Model\Channel;

/**
 * A hangup was requested on the channel.
 *
 * @package NgVoice\AriClient\Model\Message
 */
class ChannelHangupRequest extends Event
{
    /**
     * @var boolean Whether the hangup request was a soft hangup request.
     */
    private $soft;

    /**
     * @var int Integer representation of the cause of the hangup.
     */
    private $cause;

    /**
     * @var \NgVoice\AriClient\Model\Channel The channel on which the hangup was requested.
     */
    private $channel;

    /**
     * @return bool
     */
    public function isSoft(): bool
    {
        return $this->soft;
    }

    /**
     * @param bool $soft
     */
    public function setSoft(bool $soft): void
    {
        $this->soft = $soft;
    }

    /**
     * @return int
     */
    public function getCause(): int
    {
        return $this->cause;
    }

    /**
     * @param int $cause
     */
    public function setCause(int $cause): void
    {
        $this->cause = $cause;
    }

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