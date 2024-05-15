<?php

use Symfony\Component\Cache\Adapter\FilesystemAdapter;

require_once __DIR__.'/..vendor/autoload.php';

$cache = new FilesystemAdapter();

$cacheItem = $cache->getItem('an.item.key');

if (!$cacheItem->isHit()) {


}