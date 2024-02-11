<?php
require "model/model.php";


function dashboard()
{
    $betanias = getBetanias();
    $_SESSION['betanias'] = $betanias;
    require_once 'view/dashboard.php';
}

function getMonth($mydate){
return  date("m",strtotime($mydate));
}

function getQuantityDiferentsMonths($array){
    
    $arrayFiltred = [

    ];
        foreach($array as $index => $item){
          
         $month =   getMonth($item["date_meeting"]);

         setlocale(LC_TIME, 'ES.UTF-8');                                              
            $monthName = strftime('%B', mktime(0, 0, 0, $month));

            if(!in_array($monthName, $arrayFiltred)){
                
                array_push($arrayFiltred,$monthName);
            }

        }
        return $arrayFiltred ;
}

function betania($id_betania)
{
    $betania = getBetaniaById($id_betania);
    $responsibles  = getResponsiblesbyBetania($id_betania);
    $meetings = getMeetingsbyBetania($id_betania);
    

   $listMonths = getQuantityDiferentsMonths($meetings);
  
   
   $listSeparedByMonth = [];
    $months = Array();
    $listDates = [];
    foreach($meetings as $key => $meeting){
      array_push( $listDates, $meeting['date_meeting']);
    };


    foreach($listDates as $d) {
        list($y,$m) = explode("-",$d);
        $months[$y."-".$m][] = $d;
    };
    
    // $years = array_values($years);
    $months = array_values($months);
    for($i = 0 ; $i < sizeof($months); $i++){
        $months[$i] = array_reverse($months[$i]);
       
        for($ii = 0 ; $ii < sizeof($months[$i]); $ii++){
         $oneDay =   getMeetingByDate($months[$i][$ii]);
         $newList[$i][$ii] = $oneDay;
        }
       
    }



        $listResponsibles = "";
        for($i = 0 ; $i < sizeof($responsibles) ; $i++){
            if($i != 0){
                $listResponsibles .= ", ";
            }
            $listResponsibles .= $responsibles[$i]['firstname'];

        }
    
        require_once 'view/betania.php';
}

function addMeeting($id_betania,$date_betania,$friends,$siblings,$childrens,$offering){
    $execute = [
        'friends' => $friends,
        'siblings' => $siblings,
        'childrens' => $childrens,
        'date_meeting' => $date_betania,
        'offering' => $offering,
        'id_betania' => $id_betania,

    ];
    $id =createMeeting($execute);
   betania($id_betania);
}

function editMeetingPage($idMeeting,$id_betania){
   $meeting = getMeetingById($idMeeting);
    require_once 'view/editMeeting.php';
}

function editMeeting($id_betania, $id_meeting, $date_meeting, $friends, $siblings,$childrens, $offering){
    $execute = [
        'friends' => $friends,
        'siblings' => $siblings,
        'childrens' => $childrens,
        'date_meeting' => $date_meeting,
        'offering' => $offering,
        'id_betania' => $id_betania,
        'id_meeting' => $id_meeting,

    ];

    var_dump($execute);
   $new = updateMeetingById($execute);

    betania($id_betania);
}

function deleteMeeting($id_meeting, $id_betania){

  $id =  deleteMeetingModel($id_meeting);

  betania($id_betania);
}