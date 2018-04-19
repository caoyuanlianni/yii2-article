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
    public function testArray()
    {
        $array = ['id', 'title', 'content']; // 正确的
        //$array = ['id', 'title']; // 错误的

        $article = new AutoloadArticle();

        $this->assertEquals(
            $array,
            $article->toArray()
        );
    }

    public function testString()
    {
        $string = '';

        $article = new AutoloadArticle();

        $this->assertEquals(
            $string,
            $article->widget()
        );
    }
}