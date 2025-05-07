<?php
class personaje{

private string $nombre;
private int $edad;
private string $profession;
private array $habilidad=[];

public function __construct(string $nombre,int $edad,string $profession, array $habilidad=[]){
    $this->nombre=$nombre;
    $this->edad=$edad;
    $this->profession=$profession;
    $this->habilidad=$habilidad;
}

public function getNombre():string{
    return $this->nombre;
}
public function getEdad():int{
    return $this->edad;
}
public function getProfession():string{
    return$this->profession;
}
public function getHabilidad(): array {
    return $this->habilidad;
}
public function __toString():String{
    return $this->nombre;
}

}

?>