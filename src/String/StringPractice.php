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

    /**
     * @param string $val
     * @return $this
     */
    public function addString($val)
    {
        $this->string .= '1' . $val;

        return $this;

    }

    /**
     * @return string
     */
    public function revertString()
    {

        return strrev($this->string);

    }

}