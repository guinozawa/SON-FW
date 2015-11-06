<?php

require_once '../public/library/Stub.php';

class StubTest extends PHPUnit_Framework_TestCase {
    
    public function testStub() {
        $stub = $this->getMock("Stub");
        $stub->expects($this->any())
                ->method('rodaAlgo')
                ->will($this->returnValue("xpto"));
        
        $this->assertEquals("xpto", $stub->rodaAlgo());
        $this->assertEquals("xpto", $stub->rodaAlgo());
    }
}
