<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'messenger.transport.sync.factory' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/messenger/Transport/TransportFactoryInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/messenger/Transport/Sync/SyncTransportFactory.php';

return $this->privates['messenger.transport.sync.factory'] = new \Symfony\Component\Messenger\Transport\Sync\SyncTransportFactory(($this->privates['messenger.routable_message_bus'] ?? $this->load('getMessenger_RoutableMessageBusService.php')));
