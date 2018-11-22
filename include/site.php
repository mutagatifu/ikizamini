<?php
/**
 * Created by PhpStorm.
 * User: Hview
 * Date: 21/11/2018
 * Time: 13:57
 */
include 'dbconnection.php';
class Sites extends DbConnection{
    private $location;
    private $name;
    private $streetname;
    /**
     * @return mixed
     */
    public function getLocation()
    {
        return $this->location;
    }
    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * @return mixed
     */
    public function getStreetname()
    {
        return $this->streetname;
    }
    /**
     * @param mixed $streetname
     */
    public function setStreetname($streetname)
    {
        $this->streetname = $streetname;
    }
    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }
    /**
     * @param mixed $location
     */
    public function setLocation($location)
    {
        $this->location = $location;
    }
    public function recordSites(){
        $query = $this->connection->query("INSERT INTO `sites`(`location`, `name`, `streetname`) VALUES ('$this->location','$this->name','$this->streetname')");
        return $query;
    }
}


?>