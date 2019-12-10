<?php
use PHPUnit\Framework\TestCase;

require_once 'src/Poneys.php';

class PoneysNewTest extends TestCase{

    private $poneys;
    /**
     * Creer la method setUp()
     */
    protected function setUp(){
        $this->poneys = new Poneys;
        $this->poneys->setCount(8);
    }
    protected function tearDown(){
        $this->poneys = null;
        // fwrite(STDOUT, __METHOD__ . "\n");
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

}
?>