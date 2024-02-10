<?php
/**
 *Created by bargylus.
 *FILE_NAME:home.php
 *USER:marwan
 *DATE:14.05.2020
 */

ob_start();

?>

  
<?php
$content = ob_get_clean();
require "view/gabarit.php";
?>