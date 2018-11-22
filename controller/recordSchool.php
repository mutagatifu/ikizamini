<?php
/**
 * Created by PhpStorm.
 * User: Hview
 * Date: 21/11/2018
 * Time: 10:03
 */
include '../include/school.php';
$ikigo = new School();
$name = $_POST['name'];
$location=$_POST['location'];
$streetname=$_POST['street'];
$owner = $_POST['owner'];
$email = $_POST['emails'];
$phone = $_POST['fone'];
if(!empty($name) && !empty($location)&& !empty($streetname) && !empty($owner) && !empty($email) && !empty($phone)){
  $ikigo->setName($name);
  $ikigo->setLocation($location);
  $ikigo->setStreename($streetname);
  $ikigo->setOwner($owner);
  $ikigo->setEmail($email);
  $ikigo->setPhone($phone);
  $names = $ikigo->getName();
  $ahantu = $ikigo->getLocation();
  $agace = $ikigo->getStreename();
  $nyiracyo = $ikigo->getOwner();
  $email = $ikigo ->getEmail();
  $fone = $ikigo->getPhone();
  //echo "byose ni "." ".$names." ".$ahantu." ".$nyiracyo." ".$email." ".$fone;

 $query = $ikigo->recordSchool();
 if ($query){
      echo "success";
  }
  else{
      echo "failed";
  }

}

?>