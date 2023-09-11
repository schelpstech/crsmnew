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
;
?>