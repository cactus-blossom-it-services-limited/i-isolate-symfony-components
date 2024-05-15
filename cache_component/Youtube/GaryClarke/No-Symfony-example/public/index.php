<?php

use Symfony\Component\Cache\Adapter\FilesystemAdapter;

require_once __DIR__.'/../vendor/autoload.php';

$cache = new FilesystemAdapter();

$cacheItem = $cache->getItem('user.account');

if (!$cacheItem->isHit()) {

    echo 'Miss :( <br>';

    $account = [
        'name' => 'Andrew Farquharson',
        'id' => 4321
    ];

    $cacheItem->set($account);

    $cache->save($cacheItem);
} else {

    echo 'Hit! <br>';

    $account = $cacheItem->get();
}

dd($account);