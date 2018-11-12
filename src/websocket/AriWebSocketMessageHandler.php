<?php

/**
 * @author Lukas Stermann
 * @author Rick Barentin
 * @copyright ng-voice GmbH (2018)
 */

namespace AriStasisApp\amqp;

use function AriStasisApp\{getShortClassName, initLogger};
use Monolog\Logger;
use Nekland\Woketo\Core\AbstractConnection;
use Nekland\Woketo\Exception\WebsocketException;
use Nekland\Woketo\Message\MessageHandlerInterface;


/**
 * Class AriWebSocketMessageHandler
 *
 * @package AriStasisApp\rabbitmq
 */
class AriWebSocketMessageHandler implements MessageHandlerInterface
{
    /**
     * @var Logger
     */
    private $logger;

    /**
     * @var AriAMQPPublisher
     */
    private $rabbitMQMessagePublisher;


    /**
     * AriWebSocketMessageHandler constructor.
     *
     * @param string $appName
     */
    function __construct(string $appName)
    {
        $this->logger = initLogger(getShortClassName($this));
        $this->rabbitMQMessagePublisher = new AriAMQPPublisher($appName);
    }


    public function onConnection(AbstractConnection $connection)
    {
        $this->logger->debug('Connection to asterisk successfully');
    }

    // TODO: Make this abstract so can extend this class?
    // TODO: Not just listen for ANY Messages and publish them. Look at the app behind the event and push it onto
    // a specified queue
    public function onMessage(string $data, AbstractConnection $connection)
    {
        // TODO: If the message is 'StasisEnd', the connection can be closed.
        // Or is it automatically closed after that message comes in?
        $this->logger->debug("Received raw message: {$data}");
        $this->rabbitMQMessagePublisher->publish($data);
    }

    public function onBinary(string $data, AbstractConnection $connection)
    {
        // TODO: For a download e.g.
    }

    public function onDisconnect(AbstractConnection $connection)
    {
        $this->logger->debug("Connection to Asterisk was closed.");
        exit();
    }

    public function onError(WebsocketException $e, AbstractConnection $connection)
    {
        $this->logger->error("Could not connect to Asterisk: {$e->getMessage()}");
        exit(1);
    }
}