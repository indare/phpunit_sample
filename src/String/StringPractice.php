<?php
namespace String;

class StringPractice
{

    /** @var string $string */
    private $string = '';

    public function getString()
    {
        return $this->string;
    }

    public function addString($val)
    {
        $this->string .= $val;
    }


}