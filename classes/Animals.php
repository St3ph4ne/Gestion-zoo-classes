<?php 

class Animals {

    private array $animals;

    function __constructor(){
        $this->animals = [];
    }

    // ajoute un animal
    public function add(Animal $a){
        array_push($this->animals,$a);
    }

    // récupère la liste des animaux
    public function getAll(): array{
        return $this->animals;
    }
}