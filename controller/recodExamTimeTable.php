<?php
/**
 * Created by PhpStorm.
 * User: Hview
 * Date: 21/11/2018
 * Time: 15:39
 */
include '../include/timeTable.php';
$timetable = new timeTable();
$from = $_POST['from'];
$to = $_POST['to'];
$site = $_POST['site'];
$examtype = $_POST['examtype'];
$duration = $_POST['duration'];
$termRegistration = $_POST['term'];


$date=date_create($from);
date_add($date,date_interval_create_from_date_string($duration));
//"2 days"
$newdate = date_format($date,"Y-m-d");
//echo "new tade is can replace ".$newdate;

if (!empty($from) && !empty($to) && !empty($site) && !empty($examtype) && !empty($duration) && !empty($termRegistration)){
    //echo "byose".$from."  ".$to." ".$site." ".$examtype." ".$duration." ".$termRegistration;
$timetable->setFrom($from);
$timetable->setTo($to);
$timetable->setSite($site);
$timetable->setExamtype($examtype);
$timetable->setDuration($duration);
$timetable->setTermRegistration($termRegistration);

$query = $timetable ->recordTimeTable();
if ($query){
    echo "success";
}
else{
    echo "failed";
}
}
else{
    echo "no field should be left empty";
}



?>