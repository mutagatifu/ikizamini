<?php
/**
 * Created by PhpStorm.
 * User: Hview
 * Date: 22/11/2018
 * Time: 14:22
 */
include '../include/school.php';
$rates = new School();
$schoolId = $_POST['school'];
$query = $rates->recordRate($schoolId);
if($query)
{
    echo "success";
}
else{

        echo "failed";

}

?>