<?php
/**
 * Gestion de poneys
 */
class Poneys
{
    private $count = 0;
    private $capacity = capacity;
    /**
     * Retourne le nombre de poneys
     *
     * @return void
     */
    public function getCount(): int
    {
        return $this->count;
    }

    /**
     * Retire un poney du champ
     *
     * @param int $number Nombre de poneys à retirer
     *
     * @return void
     */
    public function removePoneyFromField(int $number): void
    {
        if($this->count < $number){
            throw new InvalidArgumentException("total < 0, Trop de poneys retirer");
        }
        if($number < 0){
            throw new InvalidArgumentException("number < 0, impossible");
        }
        $this->count -= $number;   
    }

    /**
     * Retourne les noms des poneys
     *
     * @return array
     */
    public function getNames(): array
    {
        //
    }

    public function addPoneysFromField(int $number): void
    {   
        if($number < 0){
            throw new InvalidArgumentException("number < 0, impossible");
        }
        if($this->count + $number > $this->capacity){
            throw new InvalidArgumentException("un champ ne peut contenir que ".$this->capacity." poneys");
        }
        $this->count += $number;
    }

    /**
     * Creer la method setUp()
     */
    public function setCount(int $number){
        $this->count = $number;
    }
}

?>
