<?php
/**
* Testa se o $nYear é um ano bissexto
* $nYear ano a ser testado
* retorna true caso seja ano bissexto
**/
function isLeapYear( $nYear ) { //Leap Year = Ano bissexto
  if(($nYear % 4 == 0 && $nYear % 100 !== 0) || ($nYear % 400 == 0)) {
    return true;
  } else {
    return false;
  }
} //function isLeapYear( $nYear ) {

 ?>
