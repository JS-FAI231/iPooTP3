<?php
    class Aereo extends Viaje{
        private $numeroVuelo;
        private $aerolinea;
        private $clase;
        private $cant_escalas;

        /**
        * Metodo constructor de la clase Aereo
        */
        public function __construct($importe,$ida_vuelta,$asientos_disp,$numeroVuelo,$aerolinea,$clase,$cant_escalas){
            parent::__construct($importe,$ida_vuelta,$asientos_disp);
            $this->numeroVuelo=$numeroVuelo;
            $this->aerolinea=$aerolinea;
            $this->clase=$clase;
            $this->cant_escalas=$cant_escalas;
        }

        public function setNumeroVuelo($numeroVuelo){
            $this->numeroVuelo=$numeroVuelo;
        }
        public function setAerolina($aerolinea){
            $this->aerolinea=$aerolinea;
        }
        public function setClase($clase){
            $this->clase=$clase;
        }
        public function setCant_escalas($cant_escalas){
            $this->cant_escalas=$cant_escalas;
        }

        public function getNumeroVuelo(){
            return $this->numeroVuelo;
        }
        public function getAerolina(){
            return $this->aerolinea;
        }
        public function getClase(){
            return $this->clase;
        }
        public function getCant_escalas(){
            return $this->cant_escalas;
        }

        public function __toString(){
            $a=parent::__toString();
            $b=$this->getNumeroVuelo();
            $c=$this->getAerolina();
            $d=$this->getClase();
            $e=$this->getCant_escalas();
            return ("Viaje: ".$a."Nro Vuelo: ".$b."Aerolinea: ".$c."Clase: ".$d."Cant Escalas: ".$e."\n");
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

                //Si el asiento el primera clase incremento al importe Base un 40%
                if ($this->getClase()=="PRIMERA"){
                    $importe=$importe+($importeBase*0.4);
                }
                //Si el vuelo tiene eslcalas incremento al importe Base un 60%
                if ($this->getCant_escalas()>0){
                    $importe=$importe+($importeBase*0.6);
                }

            }
            return $importe;
        }
    }
?>