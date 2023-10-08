<?php
    
    

    function Calcular ($calculo){
        if(strcmp("suma",$calculo)==0){

            global $numero1;
            global $numero2;
            echo "La suma de los numeros es:  "  . ($numero1+$numero2);
        }
        if(strcmp("resta",$calculo)==0){

            global $numero1;
            global $numero2;
            echo "La resta de los numeros es:  "  . ($numero1-$numero2);
        }
        if(strcmp("multiplicacion",$calculo)==0){

            global $numero1;
            global $numero2;
            echo "La multiplicacion de los numeros es:  "  . ($numero1*$numero2);
        }
        if(strcmp("division",$calculo)==0){

            global $numero1;
            global $numero2;
            echo "La division de los numeros es:  "  . ($numero1/$numero2);
        }
        if(strcmp("incremento",$calculo)==0){

            global $numero1;
            $numero1++;
            echo "El incremento del numero es: $numero1 ";
        }
        if(strcmp("decremento",$calculo)==0){

            global $numero1;
            $numero1--;
        
            echo "El decremento del numero es:  $numero1 " ;
        }

    }
    ?>