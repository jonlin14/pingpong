<?php

    require_once "src/pingpong.php";

    class PingPongTest extends PHPUnit_Framework_TestCase
    {

        function test_PingPong_ReturnNumber()
        {
            $test_PingPong = new PingPong;
            $input=4;

            $result = $test_PingPong->returnInput($input);

            $this->assertEquals('4321',$result);
        }
    }
?>
