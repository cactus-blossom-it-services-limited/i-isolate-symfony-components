<?php

namespace App\Controller;

use App\Entity\Stock;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Cache\Adapter\FilesystemAdapter;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Cache\ItemInterface;

class AppController extends AbstractController
{
    #[Route('/stock/{symbol}', name: 'get-stock', methods: ['GET'])]
    public function stock($symbol, EntityManagerInterface $entityManager)
    {
        $symbol = strtoupper($symbol);

        $cache = new FilesystemAdapter();

        /** @var Stock $stock */
        $stock = $cache->get($symbol, function (ItemInterface $item) use ($symbol, $entityManager) {

            echo 'Miss<br>';

            $item->expiresAfter(3600);

            $repo = $entityManager->getRepository(Stock::class);

            return $repo->findOneBy(['symbol' => $symbol]);

        });

        return new Response("{$stock->getShortName()} has a current value of {$stock->getPrice()}");

    }

}