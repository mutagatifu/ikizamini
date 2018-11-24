<?php
include '../include/school.php';

$schools = new School();

$schoolId = $_POST['school'];

echo $schoolId;
$query = $schools->deleteSchool($schoolId);
if($query)
{
    echo "success";
}
else{
    echo "failed";
}

?>