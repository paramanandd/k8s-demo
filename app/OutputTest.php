<?php
require "script.php";
class OutputTest extends PHPUnit_Framework_TestCase
{
    
    public function testTitle()
    {
        $this->expectOutputString('Introduction to containerization');
        Title();
    }

    public function testDockerContent()
    {
        $this->assertEquals('Docker', containerTool());
       
    }
     public function testDocker()
    {
        $this->expectOutputString('Welcome to the world of Docker');
        Docker();
    }
   
}
?>