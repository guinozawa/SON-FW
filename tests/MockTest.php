<?php

require_once '../public/library/Mock.php';

class MockTest extends PHPUnit_Framework_TestCase {
    
    public function testSetNomeEGetNome() {
        $user = new Mock();
        $user->setNome("Guilherme");
        $this->assertEquals("Guilherme", $user->getNome());
    }
    
    public function testCadastraUser() {
        $user = new Mock();
        $user->setNome("Guilherme");
        $user->save();
        $this->assertArrayHasKey(0, $user->fetchAll());
    }
    
    public function testSendMail() {
        $user = $this->getMock("Mock", array("sendMail"));
        
        $user->expects($this->any())
                ->method("sendMail")
                ->with($this->equalTo("Guilherme"))
                    ->will($this->returnValue(true));
        
        $user->setNome("Guilherme");
        $user->save();
    }
    
}
