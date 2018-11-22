<?php
/**
 * Created by PhpStorm.
 * User: Hview
 * Date: 21/11/2018
 * Time: 10:58
 */
include 'dbconnection.php';
class Students extends DbConnection{
    private $nationalID;
    private $firstname;
    private $lastname;
    private $gender;
    private $age;
    private $phonenumber;
    private $email;
    private $location;
    /**
     * @return mixed
     */
    public function getNationalID()
    {
        return $this->nationalID;
    }
    /**
     * @return mixed
     */
    public function getLocation()
    {
        return $this->location;
    }
    /**
     * @param mixed $location
     */
    public function setLocation($location)
    {
        $this->location = $location;
    }
    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }
    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }
    /**
     * @return mixed
     */
    public function getFirstname()
    {
        return $this->firstname;
    }
    /**
     * @return mixed
     */
    public function getPhonenumber()
    {
        return $this->phonenumber;
    }
    /**
     * @param mixed $phonenumber
     */
    public function setPhonenumber($phonenumber)
    {
        $this->phonenumber = $phonenumber;
    }
    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }
    /**
     * @param mixed $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }
    /**
     * @return mixed
     */
    public function getGender()
    {
        return $this->gender;
    }
    /**
     * @param mixed $gender
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    }
    /**
     * @return mixed
     */
    public function getLastname()
    {
        return $this->lastname;
    }
    /**
     * @param mixed $lastname
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }
    /**
     * @param mixed $firstname
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }
    /**
     * @param mixed $nationalID
     */
    public function setNationalID($nationalID)
    {
        $this->nationalID = $nationalID;
    }

public function recordStudent(){
        $query = $this->connection->query("INSERT INTO `students`(`NationalID`, `firstName`, `lastName`, `gender`, `age`, `phoneNumber`, `email`, `location`) 
                                                  VALUES ('$this->nationalID','$this->firstname','$this->lastname','$this->gender','$this->age','$this->phonenumber','$this->email','$this->location')");
        return $query;
}
}

?>