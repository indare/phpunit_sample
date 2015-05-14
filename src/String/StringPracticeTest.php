<?php
namespace Test;

use PHPUnit_Framework_TestCase;
use String\StringPractice;

class StringPracticeTest extends PHPUnit_Framework_TestCase
{

    /** @var StringPractice $stringPractice */
    private $stringPractice;

    public function setUp()
    {
        $this->stringPractice = new StringPractice();
    }

    /**
     * @test
     */
    public function インスタンス生成直後は空()
    {
        self::assertEquals('', $this->stringPractice->getString());
    }


    /**
     * @test
     */
    public function addStringメソッドを使うと文字が足せる()
    {
        $this->stringPractice->addString('hoge');
        self::assertEquals('hoge', $this->stringPractice->getString());
    }

    /**
     * @test
     */
    public function addStringメソッドを２回呼ぶと文字が倍になる()
    {
        $this->stringPractice->addString('hoge');
        $this->stringPractice->addString('hoge');
        self::assertEquals('hogehoge', $this->stringPractice->getString());

    }

}
