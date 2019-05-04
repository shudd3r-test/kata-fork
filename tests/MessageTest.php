<?php

namespace Shudd3r\Kata\Tests;

use PHPUnit\Framework\TestCase;
use Shudd3r\Kata\MessageFactory;


class MessageTest extends TestCase
{
    public function testRenderText()
    {
        $factory = new MessageFactory();
        $this->assertSame('Hello World!', $factory->createText()->render('World!'));
    }
}