<?php
$mois =getMois(date('d/m/y'));
$moisPrecedent =getMoisPrecedent($mois);
$action= filter_input(INPUT_GET,'action',FILTER_SANITIZE_STRING);
$ficheCL = $pdo->ficheDuMoisCloturee($moisPrecedent);
$lesVisiteurs = $pdo->getLesVisiteurs($pdo);
switch ($action){
   case 'valider':
       if($ficheCL){
           include 'vues/v_listesVisiteursMois.php';   
       }else{
           
       }
       break;
   default;
}