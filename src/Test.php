<?php
namespace PhpDebug;

class Test 
{
    public function test()
    {
        return $this->test2();
    }
    
    public function test2()
    {
        return "Hello world";
    }


}