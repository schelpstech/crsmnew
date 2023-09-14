<?php
include "../model/query.php";

// check authorisation
if (isset($_POST['searchSchools']) 
    && !empty($_SESSION['searchToken']) 
    && base64_encode($_SESSION['searchToken']) == $_POST['searchToken']) {
    
    //Check LGA if not empty
    $_SESSION['lga_type'] = htmlspecialchars($_POST['lga_type']);
    $model->redirect('../directory.php'); 
}else{
    echo $_POST['searchToken'];
    $model->redirect('../index.php'); 
    
}
  

?>