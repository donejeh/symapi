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

    public function testItworks(){

        $this->assertTrue(true);
    }
}