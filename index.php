<?php
/**
 *Created by bargylus.
 *FILE_NAME:index.php
 *USER:marwan
 *DATE:14.05.2020
 */

require "controler/controler.php";


session_start();
// to go home by default
if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'dashboard';
}

switch ($action) {
    case 'betania':
     $id_betania =   $_GET['id_betania'];
        betania($id_betania);
        break;
    default :
        dashboard();
        break;
}