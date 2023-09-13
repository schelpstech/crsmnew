<?php
include "./model/query.php";


if (isset($_POST['searchSchools']) && !empty($_SESSION['searchToken']) && base64_encode($_SESSION['searchToken']) == $_POST['searchToken']) {
    
    //Check LGA if not empty
    $lga_type = htmlspecialchars($_POST['lga_type']);

    $tblName = '_tbl_sch_access';
    $conditions = [
        'where' => [
            'user_name' => $_SESSION['active'],
        ],
        'return_type'=> 'single',
    ];
    $user_details = $model->getRows($tblName, $conditions);
}
  

?>