<?php

    class Coche{

        protected $ruedas;
        /*--- protected para que la subclase camion pueda heredar la imposibilidad de modificacion.
        Si es private no se modifica pero no se puede ver desde las subclases ---*/

        var $color;

        protected $motor;

/*----SETTER - MODIFICAR LAS PROPIEDADES DED UN OBJETO
  ----GETTER - VER LAS PROPIEDADES DE UN OBJETO */

        function get_ruedas(){

            return $this->ruedas;

        }

        function get_motor(){

            return $this->motor;

        }

        function __construct(){//Estado inicial de la clase. Mismo nombre de la clase. Nueva forma de llamar al constructor: __construct
            $this->ruedas=4;

            $this->color="";

            $this->motor=1600;

        }


        function arrancar(){
        
            echo "Estoy arrancando <br>";

        }

        function girar(){

            echo "Estoy girando <br>";

        }

        function frenar(){

            echo "Estoy frenando <br>";

        }

        function set_color($color_coche, $nombre_coche){

            $this->color=$color_coche;

            echo "El color de " . $nombre_coche . " es: " . $this->color . "<br>";

        }

    }

/*--------------------------------------------------------------*/


class Camion extends Coche{
    
    function __construct(){//Estado inicial de la clase. Mismo nombre de la clase. Nueva forma de llamar al constructor: __construct
        $this->ruedas=8;

        $this->color="";

        $this->motor=2600;

    }

    function set_color($color_camion, $nombre_camion){//se sobreescribe la funcion de la clase padre, ya que era distinta

        $this->color=$color_camion;

        echo "El color de " . $nombre_camion . " es: " . $this->color . "<br>";

    }

    function arrancar(){

        parent::arrancar();//llama al metodo arrancar de la clase padre. Sirve para agegar parametros a la funcion heredada.

        echo "Camion arrancado";

    }

}


?>