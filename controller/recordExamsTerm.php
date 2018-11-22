<?php
/**
 * Created by PhpStorm.
 * User: Hview
 * Date: 21/11/2018
 * Time: 12:11
 */
include '../include/examterms.php';
$term = new examTerm();

$month = $_POST['month'];
$from = $_POST['from'];
$to = $_POST['to'];
 if(!empty($month) && !empty($from) && !empty($to) ){
     $term->setMonth($month);
     $term->setFrom($from);
     $term->setTo($to);

     $query = $term->recordTerms();
     if($query){
         echo "success";
     }
     else{
         echo "failed";
     }
 }
 else{
     echo"no field would be left empy";
 }

?>