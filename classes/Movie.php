<?php

class Movies {
    private $titolo;
    private $linguaOriginale;
    private $anno;

    public function getTitolo(){
        return $this->titolo;
    }
    public function getLinguaOriginale(){
        return $this->linguaOriginale;
    }
    public function getAnno(){
        return $this->anno;
    }

    
    public function __construct($titolo,$linguaOriginale,$anno){
        $this->titolo = $titolo;
        $this->linguaOriginale = $linguaOriginale;
        $this->anno = $anno;
    }

    public function getMovie(){
        return "{$this->titolo} {$this->linguaOriginale} {$this->anno}";
    }
}
