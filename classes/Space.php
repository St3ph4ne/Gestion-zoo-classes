<?php 

abstract class Space {

    private array $animals = [];

    public function add(Animal $a): void{
        array_push($this->animals, $a);
    }

    /**
     * enlève un animal ciblé par son index 
     * @param integer $index 
     * @return boolean return true if animal is removed false otherwise
     */
    public abstract function removeAnimalByIndex(int $index): bool;

    /**
     * enlève un animal :
    */ 
    public abstract function remove(Animal $a): bool;

  }