<?php
/**
 * Created by PhpStorm.
 * User: Hview
 * Date: 21/11/2018
 * Time: 09:20
 */
include 'dbconnection.php';
class services extends DbConnection{
    private $serviceName;
    private $price;
    private $school;

    /**
     * @return mixed
     */
    public function getSchool()
    {
        return $this->school;
    }

    /**
     * @param mixed $school
     */
    public function setSchool($school)
    {
        $this->school = $school;
    }
    /**
     * @return mixed
     */
    public function getServiceName()
    {
        return $this->serviceName;
    }

    /**
     * @param mixed $serviceName
     * @return services
     */
    public function setServiceName($serviceName)
    {
        $this->serviceName = $serviceName;
        return $this;
    }
    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }
    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }
    public function escape_string($value)
    {
        return $this->connection->real_escape_string($value);
    }
    public function recordServisi(){
        $query = $this->connection->query("insert into services(name,price,schoolId) values ('$this->serviceName','$this->price','$this->school')");
        return $query;
    }
}
?>