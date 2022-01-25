<?php 

/**
 * Collection d'espaces utilisables dans le zoo !
 */
abstract class Spaces {

    // zone de déclaration
    private array $spaces;

    // zone d'initialisation
    public function  __constructor(): Spaces{
        $this->spaces = [];
    }

    // zone d'implémentation :

    /**
     * ajoute un animal à l'espace :
    */ 
    public function add(Animal $a): void {
      // array_push(this->spaces, $a);
    }

    /**
     * ajoute la liste d'animaux "a" à l'espace :
    */ 
    public function addAll(Animals $a): void{
      foreach ($a->getAll() as $animal) {
        array_push($this->animals, $animal);
      }
      $this->spaces[0]->add($a);
    
    }

    /**
     * ajoute un espace :
    */ 
    public function new(Space $s): void{
      $s = new Space;

    }

    /**
     * récupère tous les espaces :
    */ 
    public function getAll(): array {
        return $this->spaces;
    }
}