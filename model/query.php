<?php
if (file_exists('../../controller/start.inc.php')) {
    include '../../controller/start.inc.php';
} elseif (file_exists('../controller/start.inc.php')) {
    include '../controller/start.inc.php';
} elseif (file_exists('../../../controller/start.inc.php')) {
    include '../../../controller/start.inc.php';
} else {
    include './controller/start.inc.php';
}



if(!empty($_SESSION['lga_type']) && isset($_SESSION['lga_type'])){
    //Check schools
    $tblName = '_tbl_sch_address';
    $conditions = [
        'where' => [
            '._tbl_sch_address.lga_id' => $_SESSION['lga_type'],
        ],
        'joinl' => [
            '_tbl_sch_corporate_data' => ' on _tbl_sch_corporate_data.sch_code = _tbl_sch_address.sch_code',
            'available_classes' => ' on _tbl_sch_corporate_data.available_classes = available_classes.id',
            '_tbl_phone_number' => ' on _tbl_phone_number.sch_code = _tbl_sch_address.sch_code',
            'lga_tbl' => ' on lga_tbl.lga_id = _tbl_sch_address.lga_id',
            'state_tb' => ' on state_tb.state_id = lga_tbl.state_id',
            'region_tbl' => ' on region_tbl.region_id = state_tb.region_id',
            'country_tbl' => ' on country_tbl.country_id = region_tbl.country_id',
        ]
    ];
    $related_schools = $model->getRows($tblName, $conditions);
}
?>