<?php
/**
 * Created by PhpStorm.
 * User: web_admin
 * Date: 15/05/14
 * Time: 16:49
 */

namespace String;

class StringPractice {

    /** @var string $string */
    private $string ='';

    public function getString(){
        return $this->string;
    }

    public function addString($val){
        $this->string .= $val;
    }




}