<?php
use PHPUnit\Framework\TestCase;

require_once 'src/Poneys.php';

/**
 * Classe de test de gestion de poneys
 */
class PoneysTest extends TestCase
{
    private $poneys;
    /**
     * Creer la method setUp()
     */
    protected function setUp(){
        $this->poneys = new Poneys;
        $this->poneys->setCount(count);
    }

     /**
     * mocking the getName
     */
    public function mockGetNamesPoneysFromField(){
        $names = [
            'Joe', 'William', 'Hai'
        ];
        $this->poneys = $this->getMockBuilder('Poneys')->getMock();
        $this->poneys->expects($this->exactly(1))->method('getNames')->willreturn($names);  
        $this->assertEquals($name, $this->poneys->getNames());
    }

    /**
     * Remove Poney 
     * @dataProvider providerRemove
     * @return void
     */
    public function testRemovePoneyFromField($remove, $result)
    {
        //CORRIGE
        // $this->expectException(Exception::class);
        // $this->expectExceptionMessege('Trop de poneys retirer');
        $this->poneys->removePoneyFromField($remove);
        // Assert
        $this->assertTrue($this->poneys->getCount() > 0);
        $this->assertEquals($result, $this->poneys->getCount());

      
    }
    /**
     * Add the poney from field
     * @dataProvider providerAjout
     * @return void
     */

    public function testAddPoneyFromField($add, $result){
        $this->poneys->addPoneysFromField($add);
        $this->assertEquals($result, $this->poneys->getCount());
    }
    /**
     * Data Provider for removing the poneys
     */
    public function providerRemove()
    {
        return array(
            array(1,7),
            array(2,6),
            array(10,3)
        );
    }
    /**
     * Data Provider for adding the poneys
     */
    public function providerAjout()
    {
        return array(
            array(1,9),
            array(2,10),
            array(5,13),
            array(9,16)
        );
    }
    protected function tearDown(){
        $this->poneys = null;
        // fwrite(STDOUT, __METHOD__ . "\n");
    }
    
}

?>
