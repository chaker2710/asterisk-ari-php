<?php

/**
 * @author Lukas Stermann
 * @copyright ng-voice GmbH (2018)
 */

namespace NgVoice\AriClient\Model\Message;


use NgVoice\AriClient\Model\Channel;

/**
 * Channel variable changed.
 *
 * @package NgVoice\AriClient\Model\Message
 */
class ChannelVarset extends Event
{
    /**
     * @var string The variable that changed.
     */
    private $variable;

    /**
     * @var \NgVoice\AriClient\Model\Channel The channel on which the variable was set.
     * If missing, the variable is a global variable.
     */
    private $channel;

    /**
     * @var string The new value of the variable.
     */
    private $value;

    /**
     * @return string
     */
    public function getVariable(): string
    {
        return $this->variable;
    }

    /**
     * @param string $variable
     */
    public function setVariable(string $variable): void
    {
        $this->variable = $variable;
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

    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * @param string $value
     */
    public function setValue(string $value): void
    {
        $this->value = $value;
    }
}