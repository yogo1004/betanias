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
      <th scope="col">Editar</th>
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
      <td><a type=button href="index.php?action=editMeeting&id_meeting=<?=$meeting['id_meeting']?>&id_betania=<?=$betania['id_betania']?>" class="btn btn-success">Edit <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
  <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001m-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708z"/>
</svg></a></td>
    </tr>
<?php } ?>


  </tbody>
</table>
<?php } ?>
   

<?php
$content = ob_get_clean();
require "view/gabarit.php";
?>