<?php

require_once("../../../private/initialize.php");

$test = $_GET['test']??""; //get the test status

if($test=='404'){
    error_404();
}
if($test=='500'){
    error_500();
}
if($test=='redirect'){
    redirect_to(url_for('staff/subjects/index.php'));
}

?>