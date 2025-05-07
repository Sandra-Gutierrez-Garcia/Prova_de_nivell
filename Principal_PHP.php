<?php
include 'personaje.php';
include_once 'hablilidad.php';

// Habilidades ofensivas

$bolaFuego = new hablilidad("BoladeFuego", "MagiaOfensiva", "LargoAlcance", 45);
$golpeEspada = new hablilidad("GolpeEspada", "AtaqueFísico", "CortoAlcance", 35);
$flechaHielo = new hablilidad("FlechaDeHielo", "MagiaOfensiva", "MedioAlcance", 38);
$cura = new hablilidad("Cura", "MagiaCurativa", "CortoAlcance", 50);

$cloud = new Personaje("Cloud Strife", 21, "Ex-SOLDADO", [$golpeEspada]);
$tifa = new Personaje("Tifa Lockhart", 20, "Luchadora", [$golpeEspada]);
$aerith = new Personaje("Aerith Gainsborough", 22, "Cetra", [$cura, $flechaHielo]);
$vincent = new Personaje("Vincent Valentine", 27, "Ex-Turco", [$bolaFuego]);

$personajes=[$cloud,$tifa,$aerith,$vincent];

function devuelvaPersonjaMasJoven(array $personajes):String{
    $edadPrincipal=(int)27;
    $personajeEncontrado=null;

    foreach($personajes as $personaje){
        if($personaje->getEdad()<$edadPrincipal){
          $edadPrincipal= $personaje->getEdad();
          $personajeEncontrado=$personaje;


        }
    }
    return $personajeEncontrado;

}

function devulevaLaHablilidad(array $personajes):string{
    $personajesConHabilidad=[];
    $habilidadBuscar=(String)"GolpeEspada";
    $hablilidadDelPersonaje=(string)null;

    foreach($personajes as $personaje){

        $habilidadBuscarDelPersonaje=$personaje->getHabilidad();

        foreach($habilidadBuscarDelPersonaje as $habilidad){

            if($habilidad->getNombreHabilidad()==$habilidadBuscar){
                $personajesConHabilidad[] = $personaje->getNombre();
            }
            
        }
       
    }return implode(", ", $personajesConHabilidad);
     
    }


echo devuelvaPersonjaMasJoven( $personajes);
echo "\n";
echo devulevaLaHablilidad($personajes);

?>