<?php
    class Terrestre extends Viaje{
        private $tipoAsiento;

        /**
        * Metodo constructor de la clase Terrestre
        */
        public function __construct($importe,$ida_vuelta,$asientos_disp,$tipoAsiento){
            parent::__construct($importe,$ida_vuelta,$asientos_disp);
            $this->tipoAsiento=$tipoAsiento;
        }

        public function setTipoAsiento($tipoAsiento){
            $this->tipoAsiento=$tipoAsiento;
        }

        public function getTipoAsiento(){
            return $this->tipoAsiento;
        }

        public function __toString(){
            $a=parent::__toString();
            $b=$this->getTipoAsiento();
            
            return ("Viaje: ".$a."Tipo Asiento: ".$b."\n");
        }

        /**
         * Metodo que intenta vender un pasaje, retornando el precio del pasaje en caso de lograr la venta o 
         * -1 en caso contrario.
         * @return float
         */
        public function venderPasaje($pasajero){
            $importe=-1;
            if (parent::hayPasajesDisponible()){
                //Vendo el pasaje. Para ello decremento la variable asientos disponibles
                parent::setAsientos_disp(parent::getAsientos_disp()-1);

                $importeBase=parent::getImporte();
                
                //Heredo el importe de la venta de un pasaje (sea ida y vuelta o no)
                $importe=parent::venderPasaje($pasajero);

                //Si el asiento e tipo CAMA incremento al importe Base un 25%
                if ($this->getClase="CAMA"){
                    $importe=$importe+($importeBase*0.25);
                }
            }
            return $importe;
        }
    }
?>