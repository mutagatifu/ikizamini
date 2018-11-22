<?php
/**
 * Created by PhpStorm.
 * User: Hview
 * Date: 21/11/2018
 * Time: 14:03
 */
include '../include/site.php';
$site = new Sites();
$location = $_POST['location'];
$name = $_POST['name'];
$streetname = $_POST['streetname'];

if (!empty($location) && !empty($name) && !empty($streetname)){

    $site->setLocation($location);
    $site->setName($name);
    $site->setStreetname($streetname);
    $query = $site->recordSites();
    if ($query){
        echo "success";
    }
    else{
        echo "failed";
    }
}
else{
    echo "no field is to remain empty";
}


?>