<?php
/**
 *Created by bargylus.
 *FILE_NAME:home.php
 *USER:marwan
 *DATE:14.05.2020
 */

ob_start(); 
?>
<h1><?=$betania['name']?></h1>


<h4><?=$listResponsibles?></h4>


<?php foreach($newList as $key  => $oneMeeting){ ?>
<table class="table table-striped ">
  <thead >
    <tr>
    <th><h5><?=$listMonths[$key]?></h5></th>
      <th scope="col">Amigos</th>
      <th scope="col">Hnos</th>
      <th scope="col">Niños</th>
      <th scope="col">Ofrenda</th>
    </tr>
  </thead>
  <tbody>

  <?php foreach($newList[$key] as $meeting){ ?>
    <tr>
      <th><?=$meeting['date_meeting']?></th>
      <td><?=$meeting['friends']?></td>
      <td><?=$meeting['Siblings']?></td>
      <td><?=$meeting['childrens']?></td>
      <td><?=$meeting['offering']?></td>
    </tr>
<?php } ?>


  </tbody>
</table>
<?php } ?>
   

<?php
$content = ob_get_clean();
require "view/gabarit.php";
?>