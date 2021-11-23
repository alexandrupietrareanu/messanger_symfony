<?php

$container->loadFromExtension('framework', [
    'property_info' => ['enabled' => true],
    'validation' => [
        'auto_mapping' => [
            'App\\' => ['foo', 'bar'],
            'Symfony\\' => ['a', 'b'],
            'Foo\\',
        ],
    ],
]);
