<?php
namespace Tests;

use PHPUnit\Framework\TestCase;
use LarXing\Src\LarXingTest;

/**
 * Created by PhpStorm.
 * User: xingzhilong
 * Date: 2017/6/3
 * Time: 上午10:24
 */
class LarExtendTest extends TestCase
{
   /** @test */
    public function test_show_method()
    {
        $login = new LarXingTest();
        $this->assertEquals(2, $login->index());
    }
}
