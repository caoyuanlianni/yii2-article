<?php
/**
 * Created by PhpStorm.
 * User: caowei
 * Date: 18-4-19
 * Time: 上午10:51
 */

namespace caoyuanlianni\tests\article;

use PHPUnit\Framework\TestCase;
use caoyuanlianni\article\AutoloadArticle;

class DemoTest extends TestCase
{
    public function testDemo()
    {
        $array = ['id', 'title', 'content']; // 正确的
//        $array = ['id', 'title']; // 错误的

        $article = new AutoloadArticle();

        $this->assertEquals(
            $array,
            $article->run()
        );
    }
}