<?php

use PHPUnit\Framework\TestCase;


class SubstringLengthTest extends TestCase
{

    public static function setUpBeforeClass() : void
    {
        require_once 'src/SubstringLength.php';
    }

    public function test_length_charmander(){
        $obj = new SubstringLength();
        $result= $obj->calculate('charmander'); 
        $this->assertEquals('6', $result);
    }

    public function test_length_zzzzzzz(){
        $obj = new SubstringLength();
        $result= $obj->calculate('zzzzzzz'); 
        $this->assertEquals('1', $result);
    }

    public function test_length_chaar(){
        $obj = new SubstringLength();
        $result= $obj->calculate('chaar'); 
        $this->assertEquals('3', $result);
    }
}

