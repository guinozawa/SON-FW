<?php

class IndexTest extends PHPUnit_Extensions_SeleniumTestCase {
    
    public static $browsers = array (
        array(
            'name' => 'Firefox',
            'browser' => '*firefox',
            'timeout' => 10000,
            'host' => 'localhost'
        )
    );
    
    public function setUp() {
        $this->setBrowserUrl('http://localhost:8088');
    }
    
    public function title() {
        $this->open("/artigos");
        $this->assertTitle("SON Framework");
    }
    
    public function testVerificaSeConsegueInserirRegistro() {
        $this->open("/artigos");
        $this->click("adicionar");
        $this->type("nome", "Teste S");
        $this->type("descricao", "Descricao S");
        $this->click("submit");
        $this->waitForPageToLoad(1000);
        $this->assertEquals("Dados inseridos com sucesso!", $this->getText("//div[@class='notification']/p"));
    }
    
    public function testGeral() {
        $this->title();
    }
}
