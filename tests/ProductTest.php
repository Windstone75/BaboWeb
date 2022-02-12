<?php

namespace App\Tests;

use App\Entity\Product;
use PHPUnit\Framework\TestCase;

class ProductTest extends TestCase
{
    public function testSetIsTrue()
    {
        $product = new Product();

        $product->setName('name')
                ->setDescription('description');

        $this->assertTrue($product->getName() === 'name');
        $this->assertTrue($product->getDescription() === 'description');
        
    }

    public function testSetIsFalse()
    {
        $product = new Product();

        $product->setName('name')
                ->setDescription('description');

        $this->assertFalse($product->getName() === 'namefalse');
        $this->assertFalse($product->getDescription() === 'descriptionfalse');
    }

    public function testIsEmpty()
    {
        $product = new Product();

        $this->assertEmpty($product->getName());
        $this->assertEmpty($product->getDescription());
    }
}
