<?php 
include 'ejercicio_409Habitacion.php';
include 'ejercicio_409Reserva.php';

class Hotel {
    private string $nombre;
    private Habitacion $habitaciones;
    private Reserva $reservas;

    public function __construct(string $nombre, Habitacion $habitaciones, Reserva $reservas){
        $this->nombre = $nombre;
        $this->habitaciones = $habitaciones;
        $this->reservas = $reservas;
    }
    
    public function getNombre():string{
        return $this->nombre;
    }

    public function agregarHabitacion(Habitacion $habitacion):void{
        $this->habitaciones[]=$habitacion;
    }

    public function reservar(string $cliente, int $habitacion, DateTimeImmutable $entrada, DateTimeImmutable $salida ): Reserva{
       

                
            
        
       
    }
}