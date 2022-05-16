<?php

    include 'Viaje.php';
    include 'Aereo.php';
    include 'Terrestre.php';

    echo "\n"."\n"."\n"."\n";
    echo "SI LA VENTA ES POSIBLE RETORNA EL PRECIO, -1 EN CASO CONTRARIO\n";


    //Cantidad de asientos disponibles: 2 en todos los vuelos.
    $v1=new Aereo(100,false,2,"VUELO-1","Aerol.1","TURISTA",0);  //vuelo ida turista sin escala
    $v2=new Aereo(100,false,2,"VUELO-1","Aerol.1","TURISTA",2); //vuelo ida turista con escala
    $v3=new Aereo(100,true,2,"VUELO-2","Aerol.1","PRIMERA",1);//vuelo ida y vuelta turista con escala
    $v4=new Aereo(100,true,2,"VUELO-2","Aerol.1","PRIMERA",0);  //vuelo ida y vuelta primera sin escala
    

    //Cantidad de asientos disponibles: 1 en todos los viajes.
    $t1=new Terrestre(100,false,1,"CAMA");  //Terrestre ida cama
    $t2=new Terrestre(100,false,1,"SEMICAMA"); //Terrestre ida semicama
    $t3=new Terrestre(100,true,1,"CAMA"); //Terrestre ida y vuelta cama
    $t4=new Terrestre(100,true,1,"SEMICAMA"); //Terrestre ida y vuelta semicama

    echo "venta de terrestre 1 \n";
    echo $t1->venderPasaje("juan")."\n";
    echo $t1->venderPasaje("pedro")."\n";

    echo "venta de terrestre 2 \n";
    echo $t2->venderPasaje("juan")."\n";
    echo $t2->venderPasaje("pedro")."\n";

    echo "venta de terrestre 3 \n";
    echo $t3->venderPasaje("juan")."\n";
    echo $t3->venderPasaje("pedro")."\n";

    echo "venta de terrestre 4 \n";
    echo $t4->venderPasaje("juan")."\n";
    echo $t4->venderPasaje("pedro")."\n";
    echo "****************************\n\n";

    echo "venta de vuelo 1 \n";
    echo $v1->venderPasaje("juan")."\n";
    echo $v1->venderPasaje("pedro")."\n";
    echo $v1->venderPasaje("diego")."\n";

    echo "venta de vuelo 2 \n";
    echo $v2->venderPasaje("juan")."\n";
    echo $v2->venderPasaje("pedro")."\n";
    echo $v2->venderPasaje("diego")."\n";

    echo "venta de vuelo 3 \n";
    echo $v3->venderPasaje("juan")."\n";
    echo $v3->venderPasaje("pedro")."\n";
    echo $v3->venderPasaje("diego")."\n";

    echo "venta de vuelo 4 \n";
    echo $v4->venderPasaje("juan")."\n";
    echo $v4->venderPasaje("pedro")."\n";
    echo $v4->venderPasaje("diego")."\n";


?>