<?php

class Movies {
    private $titolo;
    private $linguaOriginale;
    private $anno;
    private $voto;

    public function getTitolo(){
        return $this->titolo;
    }
    public function getLinguaOriginale(){
        return $this->linguaOriginale;
    }
    public function getAnno(){
        return $this->anno;
    }
    public function getVoto(){
        return $this->voto;
    }
    

}
