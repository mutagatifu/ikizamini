<?php
/**
 * Created by PhpStorm.
 * User: Hview
 * Date: 21/11/2018
 * Time: 12:31
 */

include '../include/examTypes.php';
/*create an instance*/
$exam = new Examtype();
$examName = $_POST['name'];
if(!empty($examName)){
    $exam->setExamName($examName);
    $query = $exam->recordExamtype();
    if($query)
    {
        echo "success";
    }
    else{
        echo "failed";
    }
}
else{
    echo "this field cannot be empty";
}
?>