<?php
    class Viaje{
        private $importe;
        private $ida_vuelta;
        private $asientos_disp;

        /**
         * Metodo constructor de la clase Viaje
         */
        public function __construct($importe,$ida_vuelta,$asientos_disp){
            $this->importe = $importe;
            $this->ida_vuelta = $ida_vuelta;
            $this->asientos_disp = $asientos_disp;
        }
        /**
         * @param float $importe
         */ 
        public function setImporte($importe){
            $this->importe = $importe;
        }

        /**
         * @param boolean $ida_vuelta
         */ 
        public function setIda_vuelta($ida_vuelta){
            $this->ida_vuelta = $ida_vuelta;
        }

        /**
         * @param int $asientos_disp
         */ 
        public function setAsientos_disp($asientos_disp){
            $this->asientos_disp = $asientos_disp;

        }

        /**
         * @return float
         */ 
        public function getImporte(){
            return $this->importe;
        }

        /**
         * @return boolean
         */ 
        public function getIda_vuelta(){
            return $this->ida_vuelta;
        }

        /**
         * @return int
         */ 
        public function getAsientos_disp(){
            return $this->asientos_disp;
        }

        public function __toString(){
            $a=$this->getImporte();
            if ($this->getIda_vuelta()){
                $b="IDA Y VUELTA";
            }else{
                $b="SOLO IDA";
            }
            $c=$this->getAsientos_disp();

            return ("Importe: ".$a." ".$b." Asientos Disponibles: ".$c."\n");
        }

        /**
         * Metodo que determina si existen pasajes disponibles.
         * @return float
         */
        public function hayPasajesDisponible(){
            $respuesta=false;
            if ($this->getAsientos_disp()>0){
                $respuesta=true;
            }
            return $respuesta;
        }

        /**
         * Metodo que devuelve el precio base de un viaje incrementando su valor
         * un 50% en caso de ser Ida y Vuelta.
         * @return float
         */
        public function venderPasaje($pasajero){
            $importe=$this->getImporte();
            //Si el viaje es ida y vuelta incremento al importe Base un 50%
            if ($this->getIda_vuelta()){
                $importe=$importe+($this->getImporte()*0.5);
            }
            return $importe;
        }

    }
?>
