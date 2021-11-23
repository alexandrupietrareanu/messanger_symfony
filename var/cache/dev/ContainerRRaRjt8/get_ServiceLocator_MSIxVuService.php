<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.m_SIxVu' shared service.

return $this->privates['.service_locator.m_SIxVu'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'doctrine' => ['services', 'doctrine', 'getDoctrineService', false],
    'http_kernel' => ['services', 'http_kernel', 'getHttpKernelService', false],
    'message_bus' => ['services', 'message_bus', 'getMessageBusService', false],
    'messenger.default_bus' => ['services', 'message_bus', 'getMessageBusService', false],
    'parameter_bag' => ['privates', 'parameter_bag', 'getParameterBagService', false],
    'request_stack' => ['services', 'request_stack', 'getRequestStackService', false],
    'router' => ['services', 'router', 'getRouterService', false],
    'serializer' => ['services', 'serializer', 'getSerializerService.php', true],
    'session' => ['services', 'session', 'getSessionService.php', true],
    'twig' => ['services', 'twig', 'getTwigService', false],
], [
    'doctrine' => '?',
    'http_kernel' => '?',
    'message_bus' => '?',
    'messenger.default_bus' => '?',
    'parameter_bag' => '?',
    'request_stack' => '?',
    'router' => '?',
    'serializer' => '?',
    'session' => '?',
    'twig' => '?',
]);
