<!DOCTYPE html>
<html lang="fr">

<head>
    <title><?= $title; ?> </title>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

          <link href="../css/index.css" rel="stylesheet">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>

    <!-- (Optional) Latest compiled and minified JavaScript translation files -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/i18n/defaults-*.min.js"></script>


</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="200" class=" mb-0 pb-0  pb-0 mb-0 pt-0 mt-0  ">




<div class="site-wrap  pb-0 mb-0 pt-0 mt-0 bg-white ">
    <div class="container  mb-0 pt-0 mt-0 justify-content-center">

        <nav class="navbar navbar-expand mb-0 pt-0 mt-0 navbar-light  align-items-center align-content-center ">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class=" collapse  navbar-collapse mb-0 pt-0 mt-0   justify-content-center align-items-center align-self-center"
                     id="navbarSupportedContent">
                <ul class="navbar-nav align-items-end align-items-lg-center ">
                    <li class="nav-item dropdown border border-danger h-100">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                           data-toggle="dropdown">
                            Selectionar Betania
                        </a>
                        <div class="dropdown-menu mb-0 pb-0" aria-labelledby="navbarDropdown">
                        <?php foreach ($_SESSION['betanias'] as $oneBetania) { ?>
                            <a class="dropdown-item" href="index.php?action=betania&id_betania=<?=$oneBetania['id_betania']?>">  <?= $oneBetania["name"] ?></a>
                            <?php } ?>
                        </div>
                    </li>
                    <li class=" border border-danger h-100">
                        <button style="width: 300px" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                            Añadir una reunion
                        </button>
                    </li>
                </ul>
                        
            </div>
        </nav>
                        </div>
                        
            <div class="col-12">
            <form method="post" action="index.php?action=addMeeting" id="formAdd">
            <!-- Modal --> 
                <div class="modal fade bg-info" id="exampleModalCenter" tabindex="-1" role="dialog"
                 aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Ajouter un utilisateur</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
    
                        <div class="form-row">
                            <div class="col">
                                <select class="selectpicker form-control-sm show-tick form-select-lg"   name="id_betania" data-live-search="true">
                                <?php  foreach ($_SESSION['betanias'] as $betania) {   ?>
                                    <option value="<?= $betania['id_betania'] ?>" data-tokens="<?= $betania['name'] ?>"
                                        ><?= $betania['name'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="col">
                                <input type="date" name="date_betania" required class="form-control"
                                       placeholder="Fecha de la reunion">
                            </div>
                            <div class="col">
                                <input type="text" name="friends" required class="form-control"
                                       placeholder="Amigos">
                            </div>
                            <div class="col">
                                <input type="text" name="siblings" required class="form-control"
                                       placeholder="Hermanos">
                            </div>
                            <div class="col">
                                <input type="text" name="childrens" required class="form-control"
                                       placeholder="Niños">
                            </div>
                            <div class="col">
                                <input type="text" name="offering" required class="form-control"
                                       placeholder="Ofrenda">
                            </div>
                        </div>
    
                    </div>
                        <!-- Modal -->
    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Anular</button>
                        <button type="submit" form="formAdd" id="save" class="btn btn-primary">Añadir</button>
                    </div>
                    </div>
                </div>
                                </form>
            </div>
    <hr class=" pt-0 pb-0 mb-0 pb-0"
        style="height:3px;border-width:0;color:#ff0000;background-color:#ff0000; margin-top: 0;">
</div>

    <?= $content; ?>
</div>

</body>
</html>