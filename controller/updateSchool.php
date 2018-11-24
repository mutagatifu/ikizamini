<?php
include '../include/school.php';

$school = new School();

$schoolId = $_POST['schoolId'];
$name = $_POST['name'];
$location=$_POST['location'];
$streetname=$_POST['street'];
$owner = $_POST['owner'];
$email = $_POST['emails'];
$phone = $_POST['fone'];

$updateTime = date("Y-m-d h:i:s");

$school->setName($name);
$school->setLocation($location);
$school->setStreename($streetname);
$school->setOwner($owner);
$school->setEmail($email);
$school->setPhone($phone);
//echo "byose ni ".$school->getName()." ".$school->getLocation()." ".$school->getStreename()." ".$school->getOwner()." ".$school->getEmail()." ".$school->getPhone()." ".$updateTime." ".$schoolId;

  $query = $school->updateSchool($schoolId,$updateTime);
  if($query){
      echo "success";
  }
  else{
      echo "failed";
  }


?>