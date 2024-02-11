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
    case 'editMeeting':
        editpage($_GET['id_meeting'], $_GET['id_betania']);
        break;
    case 'addMeeting':
    $id_betania  = $_POST['id_betania'];
    $date_betania  = $_POST['date_betania'];
    $friends  = $_POST['friends'];
    $siblings = $_POST['siblings'];
    $childrens = $_POST['childrens'];
    $offering  = $_POST['offering'];
        addMeeting($id_betania,$date_betania,$friends,$siblings,$childrens,$offering);
        break;
    case 'betania':
     $id_betania =   $_GET['id_betania'];
        betania($id_betania);
        break;
    default :
        dashboard();
        break;
}