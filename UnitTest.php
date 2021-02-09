<?php

use PHPUnit\Framework\TestCase;
require("DatabaseHelper.php");

final class UnitTest extends TestCase
{
    public function testHelloWorld()
    {
        $db = new DatabaseHelper();
        $hello = $db->getHelloWorld();

        $this->assertEquals('Hello World!', $hello);
    }
}