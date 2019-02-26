<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
require __DIR__ . '/../src/FooFighters.php';

class FooFightersTest extends TestCase
{
  public function testFoo_WithDefaultFooEntries_ReturnsNotNull()
  {
       $foo = new FooFighters();
       $this->assertNotNull($foo->getFoo());
  }

  public function testFooArray_WithDefaultEntries_ReturnsCountOf1()
  {
       $foo = new FooFighters();
       $this->assertCount(1, $foo->foo);
  }
  
}

