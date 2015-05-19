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
        $this->stringPractice->addString('hoge')->addString('hoge');
        self::assertEquals('hogehoge', $this->stringPractice->getString());
    }

    /**
     * @test
     */
    public function addStringメソッドを2回呼ぶと順番通りの文字がかえってくる()
    {

        $this->stringPractice->addString('hoge')->addString('fuga');

        self::assertEquals('hogefuga', $this->stringPractice->getString());

    }

    /**
     * @test
     */
    public function hogeをクラスに渡してrevertStringメソッドを呼ぶと文字が逆になる()
    {

        $this->stringPractice->addString('hoge');
        self::assertEquals('egoh', $this->stringPractice->revertString());

    }

    /**
     * @test
     */
    public function hogefugaをクラスに渡してrevertStringメソッドを呼ぶと文字が逆になる()
    {

        $this->stringPractice->addString('hogefuga');
        self::assertEquals('agufegoh', $this->stringPractice->revertString());

    }

}
