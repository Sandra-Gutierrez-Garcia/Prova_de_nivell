<?php
class hablilidad {
    private string $nombreHabilidad;
    private string $tipoDeAtaque;
    private string $alcance;
    private int $dañoOCuracion;

    public function __construct(string $nombreHabilidad,string $tipoDeAtaque, string $alcance, int $dañoOCuracion) {
        $this->nombreHabilidad = $nombreHabilidad;
        
        $this->alcance = $alcance;
        $this->dañoOCuracion = $dañoOCuracion;
    }

    public function getNombreHabilidad(): string {
        return $this->nombreHabilidad;
    }
}


?>