<?php



if ($estConnecte) {
   include 'vues/v_accueilVisiteur.php';
} else if ($estComptableConnecte) {
     include 'vues/v_accueilComptable.php';  
} else {
    include 'vues/v_connexion.php';
}



/**if ($estVisiteurConnecte) {
    include 'vues/v_accueilVisiteur.php';
} else {
    include 'vues/v_connexion.php';
}
if ($estComptableConnecte) {
    include 'vues/v_accueilomptable.php';
} else {
    include 'vues/v_connexion.php';
}
**/
