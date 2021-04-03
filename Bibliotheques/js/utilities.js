'use strict';   // Mode strict du JavaScript

/*************************************************************************************************/
/* *********************************** FONCTIONS UTILITAIRES *********************************** */
/*************************************************************************************************/

function getRandomInteger(min, max) {
    //The maximum is inclusive and the minimum is inclusive 
    return Math.floor(Math.random() * (max - min + 1)) + min;
}

function requestInteger(message, min, max){
    var integer;
    do{    
        integer = parseInt(window.prompt(message));
    } while( isNaN(integer) || integer < min || integer > max );
    
    return integer;
}

function setLocalStorage(storageName, datas){

    // on enregistre les données après les avoir converties en JSON
    window.localStorage.setItem(storageName, JSON.stringify(datas));
}


function getLocalStorage(storageName){
    var datas;

    // on récupère les données puis on les reconverties au format initial (JSON.parse)
    datas = JSON.parse(window.localStorage.getItem(storageName));

    return datas || [];
}