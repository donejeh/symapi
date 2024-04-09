<?php

namespace App\Tests;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class StockTest extends KernelTestCase{

    private $entityManager;

    protected function setUp(): void{

        $kernel = self::bootKernel();

        DatabasePrimer::prime($kernel);

        $this->entityManager = $kernel->getContainer()->get('doctrine')->getManager();

    }

    /** @test **/
    public function a_stock_record_can_be_created_in_the_database(){
        //setup

        // stock

        $stock = new Stock();
        $stock->setSymbol('AMZ');
        $stock->setShortName('Amazon Inc');
        $stock->setCurrency('USD');
        $stock->setExchangeName('Nasdaq');
        $stock->setRegion('US');
        $price = 1000;
        $previousClose = 1000


    }
}