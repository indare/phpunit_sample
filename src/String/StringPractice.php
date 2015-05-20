<?php
namespace String;

/**
 * Class StringPractice
 * @package String
 */
class StringPractice
{

    /** @var string $string */
    private $string = '';

    /**
     * @return string
     */
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
        $this->string .= $val;

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