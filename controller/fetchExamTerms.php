<?php
/**
 * Created by PhpStorm.
 * User: Hview
 * Date: 21/11/2018
 * Time: 16:24
 */
include '../include/examterms.php';
$terms = new examTerm();

$query = $terms->returnTerms();
$term = array();
foreach ($query as $row){
    $term[]=$row;
}
$arrayJS = array('status'=>1,'message'=>"success",'data'=>$term);
echo json_encode($arrayJS);
?>