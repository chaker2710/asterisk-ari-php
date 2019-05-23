<?php

/** @copyright 2019 ng-voice GmbH */

namespace NgVoice\AriClient\Models\Message;

use NgVoice\AriClient\Models\Playback;

/**
 * Event showing the start of a media playback operation.
 *
 * @package NgVoice\AriClient\Models\Message
 */
final class PlaybackStarted extends Event
{
    /**
     * @var Playback Playback control object.
     */
    private $playback;

    /**
     * @return Playback
     */
    public function getPlayback(): Playback
    {
        return $this->playback;
    }

    /**
     * @param Playback $playback
     */
    public function setPlayback(Playback $playback): void
    {
        $this->playback = $playback;
    }
}