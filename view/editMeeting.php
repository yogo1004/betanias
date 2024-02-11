<?php
/**
 *Created by bargylus.
 *FILE_NAME:home.php
 *USER:marwan
 *DATE:14.05.2020
 */

ob_start();

?>
<div class="col-12">
            <form method="post" action="index.php?action=editMeeting&id_betania=<?=$id_betania?>" id="formEdit">
            <!-- Modal --> 
            <input type="hidden" name="id_betania" value="<?=$id_betania?>" >   
            <input type="hidden" name="id_meeting" value="<?=$meeting['id_meeting']?>" >   
            <div  id="exampleModalCenter" tabindex="-1" role="dialog"
                 aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Editar una reunion</h5>
                            <a  class="btn btn-secondary" href="index.php?action=betania&id_betania=<?=$id_betania?>">X</a>
                        </div>
                        <div class="modal-body">
    
                        <div class="form-row">
                            <div class="col">
                                <input type="date" name="date_meeting" required class="form-control"
                                value="<?=$meeting['date_meeting']?>"  placeholder="Fecha de la reunion">
                            </div>
                            <div class="col">
                            <input type="text" value="<?=$meeting['friends']?>" name="friends" required class="form-control"
                                       placeholder="Amigos">
                            </div>
                            <div class="col">
                                <input type="text"  value="<?=$meeting['Siblings']?>" name="siblings" required class="form-control"
                                       placeholder="Hermanos">
                            </div>
                            <div class="col">
                                <input type="text"  value="<?=$meeting['childrens']?>" name="childrens" required class="form-control"
                                       placeholder="Niños">
                            </div>
                            <div class="col">
                                <input type="text"  value="<?=$meeting['offering']?>" name="offering" required class="form-control"
                                       placeholder="Ofrenda">
                            </div>
                        </div>
    
                    </div>
                        <!-- Modal -->
    
                    <div class="modal-footer">
                    <a  class="btn btn-danger" href="index.php?action=betania&id_betania=<?=$id_betania?>" >ELIMINAR</a>
                        <button type="submit" form="formEdit" id="save" class="btn btn-primary">EDITAR</button>
                    </div>
                    </div>
                </div>
                                </form>
            </div>
  
<?php
$content = ob_get_clean();
require "view/gabarit.php";
?>