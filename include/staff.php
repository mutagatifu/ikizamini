<?php
/**
 * Created by PhpStorm.
 * User: Hview
 * Date: 21/11/2018
 * Time: 14:19
 */
include 'dbconnection.php';
class Staff extends DbConnection
{
private $names;
private $phoneNumber;
private $email;
private $position;
private $gender;
private $ages;
private $location;
private $schoolId;
private $profileImage;
    /**
     * @return mixed
     */
    public function getNames()
    {
        return $this->names;
    }
    /**
     * @param mixed $names
     */
    public function setNames($names)
    {
        $this->names = $names;
    }
    /**
     * @return mixed
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }
    /**
     * @param mixed $phoneNumber
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
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
    public function getPosition()
    {
        return $this->position;
    }
    /**
     * @param mixed $position
     */
    public function setPosition($position)
    {
        $this->position = $position;
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
    public function getAges()
    {
        return $this->ages;
    }
    /**
     * @param mixed $ages
     */
    public function setAges($ages)
    {
        $this->ages = $ages;
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
    public function getSchoolId()
    {
        return $this->schoolId;
    }
    /**
     * @param mixed $schoolId
     */
    public function setSchoolId($schoolId)
    {
        $this->schoolId = $schoolId;
    }
    /**
     * @return mixed
     */
    public function getProfileImage()
    {
        return $this->profileImage;
    }
    /**
     * @param mixed $profileImage
     */
    public function setProfileImage($profileImage)
    {
        $this->profileImage = $profileImage;
    }
public function recordStaff(){
        $query = $this->connection->query("INSERT INTO `staff`(`name`, `phone_number`, `email`, `position`, `gender`, `age`, `location`, `school_id`, `profile_image`) 
                                          VALUES ('$this->names','$this->phoneNumber','$this->email','$this->position','$this->gender','$this->ages','$this->location','$this->schoolId','$this->profileImage')");
        return $query;
}



}