<?php

declare (strict_types=1);


class Proveedor{
    private $cif;
    private $codigo;
    private $nombre;
    private $direccion;
    private $website;
    private $pais;
    private $email;
    private $telefono;
    
    public function __construct(string $cif,int $codigo,string $nombre,string $direccion,string $website, string $pais,string $email, string $telefono) {
        if(preg_match("/[ABCDEFGHKLMNPQS][[0][0-9]|[0-9]|[0-9][0-9]]{2}[0-9]{5}/", $cif)){
            
        }
        $this->cif=$cif;
        $this->codigo=$codigo;
        $this->nombre=$nombre;
        $this->direccion= $direccion;
        $this->website=$website;
        $this->pais=$pais;
        $this->email=$email;
        $this->telefono=$telefono;
    }
}
