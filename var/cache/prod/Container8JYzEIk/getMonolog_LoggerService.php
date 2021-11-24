<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'monolog.logger' shared service.

$this->privates['monolog.logger'] = $instance = new \Symfony\Bridge\Monolog\Logger('app');

$instance->useMicrosecondTimestamps(true);
$instance->pushHandler(($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService()));
$instance->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));

return $instance;
