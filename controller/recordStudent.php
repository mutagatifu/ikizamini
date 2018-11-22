<?php
/**
 * Created by PhpStorm.
 * User: Hview
 * Date: 21/11/2018
 * Time: 11:22
 */
include '../include/student.php';
/*create an instance*/
$student = new Students();
/*getting variables*/
$nationalId = $_POST['idnumber'];
$firstname= $_POST['fname'];
$lastname= $_POST['lname'];
$gender= $_POST['gender'];
$age= $_POST['ages'];
$phonenumber= $_POST['fone'];
$email= $_POST['email'];
$location= $_POST['location'];
/*validating the presence of variables*/
if (!empty($nationalId) && !empty($firstname) && !empty($lastname) && !empty($gender) && !empty($age) && !empty($phonenumber) && !empty($email) && !empty($location)){

    $student->setNationalID($nationalId);
    $student->setFirstname($firstname);
    $student->setLastname($lastname);
    $student->setGender($gender);
    $student->setAge($age);
    $student->setPhonenumber($phonenumber);
    $student->setEmail($email);
    $student->setLocation($location);

$query = $student->recordStudent();
if($query){
    echo "success";
}
else{
    echo "failed";
}
}
else{
    echo "no field would be left empty";
}

?>