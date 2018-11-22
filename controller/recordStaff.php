<?php
/**
 * Created by PhpStorm.
 * User: Hview
 * Date: 21/11/2018
 * Time: 14:30
 */
include '../include/staff.php';
$staff = new Staff();

$names =$_POST['names'];
$phoneNumber =$_POST['phone'];
$email =$_POST['email'];
$position =$_POST['position'];
$gender =$_POST['gender'];
$ages =$_POST['age'];
$location =$_POST['location'];
$schoolId =$_POST['school'];
$image =$_FILES['profile']['name'];
$imagetmp = $_FILES['profile']['tmp_name'];
if(!empty($names) && !empty($phoneNumber) && !empty($email) && !empty($position) && !empty($gender) && !empty($ages) && !empty($location) && !empty($schoolId) && !empty($image)){
 $imageExtension = pathinfo($image,PATHINFO_EXTENSION);
    $allowedtype = array('PNG','jpg','jpeg','png','JPG','JPEG');

    if (!in_array($imageExtension,$allowedtype)){
        echo "this ".$imageExtension." type is not supported";
    }
   else{


        $target= "uploads/".basename($image);
        $sendimage=move_uploaded_file($imagetmp, $target);
        if(!$sendimage){
            echo "failed to upload";
        }
        else{
            $staff ->setNames($names);
            $staff->setPhoneNumber($phoneNumber);
            $staff->setEmail($email);
            $staff->setPosition($position);
            $staff->setGender($gender);
            $staff->setAges($ages);
            $staff->setLocation($location);
            $staff->setSchoolId($schoolId);
            $staff->setProfileImage($image);


            $query=$staff->recordStaff();
            if($query){
                echo "success";
            }
            else{
                echo "failed to record the staff";
            }
        }

    }
}
else
{
    echo "no field would be left empty";
}

?>