<?php


class CMarcaE {
    //campos
    private $id_marc;
    private $nomb_marc;
    private $esta_marc;
    private $imag_marc;
    
    function getId_marc() {
        return $this->id_marc;
    }

    function getNomb_marc() {
        return $this->nomb_marc;
    }

    function getEsta_marc() {
        return $this->esta_marc;
    }

    function getImag_marc() {
        return $this->imag_marc;
    }

    function setId_marc($id_marc) {
        $this->id_marc = $id_marc;
    }

    function setNomb_marc($nomb_marc) {
        $this->nomb_marc = $nomb_marc;
    }

    function setEsta_marc($esta_marc) {
        $this->esta_marc = $esta_marc;
    }

    function setImag_marc($imag_marc) {
        $this->imag_marc = $imag_marc;
    }



}
