$(function(){
    'use strict'


//*************Color texto entrada salida (MONITOREO)********************
    var eventoP = $(".eventoP");

    eventoP.each(function(){
        var valor = $(this).text();
        //console.log(valor);

        if (valor=="Entrada") {
            $(this).addClass("pEnt");
        }else{
            $(this).addClass("pSal");
        }
    });

//Modal de opciones de terminal (Monitoreo)*********
    var boxLed = $(".boxLed");



})
